module.exports = {
    // Todas las páginas de la raíz: si una página no está aquí, sus clases
    // exclusivas no se compilan y se ve rota en producción (pasó con appits.php).
    content: [
        "./*.php",
        "./tools/**/*.php"
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
