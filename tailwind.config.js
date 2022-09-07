const plugin = require('tailwindcss/plugin');
const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors') 
 
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php', 
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: { 
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.pink,
                sendto: colors.yellow,
            }, 
        },
    },
    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'), 
        plugin(function({ addComponents }) {
            addComponents({
                '.filament-button,.filament-tables-container': {
                    borderRadius: '2px !important'
                },
                '.filament-sidebar-item > a' :{
                    borderRadius: '2px !important'
                },
                '.filament-tables-pagination div' :{
                    borderRadius: '2px !important'
                },
                '.ring-2' : {
                    borderRadius: '2px !important'
                },
                'input,select' :{
                    borderRadius: '2px !important'
                }
            })
        })    ],
}