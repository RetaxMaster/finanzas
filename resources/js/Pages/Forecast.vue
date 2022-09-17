<template>
    
    <AppLayout title="Previsiones mensuales:">

        <form action="#">

            <Radios
                title="Tipo de previsión"
                name="forecast"
                :radios="radios"
            />

            <DoubleInput>

                <Input
                    label="Monto:"
                    name="amount"
                    placeholder="$1,000"
                />

                <Input
                    label="Meses:"
                    name="months"
                    placeholder="12"
                />

            </DoubleInput>

            <Button type="submit">Guardar</Button>

        </form>

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

import { reactive } from '@vue/reactivity';

import AppLayout from '@/Layouts/AppLayout.vue';

import SpentTable from '@/Components/SpentTable.vue';
import Radios from '@/Components/Form/Radios.vue';
import Input from '@/Components/Form/Input.vue';
import DoubleInput from '@/Components/Form/DoubleInput.vue';
import Button from '@/Components/Form/Button.vue';

const radios = reactive([
    {
        label: "Gasto constante",
        value: 1
    },
    {
        label: "Compra a MSI",
        value: 2
    }
]);

defineProps({
    payment_methods: {
        type: Object,
        required: true
    }
});

</script>

<style lang="scss" scoped>

form {
    margin-bottom: 50px;
}

.tables-container {
    display: flex;
    overflow-x: auto;
}

</style>