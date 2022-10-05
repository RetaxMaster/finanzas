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
        <tbody
            v-for="(month, i) in payment.months"
            :key="i"
        >
            <tr class="bg-secondary text-icons-icons month-name">
                <th colspan="3">{{ month.month_name }}</th>
            </tr>
            <tr
                v-for="spent in month.spents"
                :key="spent.id"
            >
                <td>{{ getDate(new Date(spent.date)) }}</td>
                <td>{{ spent.description }}</td>
                <td>{{ money(spent.amount) }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>

import { toRaw } from "@vue/reactivity";
import { getDate } from "@/composables/dateParser.js";
import { money } from "@/composables/moneyParser.js";

const props = defineProps({
    payment: Object
})

console.log(props.payment);

</script>

<style lang="scss" scoped>

    table {
        margin-bottom: 30px;
        margin-right: 50px;
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