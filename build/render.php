<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

if ( ! empty( $attributes['shortcode'] ) ) :
	preg_match( '/src="([^"]+)"/', $attributes['shortcode'], $matches );
	$src = ( isset( $matches[1] ) ) ? esc_url( $matches[1] ) : $attributes['shortcode'];

	// Validate that $src is in fact a URL.
	if ( ! filter_var( $src, FILTER_VALIDATE_URL ) ) {
		return;
	}
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
	<script src="<?php echo esc_attr( $src ); ?>" type="text/javascript"></script>
</div>

<?php
endif;
