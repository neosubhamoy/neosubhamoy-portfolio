/** @type {import('tailwindcss').Config} */
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
      accent_secondary_transparent: 'rgba(255, 255, 255, 0.30)'
    },
    extend: {},
  },
  plugins: [],
}

