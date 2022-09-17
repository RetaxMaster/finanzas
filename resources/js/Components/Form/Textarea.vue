<template>

    <div class="textarea-container">

        <label :for="name">{{ label }}</label>
        <textarea 
            :name="name" 
            :id="name" 
            :placeholder="placeholder"
            @input="changeValue"
            :value="modelValue"
        ></textarea>

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
    placeholder: {
        type: String,
        required: false,
        default: ""
    },
    modelValue: {
        type: String,
        required: true
    },
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