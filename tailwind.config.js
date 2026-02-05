import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '1rem',
                lg: '2rem',
            },
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#2563EB',
                    600: '#2563EB',
                    700: '#1D4ED8',
                },
                accent: {
                    DEFAULT: '#10B981'
                },
                muted: {
                    DEFAULT: '#6B7280'
                },
                surface: {
                    DEFAULT: '#F3F4F6'
                }
            }
        },
    },

    plugins: [forms],
};
