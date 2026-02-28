<?php
/* Template Name: template prueba*/
get_header();?>

<div class="generico">Template de Wordpress</div>

        <h1><?php the_title();?></h1>
        <section id="contenido">
        <?php
        echo the_content();
        ?>
        </section>
</div>
<?php
/* LLamada al footer*/
get_footer();?>