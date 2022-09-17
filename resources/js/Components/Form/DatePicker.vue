<template>
    
    <div class="datepicker-container">
        <label>{{ label }}</label>
        <Datepicker
            :modelValue="modelValue"
            @update:modelValue="changeValue"
        />
    </div>

</template>

<script setup>

    import Datepicker from 'vuejs3-datepicker';

    const emit = defineEmits(["update:modelValue"]);

    const changeValue = value => {
        emit("update:modelValue", value);
    }

    defineProps({
        label: String,
        modelValue: {
            type: Date,
            required: true
        },
    });

    

</script>

<style lang="scss" scoped>

    .datepicker-container {

        display: flex;
        flex-direction: column;
        margin-bottom: 20px;

        label {
            font-weight: bold;
        }

    }

</style>