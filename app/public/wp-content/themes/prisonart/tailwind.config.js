const theme = require('./theme.json');
const prisonart = require("@jeffreyvr/tailwindcss-prisonart");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: prisonart.colorMapper(prisonart.theme('settings.color.palette', theme)),
            fontSize: prisonart.fontSizeMapper(prisonart.theme('settings.typography.fontSizes', theme))
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': prisonart.theme('settings.layout.contentSize', theme),
            'xl': prisonart.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        prisonart.tailwind
    ]
};
