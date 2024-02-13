/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                justMeAgainDownHere: ["Just Me Again Down Here", "sans-serif"],
                plusJakartaSans: ["Plus Jakarta Sans", "sans-serif"],
            },
        }, 
    },
    plugins: [],
};
