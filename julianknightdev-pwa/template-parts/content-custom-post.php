<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julianknightdev-pwa
 */

?>

<div class="w3-row">
  <div class="w3-container w3-col l8">

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

  <div class="w3-col l4">

<div class="w3-container w3-padding-16">
    <?php julianknightdev_pwa_post_thumbnail(); ?>
</div>

<div class="w3-container w3-third">
        <?php get_sidebar(); ?>
  </div>

</div>

</div>

	<footer class="entry-footer">
		<?php julianknightdev_pwa_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->



