<template>
    
    <AppLayout title="Añade un nuevo ingreso:">

        <form action="#" method="post">

            <CustomSelect label="Método de pago" name="payment_method">
                <option 
                    v-for="payment in payment_methods"
                    :key="payment.id"
                    :value="payment.type">
                        {{payment.name}}
                    </option>
            </CustomSelect>

            <CustomSelect label="Tipo de ingreso" name="type">
                <option value="1">Pago de nómina</option>
                <option value="2">Reembolso</option>
            </CustomSelect>

            <CustomInput
                name="date"
                label="Fecha:"
                placeholder="Pon la fecha wey"
            />

            <CustomInput
                name="amount"
                label="Monto del ingreso:"
                placeholder="$1,000"
            />

            <CustomTextarea
                name="description"
                label="Descripción del ingreso:"
                placeholder="Inventate una buena excusa"
            />

            <CustomButton type="submit">
                Guardar
            </CustomButton>

        </form>

    </AppLayout>

</template>

<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';

import CustomSelect from '@/Components/Form/Select.vue';
import CustomInput from '@/Components/Form/Input.vue';
import CustomTextarea from '@/Components/Form/Textarea.vue';
import CustomButton from '@/Components/Form/Button.vue';

defineProps({
    payment_methods: {
        type: Object,
        required: true
    }
});

</script>