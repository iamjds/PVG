<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div id="pv_plant_needs_attributes" class="panel wc-metaboxes-wrapper hidden">
	<p style="color: red; font-weight: 700; margin-left: 20px;">all fields are read only</p>

	<div class="text-field-container">
	<?php
	$args = array(
	'label' => 'Maintenance Notes',
	'class' => 'pv-textarea',
	'value' => get_post_meta( $post->ID, '_pv_needs_maintenance_notes', true ), 
	'id' => 'pv_needs_maintenance_notes',
	'name' => '_pv_needs_maintenance_notes', 
	'rows' => '5',
	'cols' => '10',
	);
	woocommerce_wp_textarea_input( $args );

	$args = array(
		'label' => 'Needs Good Drainage',
		'class' => 'pv-checkbox',
		'id' => 'pv_needs_good_drainage', 
		'name' => '_pv_needs_good_drainage', 
		'value' => get_post_meta( $post->ID, '_pv_needs_good_drainage', true ),
		);
	woocommerce_wp_checkbox( $args );
	?>
	
	<div class="mini-columns">
	<label for="pv_ch_garden_height">Temperature</label>
	<?php
	$args = array(
		'label' => 'minimum',
		'class' => 'pv-text',
		'id' => 'pv_needs_temp_min', 
		'name' => '_pv_needs_temp_min', 
		'value' => get_post_meta( $post->ID, '_pv_needs_temp_min', true ),
		);
	woocommerce_wp_text_input( $args );
	$args = array(
		'label' => 'maximum',
		'class' => 'pv-text',
		'id' => 'pv_needs_temp_max', 
		'name' => '_pv_needs_temp_max', 
		'value' => get_post_meta( $post->ID, '_pv_needs_temp_max', true ),
		);
	woocommerce_wp_text_input( $args );
	?>
	</div>

	<div class="long-inputs">
	<?php
	$args = array(
	'label' => 'Uses Notes',
	'class' => 'pv-text',
	'id' => 'pv_needs_uses_notes', 
	'name' => '_pv_needs_uses_notes', 
	'value' => get_post_meta( $post->ID, '_pv_needs_uses_notes', true ),
	);
	woocommerce_wp_text_input( $args );

	$args = array(
	'label' => 'Maintenance Category',
	'class' => 'pv-text',
	'id' => 'pv_needs_maintenance_cat', 
	'name' => '_pv_needs_maintenance_cat', 
	'value' => get_post_meta( $post->ID, '_pv_needs_maintenance_cat', true ),
	);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Water Category',
		'class' => 'pv-text',
		'id' => 'pv_needs_water_cat', 
		'name' => '_pv_needs_water_cat', 
		'value' => get_post_meta( $post->ID, '_pv_needs_water_cat', true ),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Light Code',
		'class' => 'pv-text',
		'id' => 'pv_needs_light_code', 
		'name' => '_pv_needs_light_code', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_light_code', true )),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Light Level',
		'class' => 'pv-text',
		'id' => 'pv_needs_light_level', 
		'name' => '_pv_needs_light_level', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_light_level', true )),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Blooms On',
		'class' => 'pv-text',
		'id' => 'pv_needs_blooms_on', 
		'name' => '_pv_needs_blooms_on', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_blooms_on', true )),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Bloom Time',
		'class' => 'pv-text',
		'id' => 'pv_needs_bloom_time', 
		'name' => '_pv_needs_bloom_time', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_bloom_time', true )),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Hardiness Zones',
		'class' => 'pv-text',
		'id' => 'pv_needs_hardiness_zones', 
		'name' => '_pv_needs_hardiness_zones', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_hardiness_zones', true )),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Heat Zones',
		'class' => 'pv-text',
		'id' => 'pv_needs_heat_zones', 
		'name' => '_pv_needs_heat_zones', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_heat_zones', true )),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Uses',
		'class' => 'pv-text',
		'id' => 'pv_needs_uses', 
		'name' => '_pv_needs_uses', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_uses', true )),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Soil Fertility',
		'class' => 'pv-text',
		'id' => 'pv_needs_soil_fert', 
		'name' => '_pv_needs_soil_fert', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_soil_fert', true )),
		);
	woocommerce_wp_text_input( $args );

	$args = array(
		'label' => 'Soil PH Category',
		'class' => 'pv-text',
		'id' => 'pv_needs_soil_ph_cat', 
		'name' => '_pv_needs_soil_ph_cat', 
		'value' => arrToString(get_post_meta( $post->ID, '_pv_needs_soil_ph_cat', true )),
		);
	woocommerce_wp_text_input( $args );
	?>
	</div></div>
</div>