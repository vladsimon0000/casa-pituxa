import theme from '../../json/theme.json';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './theme.blade.php'
  ],
  theme: theme,
  plugins: [],
  prefix: 'tw-',
}

