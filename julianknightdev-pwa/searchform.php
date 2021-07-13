<?php
/**
 * Template for displaying search forms in Custom Theme
 *
 * @package WordPress
 * @subpackage Cusotm Theme
 * @since 1.0
 * @version 1.0
 */

?>

<div class="w3-cell-row w3-bottombar w3-leftbar w3-rightbar w3-topbar w3-round-xxlarge">

<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">

<div class="w3-cell-row">
  <div class="w3-cell w3-cell-middle">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input class="w3-input w3-border-0 w3-round-xxlarge w3-padding-small"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
  </div>
  <div class="w3-cell  w3-right w3-cell-middle">
     <button class="w3-button w3-hover-white w3-padding-small"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" ><i class="material-icons">search</i></button>
  </div>
</div>

</form>

</div>