/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [    
    "./index.php",
    "./guides.php",
    "./guide-detail1.php",
    "./guide-detail2.php",
    "./landlords.php",
    "./landingpage.php",
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
