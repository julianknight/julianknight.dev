<?php
/**
 * w3-material-design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package julianknightdev-pwa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'julianknightdev_pwa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function julianknightdev_pwa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on w3-material-design, use a find and replace
		 * to change 'w3-material-design' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'julianknightdev-pwa', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'julianknightdev-pwa' ),
                                'menu-2' => __( 'Mobile', 'julianknightdev-pwa' ),

			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'w3_material_design_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'julianknightdev_pwa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function julianknightdev_pwa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'julianknightdev_pwa_content_width', 640 );
}
add_action( 'after_setup_theme', 'julianknightdev_pwa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function julianknightdev_pwa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jkw3-material-design' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'w3-material-design' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'julianknightdev_pwa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function julianknightdev_pwa_scripts() {
	wp_enqueue_style( 'julianknightdev-pwa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'julianknightdev-pwa-style', 'rtl', 'replace' );

	wp_enqueue_script( 'sidebar-navigation', get_template_directory_uri() . '/js/sidebar-navigation.js', array(), _S_VERSION, true );
        
        wp_enqueue_script( 'slidebar-navigation', get_template_directory_uri() . '/js/slidebar-navigation.js', array(), _S_VERSION, true );

        wp_enqueue_script( 'accordian', get_template_directory_uri() . '/js/accordian.js', array(), '20151215', true );

        wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/child/style.css' );
	
	wp_enqueue_style( 'material-design-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', '1.0', false ); 

        wp_enqueue_style( 'google-fonts-Saira-Stencil-One', 'https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap', '1.0', false ); 

        wp_enqueue_style( 'google-fonts-Lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap', '1.0', false ); 

        wp_enqueue_style( 'google-fonts-Roboto-Mono', 'https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap', '1.0', false ); 

        wp_enqueue_style( 'W3-responsive-style', get_stylesheet_directory_uri() . '/child/W3-Responsive-Grid.css' );

        wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/slick-master/slick/slick.js', '1.6.0', true );

        wp_enqueue_script( 'slick-min-js', get_template_directory_uri() . '/slick-master/slick/slick.min.js', '1.6.0', true );

        wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick-master/slick/slick.css', array(), '1.6.0', true );

        wp_enqueue_style( 'slick-master-css', get_stylesheet_directory_uri() . '/slick-master/slick/slick-theme.css', array(), '1.6.0', true );

        wp_enqueue_script( 'logoscroll', get_template_directory_uri() . '/js/logoscroll.js', array(), '1.0', true );
        
        wp_enqueue_script( 'slick-init', get_template_directory_uri() . '/js/slick-init.js', array(), '1.6.0', true );

        wp_enqueue_script( 'flextext', get_template_directory_uri() . '/js/flextext.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'julianknightdev_pwa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Custom Posts */

function create_posttype() {

register_post_type( 'custom-post',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Custom Post' ),
                'singular_name' => __( 'Custom Posts' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'custom-post'),
            'supports'=>array('title','editor','thumbnail','comments'),
            'taxonomies'          => array( 'category' ),
      
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/* Add Custom Post to Home Page */
add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'custom-post' ) );

	return $query;
}

// display custom post type on Archives page
add_action( 'pre_get_posts', function ( $query ) 
{
  if (    !is_admin() 
       && $query->is_main_query() 
       && $query->is_archive()
      
   )
     $query->set( 'post_type', array( 'post', 'custom-post' ) );
});

/**
 * Extend WordPress search to include custom fields
 *
 * https://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

// link the Featured Image to the blog post
function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html;
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

/* Add a custom user role to the site
 * https://codex.wordpress.org/Roles_and_Capabilities
 * */
 $result = add_role('event-manager', 'Event Manager', array(
 'read' => true,
 'edit_posts' => true,
 'delete_posts' => false,
 ));
/* remove the unnecessary roles */
 remove_role('client');

/* Only allow editing custom posts based on role
 * */
add_action( 'current_screen', 'cpt_block_edit' );
function cpt_block_edit() {
    global $current_screen;

    $restricted = current_user_can('event-manager') && (
            ($current_screen->base=='edit' && $current_screen->id!='edit-custom-post') || 
            ($current_screen->base=='post' && $current_screen->id!='custom-post')
        );

    if ($restricted) {
        exit( wp_redirect( home_url( '/' ) ) );
    }
}

// remove links/menus from the admin bar based on role
if (!current_user_can('manage_options')) {
function mytheme_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
}

/**
 * Removes some admin bar sub-menus items based on role
 */
if (!current_user_can('manage_options')) { 
add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );

function remove_wp_nodes() 
{
    global $wp_admin_bar;   
    $wp_admin_bar->remove_node( 'new-post' );
}
}

/**
 * Removes some admin menus items based on role
 */
if (!current_user_can('manage_options')) {
function wpdocs_remove_menus(){
   
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'edit-comments.php' );          //Comments
   
}
add_action( 'admin_menu', 'wpdocs_remove_menus' );

// Remove meta boxes for everyone but Admins
if (!current_user_can('manage_options')) {
function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // Activity
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' ); // WordPress News
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // Quick Draft
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // At a Glance
}
add_action( 'admin_init', 'remove_dashboard_meta' );
}
}

// Restrict Guest Post access to their own posts

function posts_for_current_author($query) {
        global $pagenow;
  
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
  
    if( !current_user_can( 'manage_options' ) ) {
       global $user_ID;
       $query->set('contributor', $user_ID );
     }
     return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');


// Change logo on login page
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/Profile_overhead_circle.png);
		height:75px;
		width:75px;
		background-size: 75px 75px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Change link for on Login/Register pages
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// auto log in a user who has just signed up       
function automatically_log_me_in( $user_id ) {
    wp_set_current_user( $user_id );
    wp_set_auth_cookie( $user_id );
    wp_redirect( home_url( '/wp-admin/post-new.php?post_type=custom-post' ) );
    exit(); 
}
add_action( 'user_register', 'automatically_log_me_in' );

// Redirect users to home page after logout 
add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
  wp_safe_redirect( home_url() );
  exit();
}

//Add CSS to LI items in nav menus

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);