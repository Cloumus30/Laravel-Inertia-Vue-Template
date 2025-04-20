<script setup lang="ts">
import 'vue3-carousel/carousel.css';
import dana from '../../../images/dana3.png';
import dana2 from '../../../images/dana2.jpg';
import project1 from '../../../images/project1.png';
import rectangle1 from '../../../images/rectangle1.png';
import { Carousel } from 'primevue';
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import LandingLayout from '@/Layouts/LandingLayout.vue';

const products = ref();
products.value = [
    {
        id:1
    },
    {
        id:2
    },
    {
        id:3
    },
    {
        id:4
    }
]
// products.value=[]
const responsiveOptions = ref([
    {
        breakpoint: '1500px',
        numVisible: 3,
        numScroll: 1
    },
    {
        breakpoint: '1200px',
        numVisible: 2,
        numScroll: 1
    },
    {
        breakpoint: '790px',
        numVisible: 1,
        numScroll: 1
    }
]);
</script>

<template>
    <LandingLayout>
        
    <!-- Introduction -->
    <div class="grid grid-cols-1 md:grid-cols-2 justify-center md:pt-20 pb-96">
            <!-- Description -->
            <div class="w-full flex justify-center">
                <div class="ml-24 me-10 mt-32">
                    <p class="text-primary-font text-2xl mb-6 font-semibold">Hello Everyone, I Am</p>
                    <h1 class="text-6xl text-[#120D40] font-bold">Cloudias Imani Pradana</h1>

                    <div class="bg-primary-font p-5 rounded-md mt-16">
                        <p class="text-white text-center text-2xl">Fullstack Developer Enthusiast</p>
                    </div>
                    <div class="mt-6">
                        <button class="focus:outline-none text-white bg-[#120D40] hover:bg-[#221970] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 me-2 mb-2">
                            Contact Me
                        </button>
                    </div>
                </div>
            </div>
            <!-- Description -->

            <!-- Image -->
             <div class="w-full">
                <div class="relative w-full h-full mt-16 md:mt-0">
                    <div class="absolute top-32 left-10 -z-20">
                        <div class="bg-primary-font w-[20em] h-[20em] sm:w-[28em] sm:h-[28em] md:w-[33em] md:h-[33em] rounded-md"></div>
                    </div>
                    <div class="absolute top-56 right-28 -z-30">
                        <div class="bg-secondary-font rounded-md w-0 h-0 sm:w-[28em] sm:h-[28em] md:w-[33em] md:h-[33em]"></div>
                    </div>
                    <div class="absolute top-0 -z-10">
                        <img :src="dana" alt="Picture Of Dana" class="h-[30em] md:h-full">
                    </div>
                </div>
             </div>
            <!-- Image -->
        </div>
    <!-- Introduction -->

    <!-- Introduction Detail -->
        <div class="grid grid-cols-1 md:grid-cols-2 pt-24 md:mt-0 bg-secondary-font rounded-sm md:h-screen">
            <!-- Image -->
            <div id="about" class="flex justify-center w-full h-full items-center">
                <img :src="dana2" alt="Picture Of Dana" class="rounded-full w-80 h-80 md:hidden">
                <img :src="dana2" alt="Picture Of Dana" class="rounded-md hidden md:block w-[30rem] h-fit">
            </div>
            <!-- Image -->

            <!-- Description -->
             <div class="flex justify-center items-center mx-4">
                <div>
                    <h1 class="text-gray-300 text-4xl font-semibold text-center mt-8 md:mt-0">Know Me Better</h1>
                    <h3 class="text-3xl text-white font-semibold my-4">
                        Passionate Fullstack Developer | Innovating the IT Industry ✨
                    </h3>
                    <p class="text-xl text-gray-200 ">
                        Passionate and results-driven Full-Stack Developer with over 3 years of experience in designing and implementing robust applications using the Laravel PHP framework, Vue.js, Nuxt.js, and SQL database management (MySQL & PostgreSQL). Adept at building scalable, efficient, and secure solutions for both front-end and back-end development. I am actively seeking freelance and remote opportunities to leverage my expertise in full-stack development and contribute to innovative projects in the tech industry.
                    </p>
                </div>
             </div>
            <!-- Description -->
        </div>
    <!-- Introduction Detail -->

    <!-- My Services -->
     <div class="grid grid-cols-1 bg-[#F2ECFF] pb-20 relative before:absolute before:h-[50%] before:w-[100%] before:bottom-0 before:bg-secondary-font">
        <div class="w-full text-center text-primary-font font-bold text-4xl py-16 relative">
            <h3>My Projects</h3>
        </div>

        <Carousel :value="products" :numVisible="3" :numScroll="1" :responsiveOptions="responsiveOptions" :circular="true">
            <template #item="slotProps">
                 <div class="max-w-sm relative">
                    <div class="bg-white border border-gray-200 rounded-lg shadow-xl py-8">
                        <Link href="/project/detail/1" class="flex justify-center">
                            <img class="rounded-t-lg h-96" :src="project1" alt="Project Image" />
                        </Link>
                        <div class="p-5">
                            <Link href="/project/detail/1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#021F3E] text-center">Title Of Project {{ slotProps.data.id }}</h5>
                            </Link>
                        </div>
                    </div>
                    <div class="h-16 relative">
                        <Link href="/project/detail/1" class="inline-flex items-center px-16 py-5 text-sm font-medium text-center text-white bg-primary-font rounded-lg hover:bg-primary-font-hover focus:ring-4 focus:outline-none focus:ring-blue-300 absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        Details
                        </Link>
                        <!-- <link -->
                    </div>
                </div>
            </template>
            <template #previcon>
                <button class="bg-primary-font px-4 py-2 focus:ring-purple-600 hover:bg-white hover:text-secondary-font text-white rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentcolor" d="M16 22L6 12L16 2l1.775 1.775L9.55 12l8.225 8.225z"/></svg>
                </button>
            </template>
            <template #nexticon>
                <button class="bg-primary-font px-4 py-2 focus:ring-purple-600 hover:bg-white hover:text-secondary-font text-white rounded-md rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentcolor" d="M16 22L6 12L16 2l1.775 1.775L9.55 12l8.225 8.225z"/></svg>
                </button>
            </template>
            <template #empty>
                <div class="h-50 relative mt-10">
                    <div class="text-center font-bold text-3xl text-white">
                        <h3>No Project :(</h3>
                        <br>
                        <h2>Please Give me One :)</h2>
                    </div>
                </div>
            </template>
        </Carousel>
    </div>
    <!-- My Services -->

    <!-- Personal Expertise -->
     <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-14 px-10 box-border">
        <div>
            <div class="w-full text-center text-primary-font font-bold text-4xl py-16 relative">
                <h3>Personal Expertise</h3>
            </div>
            <div class="grid grid-cols-2 gap-5 justify-center">
                <div>
                    <ul class="max-w-md space-y-8 text-gray-900 font-bold list-none list-inside ">
                        <li>
                            LARAVEL
                            <div class="bg-primary-font w-full h-8 rounded-md">
                            </div>
                        </li>
                        <li>
                            PHP
                            <div class="bg-primary-font w-full h-8 rounded-md">
                            </div>
                        </li>
                        <li>
                            JAVASCRIPT
                            <div class="bg-primary-font w-full h-8 rounded-md">
                            </div>
                        </li>
                        <li>
                            VUE JS
                            <div class="bg-primary-font w-full h-8 rounded-md">
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="max-w-md space-y-8 text-gray-900 font-bold list-none list-inside ">
                        <li>
                            NODE JS
                            <div class="bg-primary-font w-full h-8 rounded-md">
                            </div>
                        </li>
                        <li>
                            REDIS
                            <div class="bg-primary-font w-full h-8 rounded-md">
                            </div>
                        </li>
                        <li>
                            MYSQL
                            <div class="bg-primary-font w-full h-8 rounded-md">
                            </div>
                        </li>
                        <li>
                            POSTGRESQL
                            <div class="bg-primary-font w-full h-8 rounded-md">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center font-bold text-primary-font my-9 text-xl">
                <h1>And More ...</h1>
            </div>
        </div>
        <div class="hidden md:block">
            <img :src="rectangle1" alt="Computer Image">
        </div>
     </div>
     <!-- Personal Expertise -->
    </LandingLayout>
    
</template>