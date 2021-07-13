<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package julianknightdev-pwa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

        <link rel="manifest" href="manifest.json">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96610233-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96610233-1');
</script>

<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
<!-- The Default Values -->
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="419000492633690" />
<meta property="fb:admins" content="10215703127147388" />
<?php if (is_single()) { ?>
<!-- Only For Content Pages -->
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<?php } else { ?>
<!-- For All Pages Expect Content Page -->
<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:image" content="https://www.julianknight.dev/wp-content/themes/julianknightdev-pwa/images/Profile_overhead_circle.png" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php } ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

   <div id="page" class="site">  
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'w3-material-design' ); ?></a>

   <header class="julianknightdev-deep-blue w3-top w3-card" id="header">

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large" style="height:50px;">Close <span class="material-icons" style="vertical-align:text-bottom;">
close
</span></button>
  <?php
			wp_nav_menu( array(
                                'container_class' => 'w3-bar-block',
                                'add_li_class' =>   'w3-bar-item',
				'theme_location' => 'menu-2',
				'menu_id'        => 'mobile-menu',
			) );
			?>
</div>

<div class=" w3-cell-row w3-container">

<div class="w3-cell w3-cell-middle nav-container-outside w3-hide-large" id="navmenu">

<button id="navbtn" class="w3-hide-large" onclick="w3_open()"><i class="material-icons">menu</i></button>

</div>

<div class="w3-cell w3-cell-middle nav-container-outside w3-hide-small w3-hide-medium" id="navmenu">
			<a href="/"><span class="material-icons md-36">home</span></a>	
</div>
 
     <div class="w3-cell w3-cell-middle w3-center w3-hide-small nav-container-inside">
     <div id="navname"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
     </div>

     <div class="w3-cell w3-right nav-container-outside">
     <?php 
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $image[0]; ?>" id="navimage" class="w3-circle" alt=""></a>	
      </div>

</div>

    </header>

<div class="content-wrapper"> 
