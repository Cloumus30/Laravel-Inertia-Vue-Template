<script setup lang="ts">
import LandingLayout from '@/Layouts/LandingLayout.vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import project1 from "../../../images/project1.png"

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

</script>
<template>
    <LandingLayout>
        <div class="w-full text-center text-primary-font font-bold text-4xl py-10">
            <h3>My Projects</h3>
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
                        <Link href="/project/detail/1" class="inline-flex items-center px-16 py-5 text-sm font-medium text-center text-white bg-primary-font rounded-lg hover:bg-primary-font-hover focus:ring-4 focus:outline-none focus:ring-blue-300 absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                        Details
                        </Link>
                        <!-- <link -->
                    </div>
            </div>
        </div>
    </LandingLayout>
</template>