<?php /* Template Name: Front-Page */ ?>

<?php /* 
This page is used to display the static frontpage. 
*/
 
// Fetch theme header template
get_header(); ?>

<div class="w3-container responsive-top-pages">

<div class="w3-container w3-hide-medium w3-hide-large">

	<header class="site-header">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
			<div class="w3-hide-large" id="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>	
				<?php else : ?>
			<div class="w3-hide-large" id="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>	
				<?php
			endif;
			$julianknightdev_pwa_description = get_bloginfo( 'description', 'display' );
			if ( $julianknightdev_pwa_description || is_customize_preview() ) :
				?>
				<?php echo $julianknightdev_pwa_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	
</div> 

<div class="w3-hide-small w3-hide-medium">

<?php
			wp_nav_menu( array(
                                'container_class' => 'w3-bar w3-light-grey',
                                'add_li_class' => 'w3-bar-item w3-button',
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>

</div>

<div class="w3-row-padding w3-stretch">

<div class="w3-third w3-margin-top">

<?php
 $cat=36;
 $yourcat = get_category($cat);
 if ($yourcat) 
 $category_link = get_category_link( $yourcat );
 $category_name = $yourcat->cat_name;
?>

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link ); ?>" title=”<?php echo $category_name ?>”  >
<div class="w3-button w3-block w3-black w3-round-xxlarge">
<h3><?php echo $category_name ?></h3>
</div>
</a>

</div>

<div class="w3-third w3-margin-top">

<?php
 $cat=37;
 $yourcat = get_category($cat);
 if ($yourcat) 
 $category_link = get_category_link( $yourcat );
 $category_name = $yourcat->cat_name;
?>

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link ); ?>" title=”<?php echo $category_name ?>”  >
<div class="w3-button w3-block w3-black w3-round-xxlarge">
<h3><?php echo $category_name ?></h3>
</div>
</a>
</div>

<div class="w3-third w3-margin-top">

<?php
 $cat=38;
 $yourcat = get_category($cat);
 if ($yourcat) 
 $category_link = get_category_link( $yourcat );
 $category_name = $yourcat->cat_name;
?>

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link ); ?>" title=”<?php echo $category_name ?>”  >
<div class="w3-button w3-block w3-black w3-round-xxlarge">
<h3><?php echo $category_name ?></h3>
</div>
</a>

</div>

</div>

</div>

<div class="w3-container">

		<?php if ( have_posts() ) : ?>

                   <?php $i = 0; ?>

			<?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            if($i == 0) {
	                    echo '<div class="w3-row-padding w3-stretch">';
                            }
                            ?>
		 
                <div class="w3-col l3 m6 w3-margin-top">

                <div class="w3-card-4 w3-white">

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

			<?php the_posts_pagination(); ?>
				
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

</div>
    
<?php get_footer(); ?>