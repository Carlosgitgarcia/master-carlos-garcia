<?php
/* LLamada a la cabecera*/
include "header.php";?>

<div class="generico">

        <h1><?php the_title();?></h1>
        <section id="contenido">
          <?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$latest_posts_query = new WP_Query($args);

if ($latest_posts_query->have_posts()) :
    // Contenedor principal centrado
    echo '<div class="recent-posts-container">';
    
    while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post(); ?>
        
        <article class="post-card" id="post-<?php the_ID(); ?>">
            <div class="post-card-content">
                <footer class="post-card-footer">
                    <h3 class="post-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                </footer>
            </div>
        </article>

    <?php endwhile;
    
    echo '</div>';
    wp_reset_postdata();

else :
    echo '<p style="text-align:center;">No se encontraron posts recientes.</p>';
endif;
?>
        <?php
        echo the_content();
        ?>
        </section>
</div>
<?php
/* LLamada al footer*/
include "footer.php";?>


