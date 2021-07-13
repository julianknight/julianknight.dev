<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julianknightdev-pwa
 */

?>

<div class="content-width">
	

<div class="w3-row">
  <div class="w3-container w3-twothird">

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
				julianknightdev_pwa_posted_on();
				julianknightdev_pwa_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

<?php  //add me in

//Fields

//slider_portfolio = Gallery Field

$images = get_field('slider_portfolio');

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

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'julianknightdev-pwa' ),
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
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'julianknightdev-pwa' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</div>

  <div class="w3-third">

<div class="w3-container w3-padding-16">
    <?php julianknightdev_pwa_post_thumbnail(); ?>
</div>

<div class="w3-container w3-third">
        <?php get_sidebar(); ?>
  </div>

</div>

	<footer class="entry-footer">
		<?php julianknightdev_pwa_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

</div>

