document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.slider');
    const navLinks = document.querySelectorAll('.slider-nav a');
    let isScrolling = true;

    // Verifica que el slider y los enlaces existan
    if (!slider || navLinks.length === 0) {
        console.error('El slider o los enlaces de navegación no se encontraron.');
        return;
    }

    // Función de scroll automático
    function autoScroll() {
        if (isScrolling) {
            const nextScrollLeft = slider.scrollLeft + slider.offsetWidth;
            const maxScrollLeft = slider.scrollWidth - slider.offsetWidth;

            // Reiniciar el scroll al llegar al final
            if (nextScrollLeft >= maxScrollLeft) {
                slider.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                slider.scrollBy({ left: slider.offsetWidth, behavior: 'smooth' });
            }
        }
    }

    setInterval(autoScroll, 3000);

    // Pausar el auto-scroll al pasar el ratón
    slider.addEventListener('mouseenter', () => (isScrolling = false));
    slider.addEventListener('mouseleave', () => (isScrolling = true));

    // Navegación manual
    navLinks.forEach((link, index) => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            isScrolling = false;
            const slide = document.getElementById(`slide-${index + 1}`);
            slide?.scrollIntoView({ behavior: 'smooth' });
            setTimeout(() => (isScrolling = true), 4000);
        });
    });

    // Scroll con la rueda del ratón
    slider.addEventListener('wheel', (event) => {
        event.preventDefault();
        slider.scrollBy({
            left: event.deltaY < 0 ? -slider.offsetWidth : slider.offsetWidth,
            behavior: 'smooth',
        });
    });
});
