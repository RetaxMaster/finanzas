<template>

    <div class="select-container">

        <label :for="name">{{ label }}</label>

        <select :name="name" :id="name">
            <slot />
        </select>

    </div>

</template>

<script setup>

defineProps({
    label: String,
    name: String
})

</script>

<style lang="scss" scoped>

    .select-container {
        
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;

        label {
            font-weight: bold;
        }

    }

</style>