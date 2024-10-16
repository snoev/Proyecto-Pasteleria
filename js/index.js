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


//Pop-up del login ---------------------------------------------------------------------------------------------------
let login = document.querySelectorAll('#login');



//CERRAR HAMBURGUESA POR CADA BOTON QUE SE PRESIONE ------------------------------------------------------------------
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


// Valida la entrada de texto en tiempo real. ------------------------------------------------------------------------
let textointro = document.querySelectorAll('.texto-rest');
let numerointro = document.querySelectorAll('.numero-rest');
let correointro = document.querySelectorAll('.correo-rest');

for (var i = 0; i < textointro.length; i++) {
    textointro[i].addEventListener('input', validartexto);
}
for (var i = 0; i < numerointro.length; i++) {
    numerointro[i].addEventListener('input', validarnumero);
}
for (var i = 0; i < correointro.length; i++) {
    correointro[i].addEventListener('input', validarcorreo);
}

// Función para validar y corregir el texto introducido
function validartexto() {
    for (var i = 0; i < textointro.length; i++) {
		var valortexto = textointro[i].value;
		var textolimpio = valortexto.replace(/[^a-zA-ZñÑáéíóúÁÉÍÓÚ\s]/g, ''); // Elimina caracteres no permitidos.
		textointro[i].value = textolimpio;
    }
}
function validarnumero() {
    for (var i = 0; i < numerointro.length; i++) {
        var valornumero = numerointro[i].value;
        var numerolimpio = valornumero.replace(/[^0-9]/g, ''); // Elimina caracteres no permitidos.
        numerointro[i].value = numerolimpio;
    }
}
function validarcorreo() {
    for (var i = 0; i < correointro.length; i++) {
        var valorcorreo = correointro[i].value;
        var correolimpio = valorcorreo.replace(/[^0-9a-zA-ZñÑáéíóúÁÉÍÓÚ@., _ -]/g, ''); // Elimina caracteres no permitidos.
        correointro[i].value = correolimpio;
    }
}

