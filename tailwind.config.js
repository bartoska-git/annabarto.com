/** @type {import('tailwindcss').Config} */
export default {
  content: [
  './index.html',
  './src/**/*.{js,ts,jsx,tsx}'
],
  theme: {
    extend: {
      colors: {
        'warm-beige': '#F6F1E7',
        'olive-grey': '#8A8F7A',
        'soft-terracotta': '#C9866A',
        'deep-espresso': '#3B2F2F',
        'light-beige': '#FAF6F0',
      },
      fontFamily: {
        'outfit': ['Outfit', 'sans-serif'],
        'dm-sans': ['"DM Sans"', 'sans-serif'],
      },
      borderRadius: {
        'card': '12px',
        'button': '8px',
      },
      boxShadow: {
        'soft': '0 4px 20px rgba(0, 0, 0, 0.05)',
      }
    },
  },
  plugins: [],
}