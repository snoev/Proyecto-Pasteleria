// Obtener elementos
const modal = document.getElementById("myModal");
const btn = document.getElementById("openModal");
const span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
    btn.style.display = "none"
}

span.onclick = function() {
    modal.style.display = "none";
    btn.style.display = "block"
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

document.getElementById("login").onsubmit = function(event) {
    event.preventDefault(); 
    modal.style.display = "none"; 
}
