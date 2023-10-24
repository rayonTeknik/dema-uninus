/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    container: {
      center: true,
      padding: '1.25rem',
      screens: {
        'xl': '1200px',
        '2xl': '1200px',
      },
    }
  },
    fontFamily: {
      'sans': ['Montserrat', 'sans-serif']
    },
  plugins: [require('daisyui')],
}
