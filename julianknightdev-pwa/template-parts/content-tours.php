<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julianknightdev-pwa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				w3_material_design_posted_on();
				w3_material_design_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

<div class="w3-row">
 <div class="w3-col s12">

<?php if( is_singular() && get_field('slider') != "") { ?>

<?php  //add me in

//Fields
//slider_portfolio = Gallery Field

$images = get_field('slider');
if( $images ): ?>

   <div class="slider-for">
            <?php foreach( $images as $image ): ?>
                <div class="slick-container">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
               </div>
            <?php endforeach; ?>
    </div>

   <div class="slider-nav">
            <?php foreach( $images as $image ): ?>
                <div>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />                
                </div>
            <?php endforeach; ?>
    </div>

<?php endif; ?>

   <?php } ?>

</div> 
</div> 

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'w3-material-design' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'w3-material-design' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

<?php
// check if the repeater field has rows of data
if( have_rows('accordion_repeater') ):

 	// loop through the rows of data for the tab header
    while ( have_rows('accordion_repeater') ) : the_row();

		$header = get_sub_field('accordion_header');
		$content = get_sub_field('accordion_content');
		$image = get_sub_field('accordian_image');

	?>

<div class="w3-row">
 <div class="w3-col s12">

     <button class="accordion"><?php echo $header; ?></button>
     
     <div class="panel">
     
     <div class="w3-row">
   <div class="w3-half">

		  <p><?php echo $content; ?></p>
		  </div>
		  <div class="w3-half">
		  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>   
      </div> 
      
      </div> 

 </div> 
</div> 
		
		<?php

	endwhile; //End the loop 

      else :

    // no rows found

    echo 'Come back tomorrow';

    endif;
   ?>

<?php if( is_singular() && get_field('map-embed') != "") { ?>
    <div class="w3-row">
       <div class="w3-col s12">
          
         <?php the_field('map-embed'); ?>
 
      </div> 
    </div>
 
   <?php } ?> 

	<footer class="entry-footer">
		<?php w3_material_design_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
