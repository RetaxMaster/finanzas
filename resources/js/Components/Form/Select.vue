<template>

    <div class="select-container">

        <label :for="name">{{ label }}</label>

        <select 
            :selected="modelValue"
            @change="changeValue"
            :name="name" 
            :id="name"
        >
            <slot />
        </select>

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