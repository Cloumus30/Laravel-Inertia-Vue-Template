<script setup lang="ts">
import Navbar from '@/Components/Navbar.vue';
import type { ListNavbarInterface } from '@/Interface/NavbarInterface';

const listNavbar:ListNavbarInterface[] = [
    {
        link: '/',
        text: 'Home'
    },
    {
        link: '/#about',
        text: 'About Me'
    },
    {
        link: '/project/list',
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

    <div class="h-1 py-10"></div>
    <slot/>

    <!-- Footer -->
    <!-- <footer class="bg-white rounded-lg shadow-sm m-4">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center">© 2025 <a href="https://flowbite.com/" class="hover:underline">Cloudias</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">About Me</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Portfolio</a>
            </li>
            <li>
                <ul class="flex gap-3">
                    <li >
                        <a href="" target="_blank">
                            <Icon icon="logos:whatsapp-icon" width="1.5em" height="1.5em"></Icon>
                        </a>
                    </li>
                    <li >
                        <a href="" target="_blank">
                            <Icon icon="logos:github-icon" width="1.5em" height="1.5em" />
                        </a>
                    </li>
                    <li >
                        <a href="" target="_blank">
                            <Icon icon="logos:google-gmail" width="1.5em" height="1.5em" />
                        </a>
                    </li>
                    <li >
                        <a href="" target="_blank">
                            <Icon icon="logos:linkedin-icon" width="1.5em" height="1.5em" />
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        </div>
    </footer> -->
    <!-- Footer -->
</template>