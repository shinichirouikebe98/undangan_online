/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        // cinzel: ["Cinzel", "serif"],
        josefin: ["Josefin Sans", "sans-serif"],
        // smooch:["Smooch", "cursive"],
        openSans:["Open Sans", "sans-serif"]
      },
    },
  },
  plugins: [
    require('daisyui')
  ],
}