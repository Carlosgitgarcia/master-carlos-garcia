<!DOCTYPE html>
<html lang="es">
        <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/carpeta/css/style.css?version=01">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php define("TITLE", 'Mi primera web técnica'); ?>
    </head>
        <body>
        <header> 
            <nav>
                    <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/quienes-somos">Quienes somos</a></li>
                            <li><a href="/a-donde-vamos">A dónde vamos</a></li>
                            <li><a href="/carpeta/es-donde-queremos-ir">Es a dónde queremos ir</a></li>
                            <li><a href="https://seoloquesea.com/" target="_blank">Para saberlo aquí</a></li>
                            <li><a href ="/carpeta/carpeta-archivo">Medidas</a></li>
                            <li><a href ="/repaso">Repaso</a></li>

                    </ul>
            </nav>
            <?php

            include_once $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/functions.php';

switch (constant('NOMBRE_PAGINA')) {

    case 'index':
        // En inicio no se muestran breadcrumbs
        echo '<nav class="breadcrumb">
                <span>Inicio</span>
              </nav>';
        break;

    case 'quienes-somos':
        echo '<nav class="breadcrumb">
                <a href="/">Inicio</a> &gt;
                <span>Quienes somos</span>
              </nav>';
        break;

    case 'a-donde-vamos':
         echo '<nav class="breadcrumb">
                <a href="/">Inicio</a> &gt;
                <span>a dónde vamos</span>
              </nav>';
        break;

    case 'es-a-donde-queremos-ir':
        echo '<nav class="breadcrumb">
                <a href="/">Inicio</a> &gt;
                <span>A donde vamos</span>
              </nav>';
        break;

    default:
        echo '<!-- No se muestran breadcrumbs en este caso del switch case -->';
        break;
}
comprobar_pagina();
?>
        </header>