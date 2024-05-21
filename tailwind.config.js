/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    fontFamily: {
      'text': ["Montserrat", 'sans-serif'],
      'title': ["Gruppo", 'sans-serif'],
    },
    extend: {
      height: {
        '1/10': '10%',
      }
    },
  },
  plugins: [],
}

