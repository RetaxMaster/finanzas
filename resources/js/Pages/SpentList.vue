<template>
    
    <AppLayout title="Lista de gastos por método de pago:">

        <div class="tables-container">
            <SpentTable
                v-for="payment in payment_methods"
                :key="payment.id"
                :payment="payment"
            />
        </div>

    </AppLayout>

</template>

<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import SpentTable from '@/Components/SpentTable.vue';

defineProps({
    payment_methods: {
        type: Object,
        required: true
    }
});

</script>

<style lang="scss" scoped>

.tables-container {
    display: flex;
    overflow-x: auto;
}

</style>