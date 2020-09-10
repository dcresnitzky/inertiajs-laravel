const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {

    purge: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue'
    ],

    theme: {
        extend: {
            colors: {
                primary: 'rgba(249, 178, 27, 1)',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },

    plugins: [require('@tailwindcss/ui')],
};
