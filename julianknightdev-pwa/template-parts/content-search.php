<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julianknightdev-pwa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="w3-panel w3-center">

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			julianknightdev_pwa_posted_on();
			julianknightdev_pwa_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

</div>

	<?php julianknightdev_pwa_post_thumbnail(); ?>

<div class="w3-panel">

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</div>

	<footer class="entry-footer">
		<?php julianknightdev_pwa_design_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

