<?php 
define('NOMBRE_PAGINA', '/repaso');
include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/header.php';

$bonito = 'Pero que bonito es saber código.';
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
