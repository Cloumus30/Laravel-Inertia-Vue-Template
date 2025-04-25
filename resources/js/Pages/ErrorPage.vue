<script setup lang="ts">
import LandingLayout from '@/Layouts/LandingLayout.vue';
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    status: Number,
});

const title = computed(() => {
  return {
    503: 'Service Unavailable',
    500: 'Server Error',
    404: 'Page Not Found',
    403: 'Forbidden',
  }[props.status || 500]
})

const description = computed(() => {
  return {
    503: 'Sorry, we are doing some maintenance. Please check back soon.',
    500: 'Whoops, something went wrong on our servers.',
    404: 'Sorry, the page you are looking for could not be found.',
    403: 'Sorry, you are forbidden from accessing this page.',
  }[props.status || 500]
})

const back = ()=>{
    window.history.back();
}

</script>

<template>
    <LandingLayout>
        <div class="text-center mt-16">
            <h1 class="text-8xl font-bold text-primary-font">{{ status }}</h1>
            <h2 class="text-3xl font-bold text-secondary-font">{{ title }}</h2>
            <h3 class="text-lg font-semibold text-secondary-font">{{ description }}</h3>
            <div class="flex gap-4 justify-center">
                <Link href="#" @click="back" class="inline-flex items-center px-10 py-3 mt-5 text-sm font-medium text-center text-white bg-primary-font rounded-lg hover:bg-primary-font-hover focus:ring-4 focus:outline-none focus:ring-blue-300 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="m7.825 13l5.6 5.6L12 20l-8-8l8-8l1.425 1.4l-5.6 5.6H20v2z"/></svg>
                    <span class="text-lg ms-2">
                        Back
                    </span>
                </Link>

                <Link href="/" class="inline-flex items-center px-10 py-3 mt-5 text-sm font-medium text-center text-white bg-secondary-font rounded-lg hover:bg-primary-font focus:ring-4 focus:outline-none focus:ring-blue-300 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" fill-opacity="0" d="M5 8.5l7 -5.5l7 5.5v12.5h-4v-8l-1 -1h-4l-1 1v8h-4v-12.5Z"><animate fill="freeze" attributeName="fill-opacity" begin="1.1s" dur="0.15s" values="0;0.3"/></path><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="16" stroke-dashoffset="16" d="M4.5 21.5h15"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="16;0"/></path><path stroke-dasharray="16" stroke-dashoffset="16" d="M4.5 21.5v-13.5M19.5 21.5v-13.5"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s" dur="0.2s" values="16;0"/></path><path stroke-dasharray="28" stroke-dashoffset="28" d="M2 10l10 -8l10 8"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.4s" values="28;0"/></path><path stroke-dasharray="24" stroke-dashoffset="24" d="M9.5 21.5v-9h5v9"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.4s" values="24;0"/></path></g></svg>
                    <span class="text-lg ms-2">
                        Home
                    </span>
                </Link>
            </div>
        </div>
        
    </LandingLayout>
</template>