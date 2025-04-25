<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import LandingLayout from "@/Layouts/LandingLayout.vue";
import dummies from "@/../../resources/dummy-files/dummies.pdf";
import { ref } from "vue";

const src = ref();

const props = defineProps({
    titleParam: String
})

if(props.titleParam == 'ksong'){
    src.value = dummies;
}else{
    src.value = "http://goog"
}


</script>

<template>
    <Head>
        <title>Detail Portofolio</title>
        <meta name="description" content="Cloudias' Website for better know me and know my portofolio projects">
        <meta name="author" content="Cloudias Imani Pradana">
    </Head>
    <LandingLayout>
    <div class="grid grid-cols-1 h-dvh md:h-full bg-[#F2ECFF] pb-1 relative before:absolute before:h-[50%] before:w-[100%] before:bottom-0 before:bg-secondary-font">
        <div class="w-full text-center text-primary-font font-bold text-2xl pt-5 pb-2 relative">
            <h3>My Projects</h3>
        </div>
        <div class="relative mx-4 md:mx-8 rounded-md overflow-auto">
            <div class="bg-white border border-gray-200 rounded-lg shadow-xl py-8 px-4">
              <!-- <iframe class="w-full h-[70dvh] md:h-[26rem]" :src="src" type="Konten"> -->
                <iframe class="w-full h-[70dvh] md:h-[26rem]" :src="src" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    </LandingLayout>
</template>