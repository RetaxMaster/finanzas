<template>
    
    <AppLayout title="Añade un nuevo ingreso:">

        <form 
            action="#" 
            method="post"
            @submit="saveIncome"
        >

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
                placeholder="¿De dónde sacaste el dinero?"
                v-model="state.description"
            />

            <CustomButton type="submit">
                Guardar
            </CustomButton>

        </form>

    </AppLayout>

</template>

<script setup>

import axios from 'axios';
import Swal from 'sweetalert2'
import { reactive } from '@vue/reactivity';

import AppLayout from '@/Layouts/AppLayout.vue';
import CustomSelect from '@/Components/Form/Select.vue';
import CustomInput from '@/Components/Form/Input.vue';
import CustomTextarea from '@/Components/Form/Textarea.vue';
import CustomButton from '@/Components/Form/Button.vue';
import DatePicker from '@/Components/Form/DatePicker.vue';

const form = {
    paymentMethod: "1",
    incomeType: "1",
    date: new Date(),
    amount: "",
    description: ""
};

const state = reactive({ ...form })

const saveIncome = e => {

    e.preventDefault();

    axios.post(route("incomes.store"), {
        payment_methods_id: state.paymentMethod,
        type: state.incomeType,
        date: state.date, 
        amount: state.amount, 
        description: state.description
    })
    .then(response => {

        if (response.status == 200)
            Swal.fire({
                title: '¡Hecho!',
                text: 'Este ingreso ha sido guardado con éxito.',
                icon: 'success',
                confirmButtonText: 'Hecho'
            });

        Object.assign(state, form);

    });

}

defineProps({
    payment_methods: {
        type: Object,
        required: true
    }
});

</script>