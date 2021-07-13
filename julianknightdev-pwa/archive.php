<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julianknightdev-pwa
 */

get_header();
?>

<div class="w3-container responsive-top-pages">

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			
			<?php $i = 0; ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php
                    if($i == 0) {
	                echo '<div class="w3-row-padding w3-stretch">';
                    }
                    ?>
			
			    	<div class="w3-col l3 m6 w3-margin-top">

			<div class="w3-card-2 w3-white card-image">

                <!--  Image start  -->
                <div class="card-image-wrapper">				
                                                
		<?php
                if(has_post_thumbnail()) {
                    the_post_thumbnail();
                } else {
                    echo '<img src="'.get_bloginfo("template_url").'/images/img-default.png" />';
                }
                ?>

                 </div>
                 <!--  Image end  -->

                <div class="w3-panel w3-center">
            
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
                                               
		</div>

                </div>

			</div>
					
					 <?php
                                          $i++;
                                          if($i == 4) {
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
					<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->

</div>

<?php
get_footer();
