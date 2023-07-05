const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            colors : {
                primary: {
                    DEFAULT: '#9D69A3',
                    100: '#61707D',
                    200: '#D7C1D7',
                    300: '#BF9BBF',
                    500: '#9D69A3',
                    600: '#86558B',
                },
                secondary: {
                    DEFAULT: '#61707d',
                    100: '#E8EBED',
                    500: '#61707D',
                },
                success: {
                    DEFAULT: '#40F99B',
                },
                danger: {
                    DEFAULT: '#E85D75',
                },
                warning: {
                    DEFAULT: '',
                },
                info: {
                    DEFAULT: '#F5FBEF',
                },
                test: { DEFAULT: '#eee', 1: '#fcc', 2: '#cfc', 3: '#ccf', 4: '#cff', 5: '#fcf', 6: '#ffc' }
            },
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
