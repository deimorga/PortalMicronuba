module.exports = {
    content: [
        "./index.php",
        "./cotizar.php",
        "./plagie.php",
        "./tools/**/*.php",
        "./release/**/*.php",
        "./*.{html,js}"
    ],
    theme: {
        extend: {
            colors: {
                bgDark: '#0f172a',
                bgCard: '#1e293b',
                accent: '#06b6d4',
                accentHover: '#22d3ee',
                textMain: '#f8fafc',
                textMuted: '#94a3b8',
            },
            fontFamily: {
                display: ['Space Grotesk', 'sans-serif'],
                body: ['Inter', 'sans-serif'],
            },
        },
    },
    plugins: [],
}
