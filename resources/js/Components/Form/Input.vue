<template>

    <div class="input-container">

        <label :for="name">{{ label }}</label>
        <input type="text" :name="name" :id="name" :placeholder="placeholder">

    </div>

</template>

<script setup>

defineProps({
    label: String,
    name: String,
    placeholder: {
        type: String,
        required: false,
        default: ""
    }
})

</script>

<style lang="scss" scoped>

    .input-container {

        display: flex;
        flex-direction: column;
        margin-bottom: 20px;

        label {
            font-weight: bold;
        }

    }

</style>