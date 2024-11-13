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