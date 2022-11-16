/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./index.html",
        "./resources/js/**/*.{js,ts,jsx,tsx,vue}",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('tw-elements/dist/plugin')
    ],
}
