/** @type {import('tailwindcss').Config} */

module.exports = {
  darkMode: 'selector',
  content: [
    './*.html',
    './app/Views/pages/**/*.html',
    './app/Views/**/**/*.html',
    './app/Views/**/**/*.php'
  ],
  theme: {
    extend: {
      colors: {
        "primary": "#1f4b8e",
        "primary-dark": "#102a52",
        "secondary": "#182430",
        "secondary-dark": "#060C11",
      }
    },
  },
  plugins: [],
}

