<script setup lang="ts">
import { onBeforeMount, onMounted, ref, useTemplateRef } from 'vue';


const dropDownShow = ref(false);
const containerDropdown = useTemplateRef('containerDropdown');

onMounted(() =>{
    listenEventClickOutsite();
})

onBeforeMount(() =>{
    destroyEventClickOutsite();
})

const closeDropDownOutsite = (e:MouseEvent) =>{
    if(dropDownShow.value && e.target instanceof Node && !containerDropdown.value?.contains(e.target)){
        dropDownShow.value = false;
    }
}

const listenEventClickOutsite = () =>{
    window.addEventListener('click', closeDropDownOutsite)
}

const destroyEventClickOutsite = () =>{
    window.removeEventListener('click', closeDropDownOutsite);
}

</script>
<template>
    <div ref="containerDropdown" class="relative w-auto">
        <div @click="()=>{dropDownShow = !dropDownShow}">
            <slot name="btnTrigger">
                <button class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                    Dropdown 
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </slot>
        </div>
        
        <!-- Dropdown menu -->
        <div class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-36" :class="[dropDownShow ? 'absolute -left-5' : 'hidden']">
            <slot>
            </slot>
        </div>
    </div>
   
</template>