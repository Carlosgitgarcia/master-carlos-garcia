document.getElementById('mensaje.js').innerText = 'Texto cambiado con JavaScript externo';
// función para cambiar un atributo onclick
function cambiarTexto() {
    document.getElementById('texto').innerHTML = 'El texto ha cambiado al hacer clic';
}
function cambiarTextoEvent() {
    document.getElementById('texto-Event').innerHTML = 'El texto ha cambiado con addEventListener';
}

document.getElementById('boton-EventListener').addEventListener('click', cambiarTextoEvent);