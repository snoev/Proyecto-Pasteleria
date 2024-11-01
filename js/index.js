window.addEventListener("scroll", function () {
	let Header = document.querySelector("nav");
	Header.classList.toggle("Sticky", window.scrollY > 90);
});

const navbarr = document.getElementById("nav-pastel");

const displei = document.getElementById("displei");

var navmobile = document.querySelector(".nav-mobile");
var menu = document.querySelector(".nav");
var opmenu = document.querySelectorAll(".menu-option");
var body= document.querySelector("body");

navmobile.addEventListener("click", function () {
	menu.classList.toggle("hamburguesa");
	navmobile.classList.toggle("nav-mobile-cerrar");
	if (menu.classList.contains("hamburguesa")) {
		body.style.overflow = "hidden";
		navmobile.setAttribute("name","close");
		
	} else {
		body.style.overflow = "auto";
		navmobile.setAttribute("name","grid-outline");
	}
});


//CERRAR HAMBURGUESA POR CADA BOTON QUE SE PRESIONE ------------------------------------------------------------------
let botonesHamburguesa = document.querySelectorAll('.botones');

botonesHamburguesa.forEach((botonHamburguesa) => {
	botonHamburguesa.addEventListener('click', () => {
		if(menu.classList.contains('hamburguesa')){
			menu.classList.toggle('hamburguesa');
			navmobile.classList.toggle("nav-mobile-cerrar");
			navmobile.setAttribute("name","grid-outline");
			body.style.overflow = "auto";
		}
	});
});
//Pop-up del login ---------------------------------------------------------------------------------------------------
let modal = document.querySelectorAll(".backdrop");
let cerrar = document.getElementById("close");
let login = document.getElementById("login-boton");

login.addEventListener("click", function () {
	modal[0].style.visibility = "visible";
});

cerrar.addEventListener("click", function () {
	modal[0].style.visibility = "hidden";
});
//Carrouzel de fotos ------------------------------------------------------------------------------------------------

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