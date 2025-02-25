<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Dashboard\WeatherController;
use App\Http\Controllers\Dashboard\DashboardAIController;
use App\Http\Controllers\Front\PostController as FrontPostController;
use App\Http\Controllers\Dashboard\PostController as DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route where login page is required.
// Route::get('/', IndexController::class)->name('index');


// Routes where login is not required.
Route::get('/', function () {
    return Inertia::render('Dashboard/Index');
})->name('dashboard');

// Website / portfolio routes:
Route::get('/home', function () {
    return Inertia::render('HomeSection/Index');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('AboutSection/Index');
})->name('about');

Route::get('/projects', function () {
    return Inertia::render('ProjectsSection/Index');
})->name('projects');

Route::get('/languages', function () {
    return Inertia::render('LanguagesSection/Index');
})->name('languages');


// Auth routes:
Route::prefix('dashboard')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', function () {
            return Inertia::render('Dashboard/Index');
        })->name('dashboard');

        Route::resource('posts', DashboardPostController::class)->except(['update']);
        Route::prefix('posts')->group(function () {
            Route::put('/publish/{post}', [DashboardPostController::class, 'publish'])->name('posts.publish');
            Route::post('/update/{post}', [DashboardPostController::class, 'update'])->name('posts.update');
        });

         // Add these new weather routes
         Route::get('/weather', function () {
            return Inertia::render('Dashboard/Weather/Index');
        })->name('weather.index');
        
        Route::post('/weather/get-data', [WeatherController::class, 'getWeather'])->name('weather.getData');

        // Route::get('/dashboard/posts/create', [DashboardPostController::class, 'store'])->name('posts.create');


        Route::post('/ask-openai', [DashboardAIController::class, 'askOpenAI']);

        Route::get('/dashboard', function () {
            return Inertia::render('Dashboard');
        });


    });

require __DIR__ . '/auth.php';

Route::get('/{post:slug}', [FrontPostController::class, 'show'])->name('front.posts.show');
