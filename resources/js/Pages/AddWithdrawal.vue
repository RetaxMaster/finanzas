<template>
    
    <AppLayout title="Añade un nuevo gasto:">

        <form action="#" method="post">

            <CustomSelect 
                label="Método de pago" 
                name="payment_method"
                v-model="state.paymentMethod"
            >
                <option 
                    v-for="payment in payment_methods"
                    :key="payment.id"
                    :value="payment.id"
                >
                    {{payment.name}}
                </option>
            </CustomSelect>

            <CustomSelect 
                label="Tipo de ingreso" 
                name="type"
                v-model="state.incomeType"
            >
                <option value="1">Pago de nómina</option>
                <option value="2">Reembolso</option>
            </CustomSelect>

            <DatePicker
                label="Fecha:"
                v-model="state.date"
            />

            <CustomInput
                name="amount"
                label="Monto del ingreso:"
                placeholder="$1,000"
                v-model="state.amount"
            />

            <CustomTextarea
                name="description"
                label="Descripción del ingreso:"
                placeholder="Inventate una buena excusa"
                v-model="state.description"
            />

            <CustomButton type="submit">
                Guardar
            </CustomButton>

        </form>

    </AppLayout>

</template>

<script setup>

import { ref, reactive } from '@vue/reactivity';

import AppLayout from '@/Layouts/AppLayout.vue';

import CustomSelect from '@/Components/Form/Select.vue';
import CustomInput from '@/Components/Form/Input.vue';
import CustomTextarea from '@/Components/Form/Textarea.vue';
import CustomButton from '@/Components/Form/Button.vue';
import DatePicker from '@/Components/Form/DatePicker.vue';
import { reactive } from '@vue/reactivity';

const state = reactive({
    paymentMethod: "1",
    incomeType: "1",
    date: new Date(),
    amount: "",
    description: ""
})

defineProps({
    payment_methods: {
        type: Object,
        required: true
    }
});

</script>