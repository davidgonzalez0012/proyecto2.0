document.addEventListener("DOMContentLoaded", () => {
    const loader = document.getElementById('loader-wrapper');
    if (loader) {
        window.addEventListener('load', () => {
            setTimeout(() => {
                loader.classList.add('hidden');
            }, 800); // pequeño delay para que se note el efecto
        });
    }

    // Si querés animar cada vez que cambia la página (SPA style)
    const enlaces = document.querySelectorAll('a');
    enlaces.forEach(enlace => {
        enlace.addEventListener('click', e => {
            if (enlace.getAttribute('target') !== '_blank' && !enlace.href.includes('#')) {
                loader.classList.remove('hidden');
            }
        });
    });
});