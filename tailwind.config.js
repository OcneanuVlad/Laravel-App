/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: [
        "./src/**/*.{html,js,php,blade.php}",
        "./resources/**/*.{html,js,php,blade.php}",
    ],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            white: "#f7f9fb",
            teal: "#0fe0b9",
            black: "#000000",
            yellow: "#ffda54",
            pink: "#f9b8c4",
            blue: "#0099ff",
        },
        extend: {},
    },
    plugins: [],
};
