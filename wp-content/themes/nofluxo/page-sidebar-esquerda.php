<?php

/*
 * Template name:  Sidebar esquerda / Page
 * 
 */


get_header(); ?>


<?php
            echo '<div class="row page-loja pagina">';
            
            echo '<div class="col-sm-3">';
            get_sidebar('esquerda');
            echo '</div> <!-- col-sm-3 -->';



            echo '<div class="col-sm-9">';
             while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
            <?php
            
            
            echo '</div><!-- col-sm-9 -->';
            
            

            echo '</div> <!-- row page-loja pagina -->';
?>





<?php get_footer(); ?>

