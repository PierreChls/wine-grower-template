<?php
/**
 * Welcome screen intro template
 */
?>
<?php
$winegrower = wp_get_theme( 'winegrower' );

?>
<div class="col two-col" style="margin-bottom: 1.618em; overflow: hidden;">
	<div class="col-1">
		<h1 style="margin-right: 0;"><?php echo '<strong>winegrower</strong> <sup style="font-weight: bold; font-size: 50%; padding: 5px 10px; color: #666; background: #fff;">' . esc_attr( $winegrower['Version'] ) . '</sup>'; ?></h1>

		<p style="font-size: 1.2em;"><?php _e( 'Awesome! You\'ve decided to use winegrower to enrich your WooCommerce store design.', 'winegrower' ); ?></p>
		<p><?php _e( 'Whether you\'re a store owner, WordPress developer, or both - we hope you enjoy winegrower\'s deep integration with WooCommerce core (including several popular WooCommerce extensions), plus the flexible design and extensible codebase that this theme provides.', 'winegrower' ); ?>
	</div>

	<div class="col-2 last-feature">
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.png'; ?>" alt="winegrower" class="image-50" width="440" />
	</div>
</div>