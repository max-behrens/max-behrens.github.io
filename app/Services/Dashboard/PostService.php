<?php

namespace App\Services\Dashboard;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class PostService
{
    public function datatable(Request $request): array
    {
        $search = $request->filled('search') ? $request->search : NULL;
        $sort_field = $request->filled('field') ? $request->field : 'updated_at';
        $sort_direction = $request->filled('direction') ? $request->direction : 'desc';


        Log::info('search:', ['search' => $search]);


        $posts = Post::query()
        ->select([
            'posts.id',
            'posts.user_id',
            'posts.title',
            'posts.slug',
            'posts.content',
            'posts.is_active',
            'posts.featured_image',
            'posts.created_at',
            'posts.updated_at',
            'users.id as userid',
            'users.name as username',
        ])
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->when($search, function ($query, $search) {
            $query->search('title', $search);
            $query->orSearch('slug', $search);
            $query->orSearch('content', $search);
        })
        ->when($sort_field && $sort_direction, function ($query) use ($sort_field, $sort_direction) {
            $query->orderBy($sort_field, $sort_direction);
        })
        ->paginate(10)
        ->through(function ($post) {
            $post->permissions = [
                'create' => Auth::user()->can('create', Post::class),
                'edit' => Auth::user()->can('update', $post),
                'delete' => Auth::user()->can('delete', $post),
                'publish' => Auth::user()->can('publish', $post),
                'unpublish' => Auth::user()->can('unpublish', $post),
            ];

            $post->content_limited = Str::of($post->content)->limit(300);
            $post->title_limited = Str::of($post->title)->limit(15);
            $post->username_limited = Str::of($post->username)->limit(15);

            return $post;
        })
        ->withQueryString();



            Log::info('posts:', ['posts' => $posts]);




        return [
            'posts' => $posts,
            'filters' => [
                'search' => $search,
                'field' => $sort_field,
                'direction' => $sort_direction,
            ]
        ];
    }

    public function storeFeaturedImage(Post $post, Request $request): string
    {
        if ($request->hasFile('featured_image') && $request->file('featured_image')->isValid()) {
            $this->removePreviousFeaturedImage($post);

            return Storage::disk('public')->putfile('posts/' . $post->id, $request->file('featured_image'));
        }

        return '';
    }

    public function updatePostFeaturedImage(Post $post, string $path): void
    {
        if ($path) {
            $post->update([
                'featured_image' => $path
            ]);
        }
    }

    public function removePreviousFeaturedImage(Post $post): void
    {
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
    }



    public function formatCalculationResults(?string $calculationResults = null): string
    {
        if (empty($calculationResults)) {
            return '';
        }

        $decodedCalculations = json_decode($calculationResults, true);
        if (!is_array($decodedCalculations)) {
            return '';
        }

        $formattedCalculations = [];

        foreach ($decodedCalculations as $key => $value) {
            $formattedKey = Str::headline($key);

            // Convert arrays to readable string
            $formattedValue = is_array($value) ? implode(", ", $value) : $value;

            $formattedCalculations[] = "{$formattedKey}: {$formattedValue}";
        }


        Log::info('formattedCalculations:', ['formattedCalculations' => $formattedCalculations]);


        return implode("\n\n", $formattedCalculations);
    }


    public function formatAiResponseResults(?string $aiResponseResults): string
    {

        $contentSections = [];

        // Format AI Response Results
        if (!empty($aiResponseResults)) {
            $decodedResults = json_decode($aiResponseResults, true);

            if (is_array($decodedResults)) {
                $formattedResults = [];
                foreach ($decodedResults as $key => $value) {
                    // Convert camelCase keys to readable headers
                    $formattedKey = Str::headline(str_replace('Explanation', '', $key));
                    $formattedResults[] = "{$formattedKey}: {$value}";
                }
                $contentSections[] = implode("\n\n", $formattedResults);
            }
        }

        Log::info('contentSections:', ['contentSections' => $contentSections]);


        return !empty($contentSections) ? implode("\n\n", $contentSections) : '';
    }

    public function formatChatbotMessages(?array $chatbotMessages): string
    {

         // Format Chatbot Messages
         if (!empty($chatbotMessages) && is_array($chatbotMessages)) {
            $formattedMessages = [];

            foreach ($chatbotMessages as $message) {
                if (!empty($message['text']) && isset($message['isUser'])) {
                    $prefix = $message['isUser'] ? "User:" : "AI:";
                    $formattedMessages[] = "{$prefix} {$message['text']}";
                }
            }

            if (!empty($formattedMessages)) {
                $contentSections[] = implode("\n\n", $formattedMessages);
            }
        }

        Log::info('contentSections CHAT:', ['contentSections' => $contentSections]);



        return !empty($contentSections) ? implode("\n\n", $contentSections) : '';
    }
}
