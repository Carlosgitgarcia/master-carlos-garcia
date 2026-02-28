<?php
/* LLamada a la cabecera*/
include "header.php";?>

<div class="generico">

        <h1><?php the_title();?></h1>
        <section id="contenido">
        <?php
        echo the_content();
        ?>
        </section>
</div>
<?php
/* LLamada al footer*/
include "footer.php";?>