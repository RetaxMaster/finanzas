<template>
    
    <AppLayout title="Lista de gastos por método de pago:">

        <div class="tables-container">
            <SpentTable
                v-for="payment in results"
                :key="payment.id"
                :payment="payment"
            />
        </div>

    </AppLayout>

</template>

<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import SpentTable from '@/Components/SpentTable.vue';

const props = defineProps({
    results: {
        type: Object,
        required: true
    }
});

</script>

<style lang="scss" scoped>

.tables-container {
    display: flex;
    align-items: flex-start;
    overflow-x: auto;
}

</style>