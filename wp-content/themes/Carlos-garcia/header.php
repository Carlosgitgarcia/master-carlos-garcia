<!DOCTYPE html>
<html <?php language_attributes();// Saca el lang del idioma configurado en WordPress?>>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();// Saca la ruta hasta el tema;?>/style.css" type="text/css" media="all">
        <?php 
        include "metas-seo.php";
        wp_head();
        ?>
       </head>
        <body>
        <header> 
            <nav>
                    <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/sobre-nosotros/">Sobre nosotros</a></li>
                    </ul>
            </nav>
        </header>