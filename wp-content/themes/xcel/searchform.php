<?php
/**
 * The template for displaying search forms in xcel
 *
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'xcel' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'xcel' ); ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( '&nbsp;', 'submit button', 'xcel' ); ?>" />
</form>