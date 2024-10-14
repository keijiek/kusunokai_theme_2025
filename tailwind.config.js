/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "templates/**/*.php",
    "view/**/*.php",
    "assets/src/js/**/*.js",
    "./node_modules/flowbite/**/*.js",
  ],
  darkMode: "selector",
  theme: {
    extend: {
      typography: {
        DEFAULT: {
          css: {
            maxWidth: "100%", // add required value here
          },
        },
      },
    },
  },
  plugins: [
    require("@tailwindcss/typography"),
    require("flowbite/plugin"),
    // require("daisyui"),
  ],
  // daisyui: {
  //   themes: false,
  //   darkTheme: "light",
  // },
};
