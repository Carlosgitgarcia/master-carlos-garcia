<?php get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">

        <?php
        // Iniciamos el "Loop" de WordPress
        while ( have_posts() ) :
            the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    
                    <div class="entry-meta">
                        Publicado el <?php the_date(); ?> por <?php the_author(); ?>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php 
                    $desc_corta = get_field('descripcion_corta');
                    if ( $desc_corta ) : ?>
                        <div class="descripcion-corta-acf">
                            <?php echo esc_html( $desc_corta ); ?>
                        </div>
                    <?php endif; ?>

                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
                    <p>Categorías: <?php the_category( ', ' ); ?></p>
                </footer>

            </article>

            <nav class="post-navigation">
                <div class="nav-previous"><?php previous_post_link( '%link', '&laquo; Anterior' ); ?></div>
                <div class="nav-next"><?php next_post_link( '%link', 'Siguiente &raquo;' ); ?></div>
            </nav>

            <?php
            // Si quieres permitir comentarios, descomenta la línea de abajo:
            // comments_template();

        endwhile; // Fin del Loop
        ?>

    </div>
</main>

<?php get_footer(); ?>