document.addEventListener('DOMContentLoaded', () => {
    console.log('Página cargada correctamente');
});

// Añade este script en tu archivo JavaScript principal o en una etiqueta `<script>` al final de tu HTML
document.querySelectorAll('.cta-button').forEach(button => {
    button.addEventListener('click', () => {
        const ctaBox = button.nextElementSibling;
        if (ctaBox.style.display === 'block') {
            ctaBox.style.display = 'none';
        } else {
            ctaBox.style.display = 'block';
        }
    });
});
