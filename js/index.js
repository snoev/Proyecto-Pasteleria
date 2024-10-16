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

//CERRAR HAMBURGUESA POR CADA BOTON QUE SE PRESIONE
let botonesHamburguesa = document.querySelectorAll('.logo-link');

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