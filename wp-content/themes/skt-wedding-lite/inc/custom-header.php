<?php
/**
 * @package SKT Wedding Lite
 * Setup the WordPress core custom header feature.
 *
 * @uses sktweddinglite_header_style()
 * @uses sktweddinglite_admin_header_style()
 * @uses sktweddinglite_admin_header_image()

 */
function sktweddinglite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'sktweddinglite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'width'                  => 1600,
		'height'                 => 200,
		'wp-head-callback'       => 'sktweddinglite_header_style',
		'admin-head-callback'    => 'sktweddinglite_admin_header_style',
		'admin-preview-callback' => 'sktweddinglite_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'sktweddinglite_custom_header_setup' );

if ( ! function_exists( 'sktweddinglite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see sktweddinglite_custom_header_setup().
 */
function sktweddinglite_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() ) :
	?>
		.headertest {
			background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php
}
endif; // sktweddinglite_header_style

if ( ! function_exists( 'sktweddinglite_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see sktweddinglite_custom_header_setup().
 */
function sktweddinglite_admin_header_style() {?>
	<style type="text/css">
	.appearance_page_custom-header #headimg { border: none; }
	</style><?php
}
endif; // sktweddinglite_admin_header_style


add_action( 'admin_head', 'admin_header_css' );
function admin_header_css(){ ?>
	<style>pre{white-space: pre-wrap;}</style><?php
}


if ( ! function_exists( 'sktweddinglite_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see sktweddinglite_custom_header_setup().
 */
function sktweddinglite_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
		<img src="<?php echo esc_url( $header_image ); ?>" alt="">
		<?php endif; ?>
	</div>
<?php   
}
endif; 
?>