<template>
    
    <table>
        <thead>
            <tr class="bg-primary-dark text-icons-icons">
                <th colspan="3">{{ payment.name }}</th>
            </tr>
            <tr class="bg-primary text-icons-icons">
                <th>Fecha</th>
                <th>Concepto</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-secondary text-icons-icons">
                <th colspan="3">Enero</th>
            </tr>
            <tr
                v-for="spent in payment.withdrawals"
                :key="spent.id"
            >
                <td>{{ spent.date }}</td>
                <td>{{ spent.description }}</td>
                <td>{{ spent.amount }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>
import { toRaw } from "@vue/reactivity";


const pay = defineProps({
    payment: Object
})

console.log(toRaw(pay.payment));

</script>

<style lang="scss" scoped>

    table {
        margin-bottom: 30px;
    }

    th, td {
        border: 1px solid #ccc;
        border-collapse: collapse;
        padding: 6px;
        text-align: center;
    }

    td {
        background: #f4f4f4;
    }

</style>