<script setup lang="ts">
import type { ListNavbarInterface } from '@/Interface/NavbarInterface';
import {defineComponent, ref, Transition} from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import {Icon} from '@iconify/vue';
// import NavbarGroup from './NavbarGroup.vue';
// import NavbarItem from './NavbarItem.vue';

const isShowMobile = ref(false);

const props = defineProps({
    title:String,
    titleHref: String,
    logoHref: String,
    list: Array<ListNavbarInterface>,
    noLogo: {
        type: Boolean,
        required:false,
        default: false,
    },
})

</script>

<template>
    <nav class="bg-white border-gray-200 fixed top-0 right-0 left-0 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 border border-transparent border-b-[#120D40] border-b-2">
            <a :href="props.titleHref ? props.titleHref : '/'" class="flex items-center space-x-3 rtl:space-x-reverse">
                <slot v-if="!props.noLogo" name="logo">
                    <img :src="props.logoHref ? props.logoHref : 'https://flowbite.com/docs/images/logo.svg'" class="h-8" alt="Logo" />
                </slot>
                <slot name="title">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{props.title}}</span>
                </slot>
            </a>
            <button @click="()=>{isShowMobile = !isShowMobile}" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="w-full md:block md:w-auto md:px-8" :class="[isShowMobile ? '' : 'hidden']" id="navbar-default">
                <!-- Main slot -->                
                    <ul class="font-medium flex flex-col items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                        <li v-for="lst in props.list">
                            <a v-if="lst.childs == undefined || lst.childs.length < 0" :href="lst.link" class="block py-2 px-3 md:p-0" :class="[lst.active ? 'text-primary-font rounded-sm md:bg-transparent md:text-primary-font' : 'text-gray-900 font-semibold md:hover:text-primary-font']" aria-current="page">{{ lst.text }}</a>
                            <Dropdown v-if="lst.childs != undefined && lst.childs.length > 0">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li v-for="child in lst.childs">
                                        <a :href="child.link" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{child.text}}</a>
                                    </li>
                                </ul>
                            </Dropdown>
                        </li>
                        <li>
                            <!-- Sosmed -->
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
                             <!-- Sosmed -->
                        </li>
                    </ul>
                <!-- Main Slot -->
            </div>
        </div>
    </nav>

</template>