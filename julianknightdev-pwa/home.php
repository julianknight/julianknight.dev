<?php
/**
 * The home page template file
 *
 * Overides the index.php file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julianknightdev-pwa
 */

get_header();
?>

<div class="w3-container">

		<?php if ( have_posts() ) : ?>

                   <?php $i = 0; ?>

			<?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            if($i == 0) {
	                    echo '<div class="w3-row-padding w3-stretch">';
                            }
                            ?>
		 
                <div class="w3-third">

                <div class="w3-card-4 w3-white">				
                                                
		<?php
                if(has_post_thumbnail()) {
                    the_post_thumbnail();
                } else {
                    echo '<img src="'.get_bloginfo("template_url").'/images/img-default.png" />';
                }
                ?>

                <div class="w3-panel w3-center">
            
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
                                               
		</div>

                </div>
                   
                </div>

                            <?php
                            $i++;
                            if($i == 3) {
	                    $i = 0;
	                    echo '</div>';
                            }
                            ?>

					<?php endwhile; ?>

                            <?php
                            if($i > 0) {
	                    echo '</div>';
                            }
                            ?>

			<?php the_posts_pagination(); ?>
				
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

</div>

<?php
get_sidebar();
get_footer();
