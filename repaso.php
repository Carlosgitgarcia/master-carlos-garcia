<?php 
define('NOMBRE_PAGINA', '/repaso');
include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/header.php';

$bonito = 'Pero que bonito es saber código.';
?>

<?php
/**
 * EJERCICIO DE CLOAKING
 */

// 1. Obtenemos el User-Agent del visitante
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// 2. Definimos quién es nuestro objetivo (usamos minúsculas para comparar mejor)
$bot_name = "googlebot";

// 3. Verificamos la condición
// IMPORTANTE: Añadimos la llave { después del if
if(strstr(strtolower($user_agent), $bot_name)) {

    // --- CONTENIDO SOLO PARA GOOGLE ---
    echo "<html>";
    echo "<head><title>Página Optimizada para SEO</title></head>";
    echo "<body>";
    echo "<h1>Expertos en Programación y SEO Avanzado</h1>";
    echo "<p>Este contenido está lleno de palabras clave que solo el motor de búsqueda leerá. 
          Aquí podemos poner descripciones y semántica relevante para posicionar.</p>";
    echo "</body>";
    echo "</html>";

} else {
    
    // --- CONTENIDO PARA EL USUARIO ---
    echo "<html>";
    echo "<head><title>Bienvenidos a mi Web</title></head>";
    echo "<body>";
    echo "<h1>¡Hola, bienvenido!</h1>";
    echo "<p>Disfruta de nuestra galería de imágenes y diseño minimalista.</p>";
    echo "</body>";
    echo "</html>";
}
?>

<link rel="stylesheet" href="/carpeta/css/repaso.css?version=01">

<section class="intro coverweb">
    <div>
        <h1>Probando y copiando el repaso del css y JS</h1>
        <p>
            A ver cómo me ha quedado. Aprender código duele mucho.
            <span id="dolor">
                A veces creo que soy un Indio, pero no, soy yo aprendiendo código
            </span>
        </p>
    </div>
</section>

<script>
    document.getElementById("dolor").innerText = "<?php echo $bonito; ?>";
</script>

<?php 
include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/footer.php';
?>
