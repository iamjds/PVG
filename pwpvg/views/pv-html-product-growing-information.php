<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="pv_growing_info_attributes" class="panel wc-metaboxes-wrapper hidden">
    <p style="color: red; font-weight: 700; margin-left: 20px;">all fields are read only</p>

    <div class="text-field-container">
    <?php
        $args = array(
        'label' => 'pH',
        'class' => 'pv-text',
        'id' => 'pv_gi_ph', 
        'name' => '_pv_gi_ph', 
        'value' => arrToString(get_post_meta( $post->ID, '_pv_gi_ph', true )),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'blank',
        'class' => 'pv-space-holder-text',
        'id' => 'pv_empty1', 
        'name' => '_pv_empty1', 
        'value' => '',
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'EC Minimum',
        'class' => 'pv-text',
        'id' => 'pv_gi_ec_min', 
        'name' => '_pv_gi_ec_min', 
        'value' => get_post_meta( $post->ID, '_pv_gi_ec_min', true ),
        );
        woocommerce_wp_text_input( $args );
        
        $args = array(
        'label' => 'EC Maximum',
        'class' => 'pv-text',
        'id' => 'pv_gi_ec_max', 
        'name' => '_pv_gi_ec_max', 
        'value' => get_post_meta( $post->ID, '_pv_gi_ec_max', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Fertilization Minimum',
        'class' => 'pv-text',
        'id' => 'pv_gi_fertilization_min', 
        'name' => '_pv_gi_fertilization_min', 
        'value' => get_post_meta( $post->ID, '_pv_gi_fertilization_min', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Fertilization Maximum',
        'class' => 'pv-text',
        'id' => 'pv_gi_fertilization_max', 
        'name' => '_pv_gi_fertilization_max', 
        'value' => get_post_meta( $post->ID, '_pv_gi_fertilization_max', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Light Requirements',
        'class' => 'pv-text',
        'id' => 'pv_gi_light_requirements', 
        'name' => '_pv_gi_light_requirements', 
        'value' => arrToString(get_post_meta( $post->ID, '_pv_gi_light_requirements', true )),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Water Categories',
        'class' => 'pv-text',
        'id' => 'pv_gi_water_requirements', 
        'name' => '_pv_gi_water_requirements', 
        'value' => arrToString(get_post_meta( $post->ID, '_pv_gi_water_requirements', true )),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Rooting Out Temp Minimum',
        'class' => 'pv-text',
        'id' => 'pv_gi_rooting_out_min', 
        'name' => '_pv_gi_rooting_out_min', 
        'value' => get_post_meta( $post->ID, '_pv_gi_rooting_out_min', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Rooting Out Temp Maximum',
        'class' => 'pv-text',
        'id' => 'pv_gi_rooting_out_max', 
        'name' => '_pv_gi_rooting_out_max', 
        'value' => get_post_meta( $post->ID, '_pv_gi_rooting_out_max', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Growing On Temp Minimum',
        'class' => 'pv-text',
        'id' => 'pv_gi_growing_on_min', 
        'name' => '_pv_gi_growing_on_min', 
        'value' => get_post_meta( $post->ID, '_pv_gi_growing_on_min', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Growing On Temp Maximum',
        'class' => 'pv-text',
        'id' => 'pv_gi_growing_on_max', 
        'name' => '_pv_gi_growing_on_max', 
        'value' => get_post_meta( $post->ID, '_pv_gi_growing_on_max', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Holding Temperature Minimum',
        'class' => 'pv-text',
        'id' => 'pv_gi_holding_temp_min', 
        'name' => '_pv_gi_holding_temp_min', 
        'value' => get_post_meta( $post->ID, '_pv_gi_holding_temp_min', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Holding Temperature Maximum',
        'class' => 'pv-text',
        'id' => 'pv_gi_holding_temp_max', 
        'name' => '_pv_gi_holding_temp_max', 
        'value' => get_post_meta( $post->ID, '_pv_gi_holding_temp_max', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Planting & Timing Information',
        'class' => 'pv-text',
        'id' => 'pv_gi_planting_and_timing', 
        'name' => '_pv_gi_planting_and_timing', 
        'value' => get_post_meta( $post->ID, '_pv_gi_planting_and_timing', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Pinching and Growth Regulators',
        'class' => 'pv-text',
        'id' => 'pv_gi_pinching_growth_regulators', 
        'name' => '_pv_gi_pinching_growth_regulators', 
        'value' => get_post_meta( $post->ID, '_pv_gi_pinching_growth_regulators', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Pest & Disease Management',
        'class' => 'pv-text',
        'id' => 'pv_gi_pest_disease_management', 
        'name' => '_pv_gi_pest_disease_management', 
        'value' => get_post_meta( $post->ID, '_pv_gi_pest_disease_management', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => 'Grower Tips',
        'class' => 'pv-text',
        'id' => 'pv_gi_grower_tips', 
        'name' => '_pv_gi_grower_tips', 
        'value' => get_post_meta( $post->ID, '_pv_gi_grower_tips', true ),
        );
        woocommerce_wp_text_input( $args );
        ?>

    </div>

    <div class="mini-columns">
        <label for="pv_ch_garden_height">Finishing Times</label>

        <?php
        $args = array(
        'label' => '4-5"',
        'class' => 'pv-text',
        'id' => 'pv_gi_finishing_time_5_inch', 
        'name' => '_pv_gi_finishing_time_5_inch', 
        'value' => get_post_meta( $post->ID, '_pv_gi_finishing_time_5_inch', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => '6"',
        'class' => 'pv-text',
        'id' => 'pv_gi_finishing_time_6_inch', 
        'name' => '_pv_gi_finishing_time_6_inch', 
        'value' => get_post_meta( $post->ID, '_pv_gi_finishing_time_6_inch', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => '7-9"',
        'class' => 'pv-text',
        'id' => 'pv_gi_finishing_time_9_inch', 
        'name' => '_pv_gi_finishing_time_9_inch', 
        'value' => get_post_meta( $post->ID, '_pv_gi_finishing_time_9_inch', true ),
        );
        woocommerce_wp_text_input( $args );

        $args = array(
        'label' => '10-12"',
        'class' => 'pv-text',
        'id' => 'pv_gi_finishing_time_12_inch', 
        'name' => '_pv_gi_finishing_time_12_inch', 
        'value' => get_post_meta( $post->ID, '_pv_gi_finishing_time_12_inch', true ),
        );
        woocommerce_wp_text_input( $args );

        ?>
    </div>

</div>
