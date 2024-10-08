/** @type {import('tailwindcss').Config} */
export default {
  content: ["./templates/**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography"), require("daisyui")],
};
