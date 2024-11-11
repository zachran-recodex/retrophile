import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'retrophile': {
                    '50': '#fef2f2',
                    '100': '#fee2e3',
                    '200': '#fecacb',
                    '300': '#fba6a8',
                    '400': '#f77276',
                    '500': '#ee454a',
                    '600': '#d42429',
                    '700': '#b81d21',
                    '800': '#981c20',
                    '900': '#7e1e21',
                    '950': '#440b0d',
                },
                'retrophile-2': {
                    '50': '#fef5ee',
                    '100': '#fde7d7',
                    '200': '#fbcbad',
                    '300': '#f8a779',
                    '400': '#f47843',
                    '500': '#f15f2c',
                    '600': '#e13c15',
                    '700': '#bb2b13',
                    '800': '#952417',
                    '900': '#782016',
                    '950': '#410d09',
                },
                'retrophile-3': {
                    '50': '#fef9ee',
                    '100': '#fdf1d7',
                    '200': '#f9deaf',
                    '300': '#f5c67c',
                    '400': '#f0a447',
                    '500': '#ec8922',
                    '600': '#dd7019',
                    '700': '#b85516',
                    '800': '#92441a',
                    '900': '#763918',
                    '950': '#401b0a',
                },
                'wheatfield': {
                    '50': '#fbf9ef',
                    '100': '#f2ebce',
                    '200': '#e6d8a1',
                    '300': '#d9c170',
                    '400': '#d0ad4f',
                    '500': '#c6933a',
                    '600': '#af7530',
                    '700': '#92592b',
                    '800': '#784628',
                    '900': '#633b24',
                    '950': '#381e10',
                },
                'shark': {
                    '50': '#f8f7f8',
                    '100': '#f0eeee',
                    '200': '#ded9da',
                    '300': '#c1b8bb',
                    '400': '#9f9196',
                    '500': '#847379',
                    '600': '#6c5d62',
                    '700': '#584c50',
                    '800': '#4b4144',
                    '900': '#41393b',
                    '950': '#231f20',
                },
            },
        },
    },

    plugins: [
        forms,
        plugin(function({ addUtilities }) {
            addUtilities({
                '.py-main': {
                        paddingTop: '2rem',
                        paddingBottom: '2rem',
                    '@screen sm': {
                        paddingTop: '3rem',
                        paddingBottom: '3rem',
                    },
                    '@screen lg': {
                        paddingTop: '4rem',
                        paddingBottom: '4rem',
                    }
                },
                '.container-main': {
                    '@apply container mx-auto px-4 sm:px-6 lg:px-8': {},
                },
            });
        })
    ],
};
