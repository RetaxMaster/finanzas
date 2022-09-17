<template>
    
    <div class="datepicker-container">
        <label>{{ label }}</label>
        <Datepicker v-model="date" />
    </div>

</template>

<script setup>

    import { ref } from 'vue';
    import Datepicker from 'vuejs3-datepicker';

    defineProps({
        label: String
    });

    const date = ref(new Date());

</script>

<style lang="scss" scoped>

    .datepicker-container {

        display: flex;
        flex-direction: column;
        margin-bottom: 20px;

        label {
            font-weight: bold;
        }

    }

</style>