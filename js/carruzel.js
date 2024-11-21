const autoScrollInterval = setInterval(autoScroll, 3000); // Cambia 3000 por la cantidad de milisegundos entre desplazamientos

// Pausar el auto-scroll al pasar el ratón sobre el slider
slider.addEventListener('mouseenter', () => {
    isScrolling = false;
});

slider.addEventListener('mouseleave', () => {
    // Reanudar el auto-scroll si no estamos en el último slide
    if (slider.scrollLeft + slider.offsetWidth < slider.scrollWidth) {
        isScrolling = true;
    }
});

// Función para navegar entre slides con los botones de navegación
navLinks.forEach((link, index) => {
    link.addEventListener('click', (e) => {
        e.preventDefault(); // Evitar comportamiento predeterminado del anclaje
        isScrolling = false; // Pausar auto-scroll temporalmente
        const slide = document.getElementById(`slide-${index + 1}`);
        slide.scrollIntoView({ behavior: 'smooth' }); // Navegar al slide correspondiente

        // Reanudar el auto-scroll después de un tiempo, solo si no estamos en el último slide
        setTimeout(() => {
            if (slider.scrollLeft + slider.offsetWidth < slider.scrollWidth) {
                isScrolling = true;
            }
        }, 4000); // Pausa de 4 segundos
    });
});

// Función para hacer scroll horizontal con la rueda del ratón
slider.addEventListener('wheel', (event) => {
    event.preventDefault(); // Prevenir el desplazamiento vertical por defecto
    slider.scrollBy({
        left: event.deltaY < 0 ? -slider.offsetWidth : slider.offsetWidth, // Desplazar por el ancho del contenedor
        behavior: 'smooth',
    });
    // Pausar el auto-scroll temporalmente si el usuario usa la rueda del ratón
    isScrolling = false;
    setTimeout(() => {
        if (slider.scrollLeft + slider.offsetWidth < slider.scrollWidth) {
            isScrolling = true;
        }
    }, 4000); // Reanudar después de 4 segundos
});
