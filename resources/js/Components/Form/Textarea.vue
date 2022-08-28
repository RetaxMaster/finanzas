<template>

    <div class="textarea-container">

        <label :for="name">{{ label }}</label>
        <textarea :name="name" :id="name" :placeholder="placeholder"></textarea>

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

    .textarea-container {

        display: flex;
        flex-direction: column;
        margin-bottom: 20px;

        label {
            font-weight: bold;
        }

    }

</style>