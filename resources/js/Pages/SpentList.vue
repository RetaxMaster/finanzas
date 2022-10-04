<template>
    
    <AppLayout title="Lista de gastos por método de pago:">

        <div class="tables-container">
            <SpentTable
                v-for="payment in payment_methods"
                :key="payment.id"
                :payment="payment"
                :majorRows="majorRows"
            />
        </div>

    </AppLayout>

</template>

<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import SpentTable from '@/Components/SpentTable.vue';

const props = defineProps({
    payment_methods: {
        type: Object,
        required: true
    }
});

// Como no son la misma cantidad de filas, el CSS se rompe porque las filas tratan de ajustarse al alto. Con esto rellenamos el resto de filas en blanco
const lenghts = props.payment_methods.map(current => {
    return current.withdrawals.length
});

const majorRows = Math.max(...lenghts);

</script>

<style lang="scss" scoped>

.tables-container {
    display: flex;
    align-items: flex-start;
    overflow-x: auto;
}

</style>