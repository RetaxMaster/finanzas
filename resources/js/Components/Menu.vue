<template>
    
    <nav :class="{ open: menu.opened }">
        <ul>
            <li @click="closeMenu" id="close-nav">
                <font-awesome-icon icon="fa-solid fa-angle-left" />
            </li>
            <li>
                <Link @click="closeMenu" :href="route('index')">Tablas mensuales</Link>
            </li>
            <li>
                <Link @click="closeMenu" :href="route('spents')">Lista de gastos</Link>
            </li>
            <li>
                <Link @click="closeMenu" :href="route('add_income')">Añade un nuevo ingreso</Link>
            </li>
            <li>
                <Link @click="closeMenu" :href="route('add_withdrawal')">Añade un nuevo gasto</Link>
            </li>
            <li>
                <Link @click="closeMenu" :href="route('forecast')">Haz una previsión</Link>
            </li>
        </ul>
    </nav>

</template>

<script setup>

import { Link } from '@inertiajs/inertia-vue3';
import { useMenuStore } from '@/stores/menu'

const menu = useMenuStore()

function closeMenu() {
    menu.closeMenu();
}

</script>

<style lang="scss" scoped>

nav {

    background: #1b1b1b;
    color: #fff;
    position: fixed;
    left: -100%;
    width: 100%;
    height: 100%;
    transition: 0.3s all ease;
    z-index: 1;

    &.open {
        left: 0;
    }

    #close-nav,
    a {
        display: inline-block;
        width: 100%;
        padding: 10px 20px;
    }

}

</style>