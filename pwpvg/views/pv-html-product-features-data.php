<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="pv_features_attributes" class="panel wc-metaboxes-wrapper hidden">
	<p style="color: red; font-weight: 700; margin-left: 20px;">all fields are read only</p>

	<?php
	$args = array(
	'label' => 'Features',
	'class' => 'pv-textarea',
	//'style' => '',
	//'wrapper_class' => '',
	'value' => get_post_meta( $post->ID, '_pv_feature_desc', true ), // if empty, retrieved from post meta where id is the meta_key
	'id' => 'pv_feature_desc',
	'name' => '_pv_feature_desc', //name will set from id if empty
	'rows' => '5',
	'cols' => '10',
	//'desc_tip' => '',
	//'custom_attributes' => '', // array of attributes 
	//'description' => ''
	);
	woocommerce_wp_textarea_input( $args );

	$args = array(
	'label' => 'Attracts',
	'class' => 'pv-text',
	'id' => 'pv_feature_attracts', 
	'name' => '_pv_feature_attracts', 
	'value' => arrToString(get_post_meta( $post->ID, '_pv_feature_attracts', true )),
	);
	woocommerce_wp_text_input( $args );

	$args = array(
	'label' => 'Resists',
	'class' => 'pv-text',
	'id' => 'pv_feature_resists', 
	'name' => '_pv_feature_resists', 
	'value' => arrToString(get_post_meta( $post->ID, '_pv_feature_resists', true )),
	);
	woocommerce_wp_text_input( $args );

	$args = array(
	'label' => 'Fun Facts',
	'class' => 'pv-text',
	'id' => 'pv_feature_fun_facts', 
	'name' => '_pv_feature_fun_facts', 
	'value' => get_post_meta( $post->ID, '_pv_feature_fun_facts', true ),
	);
	woocommerce_wp_text_input( $args );

	?>

	<div class="pv-checkbox-container">

	<?php
	$args = array(
	'label' => 'Adapatable as House Plant',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_adaptable_houseplant', 
	'name' => '_pv_feature_adaptable_houseplant', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_adaptable_houseplant', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Award Winner',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_award_winner', 
	'name' => '_pv_feature_award_winner', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_award_winner', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Bog Plant',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_bog_plant', 
	'name' => '_pv_feature_bog_plant', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_bog_plant', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Continuous Re-Bloom',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_continuous_rebloom', 
	'name' => '_pv_feature_continuous_rebloom', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_continuous_rebloom', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Dead-Heading Not Necessary',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_dead_heading_not_necessary', 
	'name' => '_pv_feature_dead_heading_not_necessary', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_dead_heading_not_necessary', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Disease Resistant',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_disease_resistent', 
	'name' => '_pv_feature_disease_resistent', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_disease_resistent', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Drought Tolerant',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_drought_tolerant', 
	'name' => '_pv_feature_drought_tolerant', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_drought_tolerant', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );
	
	$args = array(
	'label' => 'Edible',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_edible', 
	'name' => '_pv_feature_edible', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_edible', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );
		
	$args = array(
	'label' => 'Erosion Control',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_erosion_control', 
	'name' => '_pv_feature_erosion_control', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_erosion_control', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );			

	$args = array(
	'label' => 'Fragrant Flower',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_fragrant_flower', 
	'name' => '_pv_feature_fragrant_flower', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_fragrant_flower', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Fragrant Foliage',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_fragrant_foliage', 
	'name' => '_pv_feature_fragrant_foliage', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_fragrant_foliage', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Grass',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_grass', 
	'name' => '_pv_feature_grass', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_grass', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Heat Tolerant',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_heat_tolerant', 
	'name' => '_pv_feature_heat_tolerant', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_heat_tolerant', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Long Blooming',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_long_blooming', 
	'name' => '_pv_feature_long_blooming', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_long_blooming', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Native to North America',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_native_to_na', 
	'name' => '_pv_feature_native_to_na', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_native_to_na', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Fall Interest',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_fall_interest', 
	'name' => '_pv_feature_fall_interest', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_fall_interest', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Foliage Interest',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_foliage_interest', 
	'name' => '_pv_feature_foliage_interest', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_foliage_interest', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Winter Interest',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_winter_interest', 
	'name' => '_pv_feature_winter_interest', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_winter_interest', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );
	
	$args = array(
	'label' => 'Salt Tolerant',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_salt_tolerant', 
	'name' => '_pv_feature_salt_tolerant', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_salt_tolerant', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Succulent',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_succulent', 
	'name' => '_pv_feature_succulent', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_succulent', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Vine',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_vine', 
	'name' => '_pv_feature_vine', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_vine', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Water Plant',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_water_plant', 
	'name' => '_pv_feature_water_plant', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_water_plant', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	$args = array(
	'label' => 'Small / Miniature',
	'class' => 'pv-checkbox',
	'id' => 'pv_feature_small_miniature', 
	'name' => '_pv_feature_small_miniature', 
	'value' => ( empty( get_post_meta( $post->ID, '_pv_feature_small_miniature', true ) ) ? 'no' : 'yes' ),
	);
	woocommerce_wp_checkbox( $args );

	?>

	</div>
</div>