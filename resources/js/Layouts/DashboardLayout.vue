<script setup lang="ts">
import Sidebar from "@/Components/Sidebar.vue";
</script>

<template>
    <Sidebar></Sidebar>
    <div class="p-4 sm:ml-64">
        <slot/>
    </div>
    
</template>