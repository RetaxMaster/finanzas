<template>
    <header>
        <div class="icon-menu-container" @click="openMenu">
            <font-awesome-icon icon="fa-solid fa-bars" />
        </div>
    </header>
</template>

<script setup>

import { useMenuStore } from '@/stores/menu'
const menu = useMenuStore()

function openMenu() {
    menu.toggleMenu();
}

</script>

<style lang="scss" scoped>

header {

    position: sticky;
    top: 0;
    left: 0;
    width: 100%;
    padding: 10px 20px;
    background: #512da8;
    font-size: 30px;
    color: #fff;
    display: flex;
    justify-content: flex-end;

    .icon-menu-container {
        display: inline-block;
        border: 2px solid #fff;
        padding: 2px 12px;
        border-radius: 5px;
    }

}

</style>