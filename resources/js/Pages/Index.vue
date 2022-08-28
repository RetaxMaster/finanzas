<template>
    
    <AppLayout title="Tablas mensuales:">

        <div class="table-container">
            <MonthlyTable />
            <MonthlyTable />
            <MonthlyTable />
            <MonthlyTable />
        </div>

    </AppLayout>

</template>

<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import MonthlyTable from '@/Components/MonthlyTable.vue';

defineProps({
    incomes: Object
});

</script>

<style lang="scss" scoped>

    .table-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

</style>