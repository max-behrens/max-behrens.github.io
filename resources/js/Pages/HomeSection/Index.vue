<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { onMounted, ref } from 'vue';

// Create a ref to store the subtitle text
const subtitle = ref('');

// Typing effect logic
const txt = 'Software Developer and Mathematics Teacher';
const speed = 50;
let i = 0;

function typeWriter() {
  if (i < txt.length) {
    subtitle.value += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

// Start typing when component is mounted
onMounted(() => {
  typeWriter();
});

// Define images as refs
const aboutImage = ref('/img/logos/uol.png');
const languagesImage = ref('/img/logos/laravel-2.svg');
const projectsImage = ref('/img/logos/crud2.png');
const weatherImage = ref('/img/logos/weather.png');
</script>

<template>
  <Head title="Home" />
  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Home</h2>
    </template>
    
    <!-- Hero Section -->
    <div class="py-16 pt-10 pb-10" id="Home">
      <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="title-container">
          <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900">Hi, I'm Max Behrens</h1>
        </div>

        <div class="subtitle-container mt-4">
          <!-- Display the typed subtitle here -->
          <p class="text-xl font-medium text-gray-600" v-text="subtitle"></p>
        </div>

        <!-- Button to Old Website -->
        <div class="mt-6">
          <!-- <a :href="route('old.website')" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
            Visit Old Website
          </a> -->
        </div>
      </div>
    </div>

    <!-- Main Content Section (Navigation Cards) -->
    <div class="py-12 h-full">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center-transparent">
          <h1 class="text-4xl font-semibold leading-tight text-gray-800">Explore My Work</h1>
          <p class="mt-4 text-lg text-gray-600">Discover more about me and my projects.</p>
        </div>

        <div class="mt-12">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- About Page -->
            <div class="bg-white shadow-lg rounded-lg p-6">
              <img :src="aboutImage" alt="About Me" class="rounded-lg w-full h-64  mb-6 px-10">
              <h3 class="text-xl font-semibold text-gray-800">About Me</h3>
              <p class="mt-4 text-gray-600">Learn more about my background and experience.</p>
              <a :href="route('about')" class="block mt-4 text-blue-600 font-medium hover:underline">Read More →</a>
            </div>

            <!-- Languages Page -->
            <div class="bg-white shadow-lg rounded-lg p-6">
              <img :src="languagesImage" alt="Languages" class="rounded-lg w-full h-64  mb-6 px-10">
              <h3 class="text-xl font-semibold text-gray-800">Languages</h3>
              <p class="mt-4 text-gray-600">Discover the programming languages I work with.</p>
              <a :href="route('languages')" class="block mt-4 text-blue-600 font-medium hover:underline">Read More →</a>
            </div>

            <!-- Projects Page -->
            <div class="bg-white shadow-lg rounded-lg p-6">
              <img :src="projectsImage" alt="Projects" class="rounded-lg w-full h-64  mb-6 px-10">
              <h3 class="text-xl font-semibold text-gray-800">Projects</h3>
              <p class="mt-4 text-gray-600">Explore the projects I've built and contributed to.</p>
              <a :href="route('projects')" class="block mt-4 text-blue-600 font-medium hover:underline">Read More →</a>
            </div>

            <!-- Weather API Page -->
            <div class="bg-white shadow-lg rounded-lg p-6">
              <img :src="weatherImage" alt="Weather API" class="rounded-lg w-full h-64  mb-6 px-10">
              <h3 class="text-xl font-semibold text-gray-800">Weather API</h3>
              <p class="mt-4 text-gray-600">Check out my OpenAI weather trends predictor.</p>
              <a :href="route('weather.index')" class="block mt-4 text-blue-600 font-medium hover:underline">Read More →</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
