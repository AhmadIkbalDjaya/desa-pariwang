/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                justMeAgainDownHere: ["Just Me Again Down Here", "sans-serif"],
                plusJakartaSans: ["Plus Jakarta Sans", "sans-serif"],
                protestStrike: ["Protest Strike", "sans-serif"]
            },
            backgroundImage: {
                "home-hero1": "url('/public/image/village-2.webp')",
                "home-hero2": "url('public/image/village-2.webp')",
                "home-hero3": "url('/image/village-2.webp')",
                "home-hero4": "url('image/village-2.webp')",
            },
        },
    },
    plugins: [],
};
