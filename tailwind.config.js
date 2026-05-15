/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#3B82F6',
        secondary: '#A855F7',
      },
      animation: {
        'fade-in': 'fadeIn 0.5s ease-in',
        'slide-in': 'slideIn 0.5s ease-in',
      },
    },
  },
  plugins: [],
}