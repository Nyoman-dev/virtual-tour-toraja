/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "media",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: { space: ['"Space Grotesk"', "serif"] },
        },
    },
    plugins: [require("flowbite/plugin")],
};
