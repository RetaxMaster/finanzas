<template>

    <Header />

    <Menu />

    <main>

        <h1>{{ title }}</h1>
        <slot />

    </main>
    
</template>

<script setup>

import Header from '@/Components/Header.vue';
import Menu from '@/Components/Menu.vue';

defineProps({
    title: String,
});

</script>

<style lang="scss" scoped>

    main {
        padding: 0 20px;

        h1 {
            display: inline-block;
            margin: 30px 0;
            font-size: 25px;
            font-weight: bold;
        }

    }


</style>