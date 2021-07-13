<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package julianknightdev-pwa
 */

?>

</div><!-- content-wrapper -->

<footer class="w3-container julianknightdev-blue julianknightdev-text-green w3-hide-small w3-hide-medium" id="footernav">

<div class="w3-row">

  <div class="w3-col w3-padding-16 w3-mobile" style="width:20%">
Social
<ul>
  <li><a href="https://www.linkedin.com/in/julianknightdev/" target="_blank">LinkedIn</a></li>
  <li><a href="https://twitter.com/julianknightdev" target="_blank">Twitter</a></li>
  <li><a href="https://www.facebook.com/julianknightdev" target="_blank">Facebook</a></li>
  <li><a href="https://www.instagram.com/craftbeercycling/" target="_blank">Instagram</a></li>
</ul>
</div>

<div class="w3-col w3-padding-16 w3-mobile" style="width:20%">
<?php 

$args = array(  
        'post_type' => array( 'post', 'custom-post'),
        'post_status' => 'publish',
        'posts_per_page' => 4, 
        'cat' => 36,
    );
$catquery = new WP_Query( $args ); ?>

<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

<?php
foreach((get_the_category()) as $category) {
  $catname =$category->cat_name;
  echo $catname;
}
?>

<ul>
 
<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile;
    wp_reset_postdata();
?>
</div>

<div class="w3-col w3-padding-16 w3-mobile" style="width:20%">
<?php 

$args = array(  
        'post_type' => array( 'post', 'custom-post'),
        'post_status' => 'publish',
        'posts_per_page' => 4, 
        'cat' => 37,
    );
$catquery = new WP_Query( $args ); ?>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

<?php
foreach((get_the_category()) as $category) {
  $catname =$category->cat_name;
  echo $catname;
}
?>

<ul>
 
<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile;
    wp_reset_postdata();
?>
</div>

<div class="w3-col w3-padding-16 w3-mobile" style="width:20%">
<?php 
$args = array(  
        'post_type' => array( 'post', 'custom-post'),
        'post_status' => 'publish',
        'posts_per_page' => 4, 
        'cat' => 38,
    );
$catquery = new WP_Query( $args ); ?>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

<?php
foreach((get_the_category()) as $category) {
  $catname =$category->cat_name;
  echo $catname;
}
?>

<ul>
 
<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile;
    wp_reset_postdata();
?>
</div>

<div class="w3-col w3-padding-16 w3-mobile" style="width:20%">
Links
<ul>
  <li><a href="/about-me/">About Me</a></li>
  <li><a href="/about-this-site/">About This Site</a></li>
  <li><a href="/contact-me/">Contact Me</a></li>
</ul>
</div>

</div>

<div class="w3-row">

  <div class="w3-col 12 w3-padding-16 w3-center">

	<div id="colophon" class="site-footer">
		<div class="site-info">
&copy; <?PHP echo date("Y"); ?> - Julian Knight
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'julianknightdev-pwa' ), 'julianknightdev-pwa', '<a href=https://www.julianknight.dev/>julianknight.dev</a>' );
				?>
		</div><!-- .site-info -->
	</div><!-- #colophon -->

</div>

</div>

</footer>

<div class="w3-row julianknightdev-blue w3-bottom w3-hide-large" id="mobile-footer">
 <div class="w3-col s4 w3-center w3-padding-small"><a href="/category/coding/" target="_self"><span class="material-icons md-36">code</span></a></div>
  <div class="w3-col s4 w3-center w3-padding-small"><a href="/walking-tours" target="_self"><span class="material-icons md-36">pedal_bike</span></a></div>
  <div class="w3-col s4 w3-center w3-padding-small"><a href="/picnic-spots/" target="_self"><span class="material-icons md-36">self_improvement</span></a></div>
  </div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
