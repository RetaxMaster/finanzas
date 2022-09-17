const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue'
    ],

    theme: {
        colors: {

            // Mis colores
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
            },

            // Colores de Tailwind
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            emerald: colors.emerald,
            indigo: colors.indigo,
            yellow: colors.yellow,
            blue: colors.blue,

        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography')
    ],
};
