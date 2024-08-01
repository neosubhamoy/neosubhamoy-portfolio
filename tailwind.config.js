/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ["./htdocs/**/*.{php,html,js}"],
  theme: {
    fontFamily: {
      'poppins': ['"Poppins"', 'sans-serif'],
      'lexend': ['"Lexend Deca"', 'sans-serif'],
      'cormorant': ['"Cormorant Upright"', 'serif']
    },
    colors: {
      bg_primary: '#0F172A',
      bg_secondary: '#1E293B',
      bg_third: '#26334A',
      accent_primary: '#38BDF8',
      accent_secondary: '#FFFFFF',
      accent_three: '#D9D9D9',
      accent_four: '#ACCBDE',
      accent_primary_transparent: 'rgba(56, 189, 248, 0.30)',
      accent_secondary_transparent: 'rgba(255, 255, 255, 0.30)',
      accent_primary_extratransparent: 'rgba(56, 189, 248, 0.15)',
    },
    extend: {
      backgroundImage: {
        'radiul-gradient-transparent-secondary': 'radial-gradient(at top right, transparent 65%, #1E293B 35%)',
        'radiul-gradient-secondary-transparent': 'radial-gradient(at top left, transparent 65%, #1E293B 35%)',
      },
    },
  },
  plugins: [
    plugin(function({ addUtilities }) {
      addUtilities({
        '.no-scrollbar::-webkit-scrollbar': {
          'display': 'none',
        },
        '.no-scrollbar': {
          '-ms-overflow-style': 'none',
          'scrollbar-width': 'none',
        }
      })
    })
  ],
}

