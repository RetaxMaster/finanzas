var formatter = new Intl.NumberFormat('es-MX', {
    style: 'currency',
    currency: 'MXN',
});

const money = amount => formatter.format(amount);

export {
    money
}