
    let currentIndex = 0;
    
    // Obtener todos los elementos del carrusel
    const slides = document.querySelectorAll('.carrusel-item');
    const totalSlides = slides.length;
    const itemsToShow = 3;  // Número de imágenes que se deben mostrar al mismo tiempo (ajustable)

    // Calcular el número total de "grupos" de imágenes
    const totalGroups = Math.ceil(totalSlides / itemsToShow);

    function moveSlide(step) {
        currentIndex += step;
        
        // Evitar que se salga del rango
        if (currentIndex < 0) {
            currentIndex = totalGroups - 1;
        } else if (currentIndex >= totalGroups) {
            currentIndex = 0;
        }

        // Desplazar el carrusel
        const offset = -(currentIndex * itemsToShow * (slides[0].offsetWidth + 20)); // 20 es el margen entre los items
        document.querySelector('.carrusel-images').style.transform = `translateX(${offset}px)`;
    }

    // Opcional: Automáticamente cambiar la imagen cada 5 segundos
    setInterval(() => {
        moveSlide(1);
    }, 5000);  // Cambia cada 5 segundos

