/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      './app/Livewire/**/*Table.php',
      './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
      './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php',
      './vendor/masmerise/livewire-toaster/resources/views/*.blade.php', // 
    ],
    theme: {
      extend: {},
    },
    darkMode: 'class',
    plugins: [],
  }