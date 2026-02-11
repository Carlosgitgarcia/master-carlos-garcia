<?php 
define('NOMBRE_PAGINA', 'a-donde-vamos');

include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/header.php';
?>
        <section>
        <h1>A dónde vamos</h1>
        </section>
        <section id="content">
        <!-- el div ocupa un espacio físico-->
         <p id="mensaje.js">Mensaje javascript</p>
         <p id="firstjs">El primer JS con onclick</p>
         <button type="button"
         onclick='document.getElementById("firstjs").innerHTML= "ha funcionado, maldita mayúsculas" + ejemplo'>Botón JS</button>
         <p id="texto">Texto original</p>
         <button onclick="cambiarTexto()">Haz clic</button>
         <p id="texto-Event">Texto original</p>
        <button id="boton-EventListener">Haz clic</button>
        <noscript>
        <p style="color: red; font-weight: bold;">
                Activa JavaScript para usar todas las funciones de la web.</p>
        </noscript>
        <p class="texto-js">Texto original para modificar por clases</p>
        <p>lorem ipsum</p>
        <p data-aviso="importante">Mensaje con atributo</p>
        <p class="mensaje-clase">Mensaje con clase</p>
        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pulvinar a metus a commodo. Quisque viverra condimentum ex at mollis. Donec varius sodales magna, id congue orci rhoncus vel. Donec ac tortor mauris. Suspendisse eu dictum nisl. Sed eget arcu bibendum, interdum diam in, eleifend lacus. In varius tellus orci, elementum lobortis ex auctor luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed risus eros, hendrerit eu mattis non, tempus sit amet lorem. Donec purus elit, sollicitudin sed malesuada sed, condimentum et leo. Etiam feugiat vel odio nec sagittis. In hac habitasse platea dictumst. Donec dapibus quam at turpis ultricies, sed porttitor turpis iaculis.</div>
        <picture> 
        <source type="image/avif" srcset="/imagen/html5-cheatsheet.avif">
        <img src="/imagen/html5-cheatsheet.png">
        </picture>
        <div id="imagenfalsa"></div>
        
<script>
        // Muchas clases.
        const activador = document.getElementsByClassName("efectito");
        //activador[0].addEventListener("click", funcioncarlos);function funcioncarlos(){
        const collection = document.getElementsByClassName("pruebaclassjs");
        for (let i = 0; i < collection.length; i++) {
        collection[i].classList.add("redjs");
        }
        activador[0].setAttribute("onclick", "funcionNumero2()");
        }function funcionNumero2(){
        const ejemplazo = document.getElementsByClassName("pruebaclassjs");
        for (let i = 0; i < ejemplazo.length; i++) {
        ejemplazo[i].classList.remove("redjs");
        }
        activador[0].setAttribute("onclick", "funcioncarlos()");
        }
        let puntos = 75;
        let medalla 
        if (puntos > 100) {
        medalla = "Oro";
        } 
        else if (puntos >= 50) {
        medalla = "Plata";
        } 
        else {
        medalla = "Bronce";
        }
        console.log("Tu puntuación es de " + puntos + ". ¡Has ganado la medalla de " + medalla + "!");

// Variable switch
let color = "Verde"; 
let accion;
switch (color) {
    case "Rojo":
        accion = "¡Detente! No puedes pasar.";
        break;
    
    case "Amarillo":
        accion = "Precaución: Prepárate para detenerte o termina de pasar.";
        break;
    
    case "Verde":
        accion = "¡Adelante! Puedes continuar.";
        break;

    default:
        accion = "Error: El color del semáforo no es válido.";
}
console.log("Semáforo en " + color + ": " + accion);
</script>
        </section> 
         <?php 
include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/footer.php';
?>    
<script src="/carpeta/scripts/archivo.js"></script>
<script>
        //definir variables y constantes.
        let ejemplo = ' + variable let';
        var testeo = ' + uso de variable';
        const loquesea = ' + constante';
        document.getElementsByClassName('texto-js')[0].innerHTML = 'Texto cambiado por clases';
        document.getElementsByTagName('p')[3].innerHTML = 'Este es el primer contenido cambiado por js ' + testeo + loquesea;
        // Selector por ATRIBUTO
        document.querySelector('[data-aviso]').innerHTML = 'Texto cambiado usando un atributo';
        // Selector por CLASE
        document.querySelector('.mensaje-clase').innerHTML = 'Texto cambiado usando una clase';
</script>