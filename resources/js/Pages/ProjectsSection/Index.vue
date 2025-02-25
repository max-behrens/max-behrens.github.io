<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

// Declare the image variables using ref with the exact paths from the old index.html
const projectOneImage = ref('/img/crud.png');
const projectTwoImage = ref('/img/weather-2.png');
const projectThreeImage = ref('/img/coseysite.PNG');
const projectFourImage = ref('/img/converter3.png');
const projectFiveImage = ref('/img/academy.png');
const projectSixImage = ref('/img/Stability.png');
</script>

<template>
  <Head title="Projects" />
  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Projects</h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center-transparent">
          <h2 class="text-3xl font-semibold leading-tight text-gray-800">My Projects</h2>
          <p class="mt-4 text-lg text-gray-600">Here are some of the projects I have worked on.</p>
        </div>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Project 1: User Login CRUD Project -->
          <div class="card bg-white shadow-lg rounded-lg p-6">
            <div class="relative">
              <img :src="projectOneImage" alt="User Login CRUD Project" class="w-full h-48 object-cover rounded-t-lg">
            </div>
            <div class="card-body">
              <h3 class="text-xl font-semibold text-gray-800">User Login CRUD Project</h3>
              <p class="text-gray-600 mt-2">PHP Laravel and Vue.JS, with MySQL</p>
            </div>
          </div>

          <!-- Project 2: API Weather Calculator -->
          <div class="card bg-white shadow-lg rounded-lg p-6">
            <div class="relative">
              <img :src="projectTwoImage" alt="API Weather Calculator" class="w-full h-48 object-cover rounded-t-lg">
            </div>
            <div class="card-body">
              <h3 class="text-xl font-semibold text-gray-800">API Weather Calculator</h3>
              <p class="text-gray-600 mt-2">Developed in Vue.JS</p>
            </div>
          </div>

          <!-- Project 3: Website for Housing Surveyors -->
          <div class="card bg-white shadow-lg rounded-lg p-6">
            <div class="relative">
              <img :src="projectThreeImage" alt="Website for Housing Surveyors" class="w-full h-48 object-cover rounded-t-lg">
            </div>
            <div class="card-body">
              <h3 class="text-xl font-semibold text-gray-800">Website for Housing Surveyors</h3>
              <p class="text-gray-600 mt-2">Developed in PHP & JS, along with markup languages at Verve Digital</p>
            </div>
          </div>

          <!-- Project 4: Unit Converter Mobile App -->
          <div class="card bg-white shadow-lg rounded-lg p-6">
            <div class="relative">
              <img :src="projectFourImage" alt="Unit Converter Mobile App" class="w-full h-48 object-cover rounded-t-lg">
            </div>
            <div class="card-body">
              <h3 class="text-xl font-semibold text-gray-800">Unit Convertor Mobile App</h3>
              <p class="text-gray-600 mt-2">Application built in Android Studio using React Javascript Library</p>
            </div>
          </div>

          <!-- Project 5: Tutoring Agency Transactional Website -->
          <div class="card bg-white shadow-lg rounded-lg p-6">
            <div class="relative">
              <img :src="projectFiveImage" alt="Tutoring Agency Transactional Website" class="w-full h-48 object-cover rounded-t-lg">
            </div>
            <div class="card-body">
              <h3 class="text-xl font-semibold text-gray-800">Tutoring Agency Transactional Website</h3>
              <p class="text-gray-600 mt-2">Developed for Liverpool Language Academy with HTML, CSS & JS</p>
            </div>
          </div>

          <!-- Project 6: Bifurcation Analysis in MATLAB -->
          <div class="card bg-white shadow-lg rounded-lg p-6">
            <div class="relative">
              <img :src="projectSixImage" alt="Bifurcation Analysis in MATLAB" class="w-full h-48 object-cover rounded-t-lg">
            </div>
            <div class="card-body">
              <h3 class="text-xl font-semibold text-gray-800">Bifurcation Analysis in MATLAB</h3>
              <p class="text-gray-600 mt-2">Dissertation researching microbial growth at the University of Liverpool</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
