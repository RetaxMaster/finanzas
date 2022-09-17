<template>
    
    <table>
        <tr class="bg-primary-dark text-icons-icons">
            <th colspan="6">Enero</th>
        </tr>
        <tr class="bg-primary text-icons-icons">
            <th>Fecha</th>
            <th colspan="2">Deudas a pagar</th>
            <th colspan="2">Ganancias</th>
            <th>Resto</th>
        </tr>
        <tr>
            <td>10</td>
            <td>Tarjeta 1 MSI</td>
            <td>{{ money(15000) }}</td>
            <td></td>
            <td></td>
            <td>{{ money(10000) }}</td>
        </tr>
        <tr>
            <td>10</td>
            <td></td>
            <td></td>
            <td>Pago</td>
            <td>{{ money(15000) }}</td>
            <td>{{ money(10000) }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

</template>

<script setup>

import { money } from "@/composables/moneyParser.js";

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