<template>

    <div class="input-container">

        <label :for="name">{{ label }}</label>
        <input
            :value="modelValue"
            @input="changeValue"
            type="text" 
            :name="name" 
            :id="name" 
            :placeholder="placeholder"
        >

    </div>

</template>

<script setup>

const emit = defineEmits(["update:modelValue"]);

const changeValue = event => {
    emit("update:modelValue", event.target.value);
}

defineProps({
    label: String,
    name: String,
    modelValue: {
        type: String,
        required: true
    },
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