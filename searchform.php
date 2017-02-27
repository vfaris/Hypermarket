<?php
/**
 * Template for displaying search forms
 *
 * @author      Mahdi Yazdani
 * @package     Hypermarket
 * @since       1.0
 */
 ?>
<form method="get" id="searchform" action="<?php echo hypermarket_sanitize_url( home_url( '/' ) ); ?>" class="search-box">
	<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'hypermarket' ); ?></label>
	<input name="s" id="s" type="text" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'hypermarket' ); ?>" required="required" value="<?php echo get_search_query(); ?>" />
	<button type="submit">
		<i class="material-icons search"></i>
	</button>
</form><!-- #searchform -->