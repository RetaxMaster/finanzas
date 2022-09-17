<template>
    
    <AppLayout title="Añade un nuevo gasto:">

        <form action="#" method="post">

            <CustomSelect label="Método de pago" name="payment_method">
                <option 
                    v-for="payment in payment_methods"
                    :key="payment.id"
                    :value="payment.type">
                        {{payment.name}}
                    </option>
            </CustomSelect>

            <CustomSelect label="Tipo de gasto" name="type">
                <option value="1">Retiro de la cuenta</option>
                <option value="2">Compra</option>
            </CustomSelect>

            <DatePicker
                label="Fecha:"
            />

            <CustomInput
                name="amount"
                label="Monto del ingreso:"
                placeholder="$1,000"
            />

            <CustomTextarea
                name="description"
                label="Descripción del gasto:"
                placeholder="Inventate una buena excusa"
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

defineProps({
    payment_methods: {
        type: Object,
        required: true
    }
});

</script>