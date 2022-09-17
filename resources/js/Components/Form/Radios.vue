<template>

    <div class="radio-container">

        <p>{{ title }}</p>

        <div class="flex">
            <div class="container" v-for="(radio, i) in radios" :key="i">
                <input type="radio" :name="name" :value="radio.value" :id="name + i">
                <label :for="name + i">{{ radio.label }}</label>
            </div>
        </div>
        

    </div>

</template>

<script setup>

defineProps({
    title: String,
    name: String,
    radios: Object
})

</script>

<style lang="scss" scoped>

    .radio-container {

        display: flex;
        flex-direction: column;
        margin-bottom: 20px;

        p {
            margin-bottom: 10px;
        }

        label, p {
            font-weight: bold;
        }

        .container {

            display: flex;
            align-items: center;

            input {
                margin-right: 5px;
                border-radius: 100% !important;
            }

        }

    }

</style>