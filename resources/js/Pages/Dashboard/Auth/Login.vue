<script lang="ts" setup>
import { computed, getCurrentInstance, onMounted, reactive, ref } from 'vue';
import { router } from '@inertiajs/vue3';
import Swal from 'sweetalert2'

defineProps({
    errors: Object
})

const passwordIsVisible = ref(false);
const form = reactive({
    email:null,
    password:null,
});

const submitForm = ()=>{
    router.post('/auth/login', form, {
        // onError: (errors) =>{
        //     const msg = Object.keys(errors).map(key => `<p>${errors[key]}</p>`);
        //     Swal.fire({
        //         title: msg
        //     })
        // }
    })
}

</script>

<template>
    <div class="grid grid-cols-1 bg-[#F2ECFF] pb-20 relative before:absolute before:h-[50%] before:w-[100%] before:bottom-0 before:bg-secondary-font h-dvh">
        <div class="relative inset-y-28 md:inset-y-26 sm:inset-x-1/4 md:inset-x-1/3 mx-4 md:mx-8 rounded-md max-w-sm max-h-52">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-xl py-8 px-4 w-full">
                <div class="w-full text-center text-primary-font font-bold text-4xl py-5 relative">
                    <h3>Login</h3>
                </div>

                <div>
                    <form @submit.prevent="submitForm">
                        <div class="mb-5">
                            <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                    </svg>
                                </span>
                                <input type="email" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="email" v-model="form.email">
                            </div>
                            <p v-if="errors?.email" class="text-red-600 text-sm">{{ errors?.email }}</p>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                    </svg>
                                </span>
                                <input :type="passwordIsVisible ?'text': 'password'" id="password" class="rounded-none rounded-e-0 bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="Password" v-model="form.password">
                                <button @click="passwordIsVisible = !passwordIsVisible" type="button" class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-s-0 border-gray-300 border-s-0 rounded-e-md">
                                    <svg v-if="!passwordIsVisible" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 18l-.722-3.25M2 8a10.645 10.645 0 0 0 20 0m-2 7l-1.726-2.05M4 15l1.726-2.05M9 18l.722-3.25"/></svg>
    
                                    <svg v-if="passwordIsVisible" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M2.062 12.348a1 1 0 0 1 0-.696a10.75 10.75 0 0 1 19.876 0a1 1 0 0 1 0 .696a10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></g></svg>
                                </button>
                            </div>
                            <p v-if="errors?.password" class="text-red-600 text-sm">{{ errors?.password }}</p>
                        </div>
                        <div class="flex justify-center mt-5">
                            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>