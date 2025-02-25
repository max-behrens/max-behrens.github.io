<script setup>
import { ref } from 'vue';
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";

// Ref for tracking selected tab (Employment or Education)
const selectedTab = ref('employment');
</script>

<template>
  <Head title="About Me" />
  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">About Me</h2>
    </template>

    <!-- About Section -->
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">

          <!-- About Description -->
          <div class="about-description bg-white p-6 rounded-lg shadow-md">
            <p>
              I am a software and website developer with experience using PHP, Vue, Angular, MySQL, Wordpress and more;
              as well as being a qualified mathematics teacher in higher and further education.
            </p>
            <p>
              My expertise extends to deploying PHP applications in cloud environments, managing CI/CD pipelines for
              streamlined deployments, and balancing scalability with cost-efficient solutions such as AWS Lambda and
              DigitalOcean droplets. 
            </p>
          </div>

          <!-- CV Download & Contact -->
          <div class="about-cv bg-white p-6 rounded-lg shadow-md space-y-4">
            <a href="cv/Max Behrens - CV.pdf" download>
              <button class="btn btn-primary w-full">
                <i class="fa fa-download"></i> Download CV
              </button>
            </a>
            <p>Please get in touch, at maxdbehrens@gmail.com, or on 07513 944101.</p>
          </div>
        </div>

        <!-- Tabs for Employment and Education -->
        <div class="mt-8">
          <div class="tabs">
            <button
              :class="{'bg-blue-500 text-white': selectedTab === 'employment', 'bg-gray-200 text-gray-800': selectedTab !== 'employment'}"
              class="tab tab-bordered w-1/2 py-2-padding"
              @click="selectedTab = 'employment'"
            >
              Employment
            </button>
            <button
              :class="{'bg-blue-500 text-white': selectedTab === 'education', 'bg-gray-200 text-gray-800': selectedTab !== 'education'}"
              class="tab tab-bordered w-1/2 py-2-padding"
              @click="selectedTab = 'education'"
            >
              Education
            </button>
          </div>

          <div v-if="selectedTab === 'employment'" class="mt-4">
            <!-- Employment Section List -->
            <div class="space-y-4 bg-white p-6 rounded-lg shadow-md">
              <div>
                <h3 class="text-lg font-semibold">Jan 2023 - Present</h3>
                <p class="text-sm text-gray-600 font-semibold">Software Developer</p>
                <p class="font-medium">iCede Solutions Ltd</p>
                <p class="text-muted">At iCede I have worked on both the central website codebase in PHP Laravel, Yii and JavaScript, as well as the external API sites made for insurance company clients such as Aviva.</p>
              </div>

              <div>
                <h3 class="text-lg font-semibold">July 2022 - Jan 2023</h3>
                <p class="text-sm text-gray-600 font-semibold">Website Developer</p>
                <p class="font-medium">Ignis Technologies</p>
                <p class="text-muted">With Ignis, I worked on creating front-end website frameworks using Laravel and Bootstrap CSS.</p>
              </div>

              <div>
                <h3 class="text-lg font-semibold">July 2021 - July 2022</h3>
                <p class="text-sm text-gray-600 font-semibold">Software Developer</p>
                <p class="font-medium">Verve Digital</p>
                <p class="text-muted">I developed websites and apps for clients' employees to manage their appointments and company data.</p>
              </div>

              <div>
                <h3 class="text-lg font-semibold">Sept 2020 - June 2021</h3>
                <p class="text-sm text-gray-600 font-semibold">Maths & Computer Science Teacher</p>
                <p class="font-medium">Liverpool Maths School, City of Liverpool College, UTCW</p>
                <p class="text-muted">I taught Maths, Physics & Computer Science GCSE and A-Level across Merseyside.</p>
              </div>

              <div>
                <h3 class="text-lg font-semibold">May 2020 - Sept 2020</h3>
                <p class="text-sm text-gray-600 font-semibold">Website Developer & IT Consultant</p>
                <p class="font-medium">Liverpool Language Academy</p>
                <p class="text-muted">I developed a transactional front-facing website for the company to connect better with clients and parents.</p>
              </div>

              <div>
                <h3 class="text-lg font-semibold">Nov 2017 - Sept 2020</h3>
                <p class="text-sm text-gray-600 font-semibold">Private Maths GCSE & A-Level Tutor</p>
                <p class="font-medium">Liverpool Language Academy</p>
                <p class="text-muted">I worked as a private tutor, helping students with their studies and revision.</p>
              </div>
            </div>
          </div>

          <div v-if="selectedTab === 'education'" class="mt-4">
            <!-- Education Section List -->
            <div class="space-y-4 bg-white p-6 rounded-lg shadow-md">
              <div>
                <h3 class="text-lg font-semibold">Sept 2020 - June 2021</h3>
                <p class="text-sm text-gray-600 font-semibold">Post Graduate Diploma of Further Education in Mathematics</p>
                <p class="font-medium">Liverpool Hope University</p>
                <p class="text-muted">Studied safeguarding and differentiation techniques to improve my teaching method.</p>
              </div>

              <div>
                <h3 class="text-lg font-semibold">Sept 2017 - June 2020</h3>
                <p class="text-sm text-gray-600 font-semibold">BSc in Computer Science & Mathematics, Second Class Honours</p>
                <p class="font-medium">University of Liverpool</p>
                <p class="text-muted">Studied quantum and classical mechanics, and advanced artificial intelligence.</p>
              </div>

              <div>
                <h3 class="text-lg font-semibold">Sept 2015 - June 2017</h3>
                <p class="text-sm text-gray-600 font-semibold">3 A-Levels at Prince Henry's Grammar School</p>
                <p class="text-muted">B in Maths, C in Physics & a B in Chemistry at A-Level, & an A in Economics at AS-Level.</p>
              </div>

              <div>
                <h3 class="text-lg font-semibold">Sept 2010 - June 2015</h3>
                <p class="text-sm text-gray-600 font-semibold">12 A* - C GCSEs at Prince Henry's Grammar School</p>
                <p class="text-muted">3 A*s in Maths, Art, and French, as well as 8 As and a B in Further Mathematics.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
