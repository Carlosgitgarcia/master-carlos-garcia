<?php 
define('NOMBRE_PAGINA', 'index');
include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/header.php'; ?>
 <title> <?php echo TITLE; ?> </title>

<?php 
$nombre = "Carlos";
echo 'Hola, mi nombre es ' . $nombre;
$tieneMasterSeoTecnico = "en_proceso";
if ($tieneMasterSeoTecnico === 'si') {
    echo ' tengo el título de Máster de SEO Técnico';
} elseif ($tieneMasterSeoTecnico === "en_proceso") {
    echo ' estoy cursando el Máster de SEO Técnico';
} else {
    echo ' no tengo el título de Máster de SEO Técnico,';
}
 /* Ejercicio de switch case con variables */
 $rolUsuario = 'profesor';

switch ($rolUsuario) {
    case 'profesor':
        echo ' Hola profesor';
        break;
    case 'alumno':
        echo 'necesitas mejorar';
        break;
    default:
        echo 'No te concozco';
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/tablasql.php';?>

      <!-- Tengo una duda y es que la navegación no permite visualizar el H1. ¿cómo puedo mostrar el H1 o qué debo tocar en la navegación para que no afecte al contenido? -->
                <section id="content">
                    <h1 style= "color: rgb(149, 0, 255)">Mi primer H1 técnico</h1>
                    <div title="Si quedas el ratón quieto, lo puedes leer">mi primer div técnico</div>
                    <p>Hoy estoy que lo parto, otro primera cosa técnica que no es un div y no es h1</p>
                                        <?php ctas(); ?>
                    <p>quiero un espaciado</p></br>
                    <p>no sabemos si hará el espaciado</p>
                    <?php echo "Hola profesor de SEO técnico";?>
                    <p><span>vamos con el primer span</span></p>
                    <img src="/imagen/estructura-etiquetas-html.png">
                    <div>
                        <div>con una etiqueta div</div> 
                        <span>etiqueta span</span>
                        <span>span con un <div> div dentro de una etiqueta span</div></span>
                    </div>
                    <h2>Esto es un H2</h2>

        <style type="text/css">
            h2 {
                color: yellow;
                background-color: brown;
            }
        </style>
                </section>
<?php 
include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/footer.php';
?>         