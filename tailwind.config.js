const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        colors: {
            'primary': {
                light: "d1c4e9",
                DEFAULT: '#673ab7',
                dark: '#512da8',
            },
            'secondary': {
                DEFAULT: '#536dfe',
            },
            'icons': {
                primary: '#212121',
                secondary: '#757575',
                icons: "#fff"
            },
            'table': {
                cell: "#f4f4f4",
                divider: "#ccc"
            }
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
