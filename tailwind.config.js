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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'primary-font': '#713EDA',
                'primary-font-hover': '#4305C3',
                'secondary-font': '#31245C',
            },
            boxShadow: {
                'landing-card': '0px 70px 10px rgba(0, 0, 0, 0.5)',
            }
        },
    },
    plugins: [],
};
