<script setup lang="ts">
    import {ref} from "vue";
    import { Link } from '@inertiajs/vue3';

    const showSidebar = ref(false)

</script>

<template>
<div v-click-outside="()=>{showSidebar=false}">
    <button @click="showSidebar = !showSidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-primary-font rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-purple-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform sm:translate-x-0" :class="showSidebar ? '' : '-translate-x-full'">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
        <ul class="space-y-2 font-medium">
            <li class="flex justify-between content-baseline mb-5">
                <Link href="/" class="flex items-center ps-2.5">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Cloudias</span>
                </Link>
                <button @click="showSidebar = false" type="button" class="inline-flex items-center p-2 text-sm text-primary-font rounded-lg sm:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z"/></svg>
                </button>
            </li>
            <li>
                <Link href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-primary-font hover:text-white group">
                    <svg class="w-5 h-5 text-primary-font transition duration-75 group-hover:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </Link>
            </li>
            <li>
                <Link href="/dashboard/project" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-primary-font hover:text-white group">
                    <svg class="shrink-0 w-5 h-5 text-primary-font transition duration-75 group-hover:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Portofolio</span>
                </Link>
            </li>
            <li>
                <Link href="/auth/logout" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-primary-font hover:text-white group">
                    <svg class="shrink-0 w-5 h-5 text-primary-font transition duration-75 group-hover:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
                </Link>
            </li>
        </ul>
    </div>
    </aside>
</div>
</template>