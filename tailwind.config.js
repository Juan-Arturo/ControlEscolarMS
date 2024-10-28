import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#621132',
                'secondary': '#902449',
                'tertiary': '#13322B',
                'quaternary': '#285C4D',
                'quinary': '#4E232E',
                'senary': '#56242A',
                'septenary': '#B38E5D',
                'octonary': '#D4C19C',
              },
        },
    },

    plugins: [forms, typography],
};
