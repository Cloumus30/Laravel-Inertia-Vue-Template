<script setup lang="ts">
import type { ListNavbarInterface } from '@/Interface/NavbarInterface';
import Navbar from '../../Components/Navbar.vue';
import dana from '../../../images/dana3.png';
import dana2 from '../../../images/dana2.jpg';

const name = "Cloudias Imani"

const listNavbar:ListNavbarInterface[] = [
    {
        link: '/',
        text: 'Home'
    },
    {
        link: '/about',
        text: 'About Me'
    },
    {
        link: '/portfolio',
        text: 'Portfolio'
    },
    // {
    //     link: '#',
    //     text: 'Dropdown',
    //     childs:[
    //         {
    //             link: '/dashboard',
    //             text: 'Dashboard',
    //         },
    //         {
    //             link: '/signout',
    //             text: 'Signout'
    //         }
    //     ]
    // }
];
</script>

<template>
    <Navbar :list="listNavbar" title="Cloudy" :title-href="'/'" :noLogo="true">
    </Navbar>
    
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
            <div class="flex justify-center w-full h-full items-center">
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
     <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
        
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
        <a href="#">
            <img class="rounded-t-lg" src="" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>

     </div>
    <!-- My Services -->
</template>