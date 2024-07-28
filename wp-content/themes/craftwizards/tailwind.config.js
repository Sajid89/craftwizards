module.exports = {
  content: [
    './**/*.php',
    './**/*.html',
    './**/*.js', // Added .js file extension
  ],
  theme: {
    extend: {
      colors: {
        'el-color-1': '#263d81',
        'el-color-2': '#000000',
        'el-color-3': '#ffffff', // Added new color
      },
      boxShadow: {
        right: '8px 0 15px -3px rgba(0, 0, 0, 0.1), 4px 0 6px -2px rgba(0, 0, 0, 0.05)',
        left: '-8px 0 15px -3px rgba(0, 0, 0, 0.1), -4px 0 6px -2px rgba(0, 0, 0, 0.05)', // Added new boxShadow
      },
    },
  },
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
    require('postcss-import'), // Added new plugin
  ],
}