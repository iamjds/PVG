<?php

function pv_update_product_attributes($post_id, $new_plant){    

    if( !empty( $post_id ) || $post_id != 0 ):

    error_log( 'starting to update custom attributes for post ' . $post_id );

    // Features

    update_post_meta( $post_id, '_pv_feature_desc', $new_plant['features']['description'], get_post_meta($post_id , '_pv_feature_desc', true) );
    update_post_meta( $post_id, '_pv_feature_attracts', $new_plant['features']['attracts_wildlife'], get_post_meta($post_id , '_pv_feature_attracts', true) );
    update_post_meta( $post_id, '_pv_feature_resists', $new_plant['features']['resists_wildlife'], get_post_meta($post_id , '_pv_feature_resists', true) );
    update_post_meta( $post_id, '_pv_feature_fun_facts', $new_plant['features']['fun_facts'], get_post_meta($post_id , '_pv_feature_fun_facts', true) );
    update_post_meta( $post_id, '_pv_feature_adaptable_houseplant', $new_plant['features']['adaptable_as_houseplant'], get_post_meta($post_id , '_pv_feature_adaptable_houseplant', true) );
    update_post_meta( $post_id, '_pv_feature_award_winner', $new_plant['features']['award_winner'], get_post_meta($post_id , '_pv_feature_award_winner', true) );
    update_post_meta( $post_id, '_pv_feature_bog_plant', $new_plant['features']['bog_plant'], get_post_meta($post_id , '_pv_feature_bog_plant', true) );
    update_post_meta( $post_id, '_pv_feature_continuous_rebloom', $new_plant['features']['continuous_bloom_rebloom'], get_post_meta($post_id , '_pv_feature_continuous_rebloom', true) );
    update_post_meta( $post_id, '_pv_feature_dead_heading_not_necessary', $new_plant['features']['deadheading_not_necessary'], get_post_meta($post_id , '_pv_feature_dead_heading_not_necessary', true) );
    update_post_meta( $post_id, '_pv_feature_disease_resistent', $new_plant['features']['is_disease_resistant'], get_post_meta($post_id , '_pv_feature_disease_resistent', true) );
    update_post_meta( $post_id, '_pv_feature_drought_tolerant', $new_plant['features']['drought_tolerant'], get_post_meta($post_id , '_pv_feature_drought_tolerant', true) );
    update_post_meta( $post_id, '_pv_feature_edible', $new_plant['features']['is_edible'], get_post_meta($post_id , '_pv_feature_edible', true) );
    update_post_meta( $post_id, '_pv_feature_erosion_control', $new_plant['features']['erosion_control'], get_post_meta($post_id , '_pv_feature_erosion_control', true) );
    update_post_meta( $post_id, '_pv_feature_fragrant_flower', $new_plant['features']['fragrant_flower'], get_post_meta($post_id , '_pv_feature_fragrant_flower', true) );
    update_post_meta( $post_id, '_pv_feature_fragrant_foliage', $new_plant['features']['fragrant_foliage'], get_post_meta($post_id , '_pv_feature_fragrant_foliage', true) );
    update_post_meta( $post_id, '_pv_feature_grass', $new_plant['features']['grass'], get_post_meta($post_id , '_pv_feature_grass', true) );
    update_post_meta( $post_id, '_pv_feature_heat_tolerant', $new_plant['features']['heat_tolerant'], get_post_meta($post_id , '_pv_feature_heat_tolerant', true) );
    update_post_meta( $post_id, '_pv_feature_long_blooming', $new_plant['features']['long_blooming'], get_post_meta($post_id , '_pv_feature_long_blooming', true) );
    update_post_meta( $post_id, '_pv_feature_native_to_na', $new_plant['features']['native_to_north_america'], get_post_meta($post_id , '_pv_feature_native_to_na', true) );
    update_post_meta( $post_id, '_pv_feature_fall_interest', $new_plant['features']['fall_interest'], get_post_meta($post_id , '_pv_feature_fall_interest', true) );
    update_post_meta( $post_id, '_pv_feature_foliage_interest', $new_plant['features']['foliage_interest'], get_post_meta($post_id , '_pv_feature_foliage_interest', true) );
    update_post_meta( $post_id, '_pv_feature_winter_interest', $new_plant['features']['winter_interest'], get_post_meta($post_id , '_pv_feature_winter_interest', true) );
    update_post_meta( $post_id, '_pv_feature_salt_tolerant', $new_plant['features']['salt_tolerant'], get_post_meta($post_id , '_pv_feature_salt_tolerant', true) );
    update_post_meta( $post_id, '_pv_feature_succulent', $new_plant['features']['is_succulent'], get_post_meta($post_id , '_pv_feature_succulent', true) );
    update_post_meta( $post_id, '_pv_feature_vine', $new_plant['features']['vine'], get_post_meta($post_id , '_pv_feature_vine', true) );
    update_post_meta( $post_id, '_pv_feature_water_plant', $new_plant['features']['water_plant'], get_post_meta($post_id , '_pv_feature_water_plant', true) );
    update_post_meta( $post_id, '_pv_feature_small_miniature', $new_plant['features']['small_or_miniature'], get_post_meta($post_id , '_pv_feature_small_miniature', true) );

    // Characteristics

    update_post_meta( $post_id, '_pv_ch_duration', $new_plant['characteristics']['duration'], get_post_meta($post_id , '_pv_ch_duration', true) );
    update_post_meta( $post_id, '_pv_ch_flower_shade', $new_plant['characteristics']['flower_shade'], get_post_meta($post_id , '_pv_ch_flower_shade', true) );
    update_post_meta( $post_id, '_pv_ch_height_category', $new_plant['characteristics']['height_category'], get_post_meta($post_id , '_pv_ch_height_category', true) );
    update_post_meta( $post_id, '_pv_ch_foliage_colors', $new_plant['characteristics']['foliage_colors'], get_post_meta($post_id , '_pv_ch_foliage_colors', true) );
    update_post_meta( $post_id, '_pv_ch_foliage_shade', $new_plant['characteristics']['foliage_shade'], get_post_meta($post_id , '_pv_ch_foliage_shade', true) );
    update_post_meta( $post_id, '_pv_ch_garden_height_min', $new_plant['characteristics']['garden_height_minimum'], get_post_meta($post_id , '_pv_ch_garden_height_min', true) );
    update_post_meta( $post_id, '_pv_ch_garden_height_max', $new_plant['characteristics']['garden_height_maximum'], get_post_meta($post_id , '_pv_ch_garden_height_max', true) );
    update_post_meta( $post_id, '_pv_ch_market_height_min', $new_plant['characteristics']['market_height_minimum'], get_post_meta($post_id , '_pv_ch_market_height_min', true) );
    update_post_meta( $post_id, '_pv_ch_market_height_max', $new_plant['characteristics']['market_height_maximum'], get_post_meta($post_id , '_pv_ch_market_height_max', true) );    
    update_post_meta( $post_id, '_pv_ch_spacing_min', $new_plant['characteristics']['spacing_minimum'], get_post_meta($post_id , '_pv_ch_spacing_min', true) );
    update_post_meta( $post_id, '_pv_ch_spacing_max', $new_plant['characteristics']['spacing_maximum'], get_post_meta($post_id , '_pv_ch_spacing_max', true) );
    update_post_meta( $post_id, '_pv_ch_scape_height_min', $new_plant['characteristics']['scape_height_minimum'], get_post_meta($post_id , '_pv_ch_scape_height_min', true) );
    update_post_meta( $post_id, '_pv_ch_scape_height_max', $new_plant['characteristics']['scape_height_maximum'], get_post_meta($post_id , '_pv_ch_scape_height_max', true) );
    update_post_meta( $post_id, '_pv_ch_habit', $new_plant['characteristics']['habit'], get_post_meta($post_id , '_pv_ch_habit', true) );
    update_post_meta( $post_id, '_pv_ch_spread_min', $new_plant['characteristics']['spread_minimum'], get_post_meta($post_id , '_pv_ch_spread_min', true) );
    update_post_meta( $post_id, '_pv_ch_spread_max', $new_plant['characteristics']['spread_maximum'], get_post_meta($post_id , '_pv_ch_spread_max', true) );
    update_post_meta( $post_id, '_pv_ch_container_role', $new_plant['characteristics']['container_role'], get_post_meta($post_id , '_pv_ch_container_role', true) );
    update_post_meta( $post_id, '_pv_ch_flower_colors', $new_plant['characteristics']['flower_colors'], get_post_meta($post_id , '_pv_ch_flower_colors', true) );

    // Plant Needs

    update_post_meta( $post_id, '_pv_needs_maintenance_notes', $new_plant['needs']['maintenance_notes'], get_post_meta($post_id , '_pv_needs_maintenance_notes', true) );
    update_post_meta( $post_id, '_pv_needs_good_drainage', $new_plant['needs']['needs_good_drainage'], get_post_meta($post_id , '_pv_needs_good_drainage', true) );
    update_post_meta( $post_id, '_pv_needs_temp_min', $new_plant['needs']['temperature_minimum'], get_post_meta($post_id , '_pv_needs_temp_min', true) );
    update_post_meta( $post_id, '_pv_needs_temp_max', $new_plant['needs']['temperature_maximum'], get_post_meta($post_id , '_pv_needs_temp_max', true) );
    update_post_meta( $post_id, '_pv_needs_uses_notes', $new_plant['needs']['uses_notes'], get_post_meta($post_id , '_pv_needs_uses_notes', true) );
    update_post_meta( $post_id, '_pv_needs_maintenance_cat', $new_plant['needs']['maintenance_category'], get_post_meta($post_id , '_pv_needs_maintenance_cat', true) );    
    update_post_meta( $post_id, '_pv_needs_water_cat', $new_plant['needs']['water_category'], get_post_meta($post_id , '_pv_needs_water_cat', true) );
    update_post_meta( $post_id, '_pv_needs_light_code', $new_plant['needs']['lightcode'], get_post_meta($post_id , '_pv_needs_light_code', true) );
    update_post_meta( $post_id, '_pv_needs_light_level', $new_plant['needs']['light_level'], get_post_meta($post_id , '_pv_needs_light_level', true) );
    update_post_meta( $post_id, '_pv_needs_blooms_on', $new_plant['needs']['blooms_on'], get_post_meta($post_id , '_pv_needs_blooms_on', true) );
    update_post_meta( $post_id, '_pv_needs_bloom_time', $new_plant['needs']['bloom_time'], get_post_meta($post_id , '_pv_needs_bloom_time', true) );
    update_post_meta( $post_id, '_pv_needs_hardiness_zones', $new_plant['needs']['hardiness_zones'], get_post_meta($post_id , '_pv_needs_hardiness_zones', true) );
    update_post_meta( $post_id, '_pv_needs_heat_zones', $new_plant['needs']['heat_zones'], get_post_meta($post_id , '_pv_needs_heat_zones', true) );
    update_post_meta( $post_id, '_pv_needs_uses', $new_plant['needs']['uses'], get_post_meta($post_id , '_pv_needs_uses', true) );
    update_post_meta( $post_id, '_pv_needs_soil_fert', $new_plant['needs']['soil_fertility'], get_post_meta($post_id , '_pv_needs_soil_fert', true) );
    update_post_meta( $post_id, '_pv_needs_soil_ph_cat', $new_plant['needs']['soil_ph_category'], get_post_meta($post_id , '_pv_needs_soil_ph_cat', true) );

    // Identity
    
    if( preg_match('/winner/', strtolower($new_plant['identity']['brand'])) ){
        update_post_meta( $post_id, '_pv_identity_pr_winners', 1, get_post_meta($post_id , '_pv_identity_pr_winners', true) );
    }
    if( preg_match('/selection/', strtolower($new_plant['identity']['brand'])) ){
        update_post_meta( $post_id, '_pv_identity_pr_selections', 1, get_post_meta($post_id , '_pv_identity_pr_selections', true) );
    }
    update_post_meta( $post_id, '_pv_identity_genus', $new_plant['identity']['genus'], get_post_meta($post_id , '_pv_identity_genus', true) );
    update_post_meta( $post_id, '_pv_identity_species', $new_plant['identity']['species'], get_post_meta($post_id , '_pv_identity_species', true) );

    // More Colors

    $nids = array();

    if( isset($new_plant['series']) && !empty($new_plant['series']) && count($new_plant['series']['plants'] > 0) ){
        error_log( count( $new_plant['series']['plants'] ) . ' more colors to add to post ' . $post_id);

        foreach($new_plant['series']['plants'] as $plant) {    
            if($new_plant['nid'] != $plant['nid']){    
                array_push( $nids, $plant['nid'] );
            }
        }
        update_post_meta( $post_id, '_pv_more_colors_nids', $nids, get_post_meta($post_id , '_pv_more_colors_nids', true) );
    }

    error_log( 'all PVG attributes for post ' . $post_id . ' have been updated' );

    endif;
}