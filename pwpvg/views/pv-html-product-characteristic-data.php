<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="pv_characteristic_attributes" class="panel wc-metaboxes-wrapper hidden">
	<p style="color: red; font-weight: 700; margin-left: 20px;">all fields are read only</p>

	<div class="text-field-container">
	<?php
	$args = array(
	'label' => 'Duration',
	'class' => 'pv-text',
	'id' => 'pv_ch_duration', 
	'name' => '_pv_ch_duration', 
	'value' => get_post_meta( $post->ID, '_pv_ch_duration', true ),
	);
	woocommerce_wp_text_input( $args );

	$args = array(
	'label' => 'Flower Shade',
	'class' => 'pv-text',
	'id' => 'pv_ch_flower_shade', 
	'name' => '_pv_ch_flower_shade', 
	'value' => get_post_meta( $post->ID, '_pv_ch_flower_shade', true ),
	);
	woocommerce_wp_text_input( $args );

	$args = array(
	'label' => 'Height Category',
	'class' => 'pv-text',
	'id' => 'pv_ch_height_category', 
	'name' => '_pv_ch_height_category', 
	'value' => get_post_meta( $post->ID, '_pv_ch_height_category', true ),
	);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Foliage Colors',
		'class' => 'pv-text',
		'id' => 'pv_ch_foliage_colors', 
		'name' => '_pv_ch_foliage_colors', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_ch_foliage_colors', true )),
		);
	woocommerce_wp_text_input( $args );
	?>
	
	<div class="mini-columns">
	<label for="pv_ch_garden_height">Garden Height</label>
	<?php
	$args = array(
		'label' => 'min',
		'class' => 'pv-text',
		'id' => 'pv_ch_garden_height_min', 
		'name' => '_pv_ch_garden_height_min', 
		'value' => get_post_meta( $post->ID, '_pv_ch_garden_height_min', true ),
		);
	woocommerce_wp_text_input( $args );
	$args = array(
		'label' => 'max',
		'class' => 'pv-text',
		'id' => 'pv_ch_garden_height_max', 
		'name' => '_pv_ch_garden_height_max', 
		'value' => get_post_meta( $post->ID, '_pv_ch_garden_height_max', true ),
		);
	woocommerce_wp_text_input( $args );
	?>
	</div>

	<?php
	$args = array(
		'label' => 'Foliage Shade',
		'class' => 'pv-text',
		'id' => 'pv_ch_foliage_shade', 
		'name' => '_pv_ch_foliage_shade', 
		'value' => get_post_meta( $post->ID, '_pv_ch_foliage_shade', true ),
		);
	woocommerce_wp_text_input( $args );
	?>

	<div class="mini-columns">
	<label for="pv_ch_garden_height">Spacing</label>
	<?php
	$args = array(
		'label' => 'min',
		'class' => 'pv-text',
		'id' => 'pv_ch_spacing_min', 
		'name' => '_pv_ch_spacing_min', 
		'value' => get_post_meta( $post->ID, '_pv_ch_spacing_min', true ),
		);
	woocommerce_wp_text_input( $args );
	$args = array(
		'label' => 'max',
		'class' => 'pv-text',
		'id' => 'pv_ch_spacing_max', 
		'name' => '_pv_ch_spacing_max', 
		'value' => get_post_meta( $post->ID, '_pv_ch_spacing_max', true ),
		);
	woocommerce_wp_text_input( $args );
	?>
	</div>

	<?php
	$args = array(
		'label' => 'Habit',
		'class' => 'pv-text',
		'id' => 'pv_ch_habit', 
		'name' => '_pv_ch_habit', 
		'value' => get_post_meta( $post->ID, '_pv_ch_habit', true ),
		);
	woocommerce_wp_text_input( $args );
	?>

	<div class="mini-columns">
	<label for="pv_ch_garden_height">Spread</label>
	<?php
	$args = array(
		'label' => 'min',
		'class' => 'pv-text',
		'id' => 'pv_ch_spread_min', 
		'name' => '_pv_ch_spread_min', 
		'value' => get_post_meta( $post->ID, '_pv_ch_spread_min', true ),
		);
	woocommerce_wp_text_input( $args );
	$args = array(
		'label' => 'max',
		'class' => 'pv-text',
		'id' => 'pv_ch_spread_max', 
		'name' => '_pv_ch_spread_max', 
		'value' => get_post_meta( $post->ID, '_pv_ch_spread_max', true ),
		);
	woocommerce_wp_text_input( $args );
	?>
	</div>

	<?php
	$args = array(
		'label' => 'Container Role',
		'class' => 'pv-text',
		'id' => 'pv_ch_container_role', 
		'name' => '_pv_ch_container_role', 
		'value' => get_post_meta( $post->ID, '_pv_ch_container_role', true ),
		);
	woocommerce_wp_text_input( $args );
	?>

	<div class="mini-columns">
		<label for="pv_ch_garden_height">Market Height</label>
		<?php
		$args = array(
			'label' => 'min',
			'class' => 'pv-text',
			'id' => 'pv_ch_market_height_min', 
			'name' => '_pv_ch_market_height_min', 
			'value' => get_post_meta( $post->ID, '_pv_ch_market_height_min', true ),
			);
		woocommerce_wp_text_input( $args );
		$args = array(
			'label' => 'max',
			'class' => 'pv-text',
			'id' => 'pv_ch_market_height_max', 
			'name' => '_pv_ch_market_height_max', 
			'value' => get_post_meta( $post->ID, '_pv_ch_market_height_max', true ),
			);
		woocommerce_wp_text_input( $args );
		?>
	</div>

	<?php
	$args = array(
		'label' => 'Flower Colors',
		'class' => 'pv-text',
		'id' => 'pv_ch_flower_colors', 
		'name' => '_pv_ch_flower_colors', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_ch_flower_colors', true )),
		);
	woocommerce_wp_text_input( $args );

	?>

	<div class="mini-columns">
		<label for="pv_ch_garden_height">Scape Height</label>
		<?php
		$args = array(
			'label' => 'min',
			'class' => 'pv-text',
			'id' => 'pv_ch_scape_height_min', 
			'name' => '_pv_ch_scape_height_min', 
			'value' => get_post_meta( $post->ID, '_pv_ch_scape_height_min', true ),
			);
		woocommerce_wp_text_input( $args );
		$args = array(
			'label' => 'max',
			'class' => 'pv-text',
			'id' => 'pv_ch_scape_height_max', 
			'name' => '_pv_ch_scape_height_max', 
			'value' => get_post_meta( $post->ID, '_pv_ch_scape_height_max', true ),
			);
		woocommerce_wp_text_input( $args );
		?>
	</div>

	</div>	
</div>
