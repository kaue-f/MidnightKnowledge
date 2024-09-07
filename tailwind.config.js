/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/views/livewire/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: [
            {
                dark: {
                    primary: "791af1",
                    "primary-content": "#f3f3f3",
                    secondary: "#4f139a",
                    "secondary-content": "#f3f3f3",
                    accent: "#280a4e",
                    "accent-content": "#f3f3f3",
                    neutral: "#2814fc",
                    "neutral-content": "#f3f3f3",
                    "base-100": "#040218",
                    "base-200": "#100864",
                    "base-300": "#1c0eb0",
                    "base-content": "#f3f3f3",
                    info: "#1849de",
                    "info-content": "#f3f3f3",
                    success: "#00c300",
                    "success-content": "#f3f3f3",
                    warning: "#f97316",
                    "warning-content": "#f3f3f3",
                    error: "#dc2626",
                    "error-content": "#f3f3f3",
                },
            },
        ],
    },
    plugins: [require("daisyui")],
};
