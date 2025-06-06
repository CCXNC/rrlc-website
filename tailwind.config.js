import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                titillium: ['"Titillium Web"', 'sans-serif'], // Add Titillium Web
                poppins: ['Poppins', 'sans-serif'], // Add Poppins font // Add Titillium Web
                jost: ["Jost", "sans-serif"],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
