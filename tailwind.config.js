/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
        //
    },
    colors: {
        'jet': '#2f2f2f',
        'erie': '#181619',
        'gold': '#BD954C',
        'cream': '#dbc8a7',
        'ivory': '#fcfaee',
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('tailwind-scrollbar-hide'),
    require('prettier-plugin-tailwindcss'),
  ],
}
