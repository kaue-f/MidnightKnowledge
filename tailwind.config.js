/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/views/livewire/*.blade.php",
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                noto: ["Noto Sans", "sans-serif"],
            },
        },
    },
    daisyui: {
        themes: [
            {
                dark: {
                    primary: "#2344ed",
                    "primary-content": "#fafafa",
                    secondary: "#3829bf",
                    "secondary-content": "#fafafa",
                    accent: "#424242",
                    "accent-content": "#fafafa",
                    neutral: "#949494",
                    "neutral-content": "#fafafa",
                    "base-100": "#191919",
                    "base-200": "#2a2a2a",
                    "base-300": "#090909",
                    "base-content": "#fafafa",
                    info: "#2838a3",
                    "info-content": "#f3f5fe",
                    success: "#008033",
                    "success-content": "#edf9ef",
                    warning: "#eeaf00",
                    "warning-content": "#fbf8f1",
                    error: "#bf0004",
                    "error-content": "#faecec",
                },
            },
        ],
    },
    plugins: [require("daisyui")],
};
