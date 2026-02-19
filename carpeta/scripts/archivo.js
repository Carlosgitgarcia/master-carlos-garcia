document.getElementById('mensaje.js').innerText = 'Texto cambiado con JavaScript externo';
// función para cambiar un atributo onclick
function cambiarTexto() {
    document.getElementById('texto').innerHTML = 'El texto ha cambiado al hacer clic';
}
function cambiarTextoEvent() {
    document.getElementById('texto-Event').innerHTML = 'El texto ha cambiado con addEventListener';
}

document.getElementById('boton-EventListener').addEventListener('click', cambiarTextoEvent);
//redirecciones por js 

// window.location.href = "https://carlos.sanchezdonate.com/articulo/redireccion-301-desde-sitebuilders/";

// La redirección funciona correctamente
// Pero te agradecería para la próxima vez no ponerla en la página donde has hecho los ejercicios 
// porque tengo que comentarla para corregirlos 🤣🤣