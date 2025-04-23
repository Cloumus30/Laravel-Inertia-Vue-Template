<script setup lang="ts">
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import {ref} from 'vue'
import project1 from '@/../images/project1.png'
import { Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue'
import Modal from '@/Components/Modal.vue';

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
];

const isShowAddModal = ref(false);

</script>
<template>
    <DashboardLayout>
        <div class="w-full text-center text-primary-font font-bold text-4xl py-10">
            <h3>My Projects</h3>
        </div>
        <div class="pb-2">
            <button @click="isShowAddModal = !isShowAddModal" type="button" class="focus:outline-none text-white bg-primary-font hover:bg-primary-font-hover focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><rect width="36" height="36" x="6" y="6" rx="3"/><path stroke-linecap="round" d="M24 16v16m-8-8h16"/></g></svg>
                Add Porto
            </button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
            <div class="max-w-sm relative" v-for="product in products">
                    <div class="bg-white border border-gray-200 rounded-lg shadow-xl py-8">
                        <Link href="/project/detail/1" class="flex justify-center">
                            <img class="rounded-t-lg h-96" :src="project1" alt="Project Image" />
                        </Link>
                        <div class="p-5">
                            <Link href="/project/detail/1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#021F3E] text-center">Title Of Project {{ product.id }}</h5>
                            </Link>
                        </div>
                    </div>
                    <div class="h-16 relative">
                        <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-4">
                            <Link href="/project/detail/1" class="inline-flex items-center px-2 py-1.5 text-sm font-medium text-center text-white bg-primary-font rounded-lg hover:bg-primary-font-hover focus:ring-4 focus:outline-none focus:ring-blue-300 hover:cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M20.188 10.934c.388.472.582.707.582 1.066s-.194.594-.582 1.066C18.768 14.79 15.636 18 12 18s-6.768-3.21-8.188-4.934c-.388-.472-.582-.707-.582-1.066s.194-.594.582-1.066C5.232 9.21 8.364 6 12 6s6.768 3.21 8.188 4.934Z"/></g></svg>
                            </Link>
                            <Link href="" class="inline-flex items-center px-2 py-1.5 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 hover:cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21 12a1 1 0 0 0-1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h6a1 1 0 0 0 0-2H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-6a1 1 0 0 0-1-1m-15 .76V17a1 1 0 0 0 1 1h4.24a1 1 0 0 0 .71-.29l6.92-6.93L21.71 8a1 1 0 0 0 0-1.42l-4.24-4.29a1 1 0 0 0-1.42 0l-2.82 2.83l-6.94 6.93a1 1 0 0 0-.29.71m10.76-8.35l2.83 2.83l-1.42 1.42l-2.83-2.83ZM8 13.17l5.93-5.93l2.83 2.83L10.83 16H8Z"/></svg>
                            </Link>
                            <Link href="" class="inline-flex items-center px-2 py-1.5 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 hover:cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="24" stroke-dashoffset="24" d="M12 20h5c0.5 0 1 -0.5 1 -1v-14M12 20h-5c-0.5 0 -1 -0.5 -1 -1v-14"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="24;0"/></path><path stroke-dasharray="20" stroke-dashoffset="20" d="M4 5h16"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.2s" values="20;0"/></path><path stroke-dasharray="8" stroke-dashoffset="8" d="M10 4h4M10 9v7M14 9v7"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" values="8;0"/></path></g></svg>
                            </Link>
                        </div>
                        <!-- <link -->
                    </div>
            </div>
        </div>

        <div class="flex justify-center">
            <Pagination></Pagination>
        </div>
        
         <Modal :is-show-modal="isShowAddModal" @modal-close="isShowAddModal=false" :static="true" title="Add Portofolio">
            <form class="max-w-xl h-full mx-auto">
                <div class="relative z-0 w-full my-5">
                    <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-base text-gray-500 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-purple-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Title</label>
                </div>
                <div class="relative z-0 w-full my-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Upload file</label>
                    <input class="block w-full text-sm border border-purple-300 rounded-lg cursor-pointer bg-gray-200 text-gray-900 focus:outline-none file:bg-primary-font file:border-none file:hover:bg-primary-font-hover file:hover:cursor-pointer file:text-white" id="user_avatar" type="file">
                    <div class="mt-1 mb-5 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div>
                </div>
                <div class="relative z-0 w-full my-5 group">
                    <input type="text" name="tags" id="floating_tags" class="block py-2.5 px-0 w-full text-base text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                    <label for="floating_tags" class="peer-focus:font-medium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-purple-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Tags</label>
                </div>
                
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
         </Modal>
    </DashboardLayout>
</template>