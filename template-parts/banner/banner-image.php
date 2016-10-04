<?php
/**
 * In case we don't have an image, we terminate here
 */
$banner_image = get_theme_mod( 'newsmag_banner_image', get_template_directory_uri() . '/assets/images/banner.jpg' );
if ( empty( $banner_image ) ) {
	return false;
}

$link = get_theme_mod( 'newsmag_banner_link', 'https://machothemes.com/' );

/**
 * In case the user did not select an image ( default ), we fallback to the placeholder banner
 */
if ( get_theme_mod( 'newsmag_banner_image', get_template_directory_uri() . '/assets/images/banner.jpg' ) !== get_template_directory_uri() . '/assets/images/banner.jpg' ) {
	$attachment_id = newsmag_get_attachment_id( get_theme_mod( 'newsmag_banner_image' ) ); ?>
	<a href="<?php echo esc_url_raw($link) ?>">
		<?php echo wp_get_attachment_image( $attachment_id, 'newsmag-wide-banner' ); ?>
	</a>
<?php } else { ?>
	<a href="<?php echo esc_url_raw($link) ?>">
		<?php
		echo '<img src="' . get_template_directory_uri() . '/assets/images/banner.jpg' . '" />';
		?>
	</a>
<?php }
