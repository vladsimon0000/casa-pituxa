import theme from './resources/json/theme.json';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    './vendor/awcodes/filament-curator/resources/**/*.blade.php', 
  ],
  theme: theme,
  plugins: [],
}

