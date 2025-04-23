<script setup lang="ts">

const props = defineProps({
    title:{
        required:false,
        type: String,
        default: "Title of Modal"
    },
    isShowModal:{
        required: true,
        type: Boolean
    },
    static:{
        required: false,
        type: Boolean,
        default: false,
    }
})

const emit = defineEmits(["modal-close"]);

const closeModalOutside= ()=>{
    if(props.static){
        emit('modal-close');
    }
}

</script>

<template>
    <!-- Main modal -->
    <div @click.self="closeModalOutside()" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 transition-all max-h-full flex bg-black/50" :class="isShowModal ? 'h-full' : 'h-0'" >
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <slot name="header">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            {{ props.title }} 
                        </h3>
                    </slot>
                    <button type="button" @click="emit('modal-close')" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <slot>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Your Modal Body
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ea voluptatum accusantium saepe laudantium alias recusandae dignissimos repellat. Dolores ratione itaque laborum earum molestias ea eius quasi laboriosam vitae cum?
                        </p>
                    </slot>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <slot name="footer">
                       
                    </slot>
                </div>
            </div>
        </div>
    </div>
</template>