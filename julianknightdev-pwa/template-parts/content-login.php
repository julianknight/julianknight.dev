<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julianknightdev-pwa
 */

?>

<div class="w3-container">

<?php the_content(); ?>
<?php
if ( ! is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        'redirect' => admin_url(), 
        'form_id' => 'loginform-custom',
        'label_username' => __( 'Username custom text' ),
        'label_password' => __( 'Password custom text' ),
        'label_remember' => __( 'Remember Me custom text' ),
        'label_log_in' => __( 'Log In custom text' ),
        'remember' => true
    );
    wp_login_form( $args );
} else { // If logged in:
    wp_loginout( home_url() ); // Display "Log Out" link.
    echo " | ";
    wp_register('', ''); // Display "Site Admin" link.
}
?>
</div>

<?php wp_register(); ?>

</div>

	<footer class="entry-footer">
		<?php julianknightdev_pwa_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

</div>

