<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section id="main">
                    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="thumbnail">
                            <?php
                              if ( has_post_thumbnail() ) {
                                  the_post_thumbnail();
                              }
                            ?>
                        </div>
                        <?php the_excerpt(); ?>

                    <?php endwhile; else: ?>
                        <p><?php _e('No hay entradas .'); ?></p>
                    <?php endif; ?>
                </section> <!-- Fin de main -->
            </div>
            <div class="col-md-4">
                <?php  get_sidebar()?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
