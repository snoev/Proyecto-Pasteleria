const slider = document.querySelector('.slider');
let isScrolling = true;

// Función de scroll automático
function autoScroll() {
    if (isScrolling) {
        slider.scrollBy({
            left: slider.offsetWidth,
            behavior: 'smooth'
        });
    }
}

setInterval(autoScroll, 3000); // Cambia 3000 por la cantidad de milisegundos entre cada desplazamiento

slider.addEventListener('mouseenter', () => {
    isScrolling = false; // Pausar el auto scroll al pasar el ratón sobre el slider
});

slider.addEventListener('mouseleave', () => {
    isScrolling = true; // Reanudar el auto scroll cuando el ratón se vaya
});

// Función para hacer scroll horizontal con la rueda del mouse
slider.addEventListener('wheel', (event) => {
    event.preventDefault(); // Prevenir el desplazamiento vertical por defecto
    slider.scrollBy({
        left: event.deltaY < 0 ? -100 : 100, // Si la rueda va hacia arriba, scroll a la izquierda, si va hacia abajo, a la derecha
        behavior: 'smooth'
    });
});
