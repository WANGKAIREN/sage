/** @type {import('tailwindcss').Config} config */
// 旧
// const config = {
//   content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
//   theme: {
//     extend: {
//       colors: {}, // Extend Tailwind's default colors
//     },
//   },
//   plugins: [],
// };
//
// export default config;


// 新
const colors = require('tailwindcss/colors');

module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        ...colors,
      },
    },
  },

  // add daisyUI plugin
  plugins: [
    require('daisyui'),
  ],

  // daisyUI config (optional - here are the default values)
  daisyui: {
    themes: false, // true: all themes | false: only light + dark | array: specific themes like this ["light", "dark", "cupcake"]
    darkTheme: "light", // name of one of the included themes for dark mode
    base: true, // applies background color and foreground color for root element by default
    styled: true, // include daisyUI colors and design decisions for all components
    utils: true, // adds responsive and modifier utility classes
    rtl: false, // rotate style direction from left-to-right to right-to-left. You also need to add dir="rtl" to your html tag and install `tailwindcss-flip` plugin for Tailwind CSS.
    prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
    logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
  },

};
