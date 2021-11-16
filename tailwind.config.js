const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    darkMode: 'class',
    purge: {
        enabled: false,
        content: [ 
            'source/**/*.blade.php',
            'source/**/*.md',
            'source/**/*.html',
            ],
        options: {
            safelist: ["dark"],
        },
    }, 
    theme: {
        extend: {
            colors: {
                bluegray: require('tailwindcss/colors').blueGray,
                gray: require('tailwindcss/colors').gray,
                red: require('tailwindcss/colors').red, 
                orange: require('tailwindcss/colors').orange, 
                amber: require('tailwindcss/colors').amber,
                yellow: require('tailwindcss/colors').yellow, 
                lime: require('tailwindcss/colors').lime, 
                green: require('tailwindcss/colors').green, 
                emerald: require('tailwindcss/colors').emerald, 
                teal: require('tailwindcss/colors').teal,
                cyan: require('tailwindcss/colors').cyan,
                lightblue: require('tailwindcss/colors').lightBlue,
                blue: require('tailwindcss/colors').blue,
                indigo: require('tailwindcss/colors').indigo,
                violet: require('tailwindcss/colors').violet, 
                purple: require('tailwindcss/colors').purple, 
                fuchsia: require('tailwindcss/colors').fuchsia, 
                pink: require('tailwindcss/colors').pink, 
                rose: require('tailwindcss/colors').rose, 
            },
            inset: {
                "-68": "-17rem",
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [
      
    ],
};
