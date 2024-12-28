/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [    
    "./index.php",
    "./hostel-details.php",
    "./includes/**/*.php",
    "./scripts/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
