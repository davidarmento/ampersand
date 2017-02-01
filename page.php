<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
  	        <section id="main">
  	  	        <article id="single">
      		          <?php
                    if(have_posts()) :
                        while(have_posts()) : the_post();
                            ?>
          		              <h1><?php the_title(); ?></h1>
          		              <div class="post">
          		                  <?php the_content(); ?>
          		              </div>
          		              <div class="comentarios">
          		                  <?php comments_template(); ?>
          		              </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
  	  	        </article>
  	        </section>
        </div>
        <div class="col-md-4">
            <?php get_sidebar()?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
