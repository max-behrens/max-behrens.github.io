<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { ref } from 'vue';

const java_image = ref('/img/logos/java.png');
const laravel_image = ref('/img/logos/laravel-2.svg');
const jquery_image = ref('/img/logos/jquery-logo-svgrepo-com.svg');
const vue_image = ref('/img/logos/vue-svgrepo-com.svg');
const sql_image = ref('/img/logos/sql.png');  // Updated with the actual image
const react_image = ref('/img/logos/react.svg');  // Example React image
const symfony_image = ref('/img/logos/symfony.png');
const wordpress_image = ref('/img/logos/wordpress.png');
const docker_image = ref('/img/logos/docker.png');
const angular_image = ref('/img/logos/angular.png');
const shopify_image = ref('/img/logos/liquid.png');

</script>

<template>
  <Head title="Languages & Technologies" />
  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Languages & Technologies</h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center-transparent">
          <h2 class="text-3xl font-semibold leading-tight text-gray-800">Languages & Technologies</h2>
          <p class="mt-4 text-lg text-gray-600">I work with a variety of languages and technologies to build robust solutions.</p>
        </div>

        <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">

          <div class="bg-white shadow-lg rounded-lg p-6">
            <img :src="laravel_image" alt="Laravel" class="rounded-lg  h-40 m-auto mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">Laravel</h3>
            <p class="mt-4 text-gray-600">I have used Laravel in projects like iCede and my personal weather app project to build robust backends with a clean and elegant syntax.</p>
          </div>

          <div class="bg-white shadow-lg rounded-lg p-6">
            <img :src="vue_image" alt="Vue.js" class="rounded-lg  h-40 m-auto  mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">Vue.js</h3>
            <p class="mt-4 text-gray-600">I used Vue.js in my personal weather app project to create a dynamic and responsive front-end that interacts seamlessly with API data.</p>
          </div>

          <div class="bg-white shadow-lg rounded-lg p-6">
            <img :src="symfony_image" alt="Symfony" class="rounded-lg  h-40 m-auto  mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">Symfony</h3>
            <p class="mt-4 text-gray-600">I worked with Symfony in the Swiftcase project, integrating AI APIs to enhance functionality and provide intelligent solutions.</p>
          </div>

          <div class="bg-white shadow-lg rounded-lg p-6">
            <img :src="angular_image" alt="Angular" class="rounded-lg  h-40 m-auto  mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">Angular</h3>
            <p class="mt-4 text-gray-600">I have used Angular in personal projects to develop dynamic single-page applications with a focus on performance and scalability.</p>
          </div>

          <div class="bg-white shadow-lg rounded-lg p-6">
            <img :src="sql_image" alt="MySQL" class="rounded-lg  h-40 m-auto  mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">MySQL</h3>
            <p class="mt-4 text-gray-600">I have worked extensively with MySQL to manage and query relational databases for various projects, ensuring data integrity and optimization.</p>
          </div>

          <div class="bg-white shadow-lg rounded-lg p-6">
            <img :src="docker_image" alt="Docker" class="rounded-lg  h-40 m-auto  mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">Docker</h3>
            <p class="mt-4 text-gray-600">I used Docker to containerize Kafka and Nginx, enabling easy deployment and management of services in isolated environments.</p>
          </div>

          <div class="bg-white shadow-lg rounded-lg p-6">
            <img :src="wordpress_image" alt="WordPress" class="rounded-lg  h-40 m-auto  mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">WordPress</h3>
            <p class="mt-4 text-gray-600">I have worked with WordPress to build and customize websites with themes, plugins, and e-commerce functionalities tailored to client needs.</p>
          </div>

          <div class="bg-white shadow-lg rounded-lg p-6">
            <img :src="shopify_image" alt="Shopify Logic" class="rounded-lg  h-40 m-auto  mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">Shopify Logic</h3>
            <p class="mt-4 text-gray-600">I have developed custom headless integration logic with Laravel for Shopify stores, creating unique shopping experiences through customizations.</p>
          </div>

        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

<script>
export default {
  name: "Languages",
};
</script>
