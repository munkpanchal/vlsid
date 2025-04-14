/* eslint-disable */
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./templates/**/*.php", "./header.php", "./footer.php",],
    theme: {
        extend: {
            colors: {
                primary:"var(--color-primary)",
                secondary:"var(--color-secondary)",

                font: 'var(--color-font)',
                error: 'var(--color-error)',
            },
            fontFamily: {
                title: ['var(--font-title)', 'sans-serif'],
                text: ['var(--font-text)', 'sans-serif'],
            },
            container: {
                center: true,
                padding: {
                    DEFAULT: '0.75rem',
                    sm: "2rem",
                    lg: "4rem",
                    xl: "5rem",
                    "2xl": "6rem",
                },
            },
        },
    },
    plugins: [],
};
