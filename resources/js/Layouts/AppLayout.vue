<template>

    <Header />

    <main>

        <h1>{{ title }}</h1>
        <slot />

    </main>
    
</template>

<script setup>

import Header from '@/Components/Header.vue';

defineProps({
    title: String,
});

</script>

<style lang="scss" scoped>

    main {
        padding: 0 20px;

        h1 {
            margin: 30px 0;
            font-size: 25px;
            font-weight: bold;
        }

    }


</style>