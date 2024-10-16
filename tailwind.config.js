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
        extend: {},
    },
    daisyui: {
        themes: [
            {
                dark: {
                    primary: "791af1",
                    "primary-content": "#f7f7f7",
                    secondary: "#4f139a",
                    "secondary-content": "#f7f7f7",
                    accent: "#280a4e",
                    "accent-content": "#f7f7f7",
                    neutral: "#010039",
                    "neutral-content": "#f7f7f7",
                    "base-100": "#040218",
                    "base-200": "#030113",
                    "base-300": "#02010f",
                    "base-content": "#f7f7f7",
                    info: "#1849de",
                    "info-content": "#f7f7f7",
                    success: "#00c300",
                    "success-content": "#f7f7f7",
                    warning: "#f97316",
                    "warning-content": "#f7f7f7",
                    error: "#dc2626",
                    "error-content": "#f7f7f7",
                },
            },
        ],
    },
    plugins: [require("daisyui")],
};
