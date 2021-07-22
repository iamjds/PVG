<?php

function pv_update_product_attributes($post_id, $new_plant){    

    if( !empty( $post_id ) || $post_id != 0 ):

        write_log( 'starting to update custom attributes for post ' . $post_id );

        // Features

        if( array_key_exists('features', $new_plant) ){
            write_log('updating feature attributes for postID ' . $post_id);

            update_post_meta( $post_id, '_pv_feature_desc', $new_plant['features']['features'], get_post_meta($post_id , '_pv_feature_desc', true) );
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
        }


        // Characteristics

        if( array_key_exists('characteristics', $new_plant) ){
            write_log('updating characteristics attributes for postID  ' . $post_id);

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
        }


        // Plant Needs

        if( array_key_exists('needs', $new_plant) ){
            write_log('updating needs attributes for postID ' . $post_id);

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
        }


        // Identity
        
        if( array_key_exists('identity', $new_plant) ){
            write_log('updating identity attributes for postID ' . $post_id);

            if( preg_match('/winner/', strtolower($new_plant['identity']['brand'])) ){
                update_post_meta( $post_id, '_pv_identity_pr_winners', 1, get_post_meta($post_id , '_pv_identity_pr_winners', true) );
            }
            if( preg_match('/selection/', strtolower($new_plant['identity']['brand'])) ){
                update_post_meta( $post_id, '_pv_identity_pr_selections', 1, get_post_meta($post_id , '_pv_identity_pr_selections', true) );
            }
            update_post_meta( $post_id, '_pv_identity_genus', $new_plant['identity']['genus'], get_post_meta($post_id , '_pv_identity_genus', true) );
            update_post_meta( $post_id, '_pv_identity_species', $new_plant['identity']['species'], get_post_meta($post_id , '_pv_identity_species', true) );
        }


        // Culture

        if( array_key_exists('culture', $new_plant) ){
            write_log('updating culture attributes for postID ' . $post_id);            

            if( array_key_exists('culture', $new_plant) && array_key_exists('cultureid', $new_plant['culture']) && $new_plant['culture']['cultureid'] != 0 ){
                write_log( 'updating post ' . $post_id . ' culture ID '. $new_plant['culture']['cultureid'] .' attributes' );
                pv_update_product_culture_attributes( $post_id, $new_plant['culture']['cultureid'] );
            }
        }


        // More Colors

        if( array_key_exists('series', $new_plant) ){
            write_log('updating series attributes for postID ' . $post_id);
            $nids = array();

            if( isset($new_plant['series']) && !empty($new_plant['series']) && count($new_plant['series']['plants'] > 0) ){
                write_log( count( $new_plant['series']['plants'] ) . ' more colors to add to post ' . $post_id);

                foreach($new_plant['series']['plants'] as $plant) {    
                    if($new_plant['nid'] != $plant['nid']){    
                        array_push( $nids, $plant['nid'] );
                    }
                }
                update_post_meta( $post_id, '_pv_more_colors_nids', $nids, get_post_meta($post_id , '_pv_more_colors_nids', true) );
            }
        }

        write_log( 'all PVG attributes for post ' . $post_id . ' have been updated' );

    endif;
}

function pv_update_product_culture_attributes($post_id, $culture_id){    
    $curl = curl_init();

    $param = http_build_query([
        'apikey'    => 'e9txcshdDtFr2smWCPUyY5HPvGm4Uc',
        'cultureid' => $culture_id,
        'sections'  => 'metrics',
    ]);

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.provenwinners.com/api/v0/culture/search?" . $param,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
    ));

    $culture = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    // if( isset( $err )) {
    //     return $err;
    // }        

    if( isset( $culture ) && array_key_exists('metrics', json_decode( $culture, true )[0] ) ) {    
        $c = json_decode( $culture, true )[0];

        update_post_meta( $post_id, '_pv_gi_ph', $c['metrics']['ph_categories'], get_post_meta($post_id , '_pv_gi_ph', true) );
        update_post_meta( $post_id, '_pv_gi_ec_min', $c['metrics']['ec_minimum'], get_post_meta($post_id , '_pv_gi_ec_min', true) );
        update_post_meta( $post_id, '_pv_gi_ec_max', $c['metrics']['ec_maximum'], get_post_meta($post_id , '_pv_gi_ec_max', true) );
        update_post_meta( $post_id, '_pv_gi_fertilization_min', $c['metrics']['fertilization_minimum'], get_post_meta($post_id , '_pv_gi_fertilization_min', true) );
        update_post_meta( $post_id, '_pv_gi_fertilization_max', $c['metrics']['fertilization_maximum'], get_post_meta($post_id , '_pv_gi_fertilization_max', true) );
        update_post_meta( $post_id, '_pv_gi_light_requirements', $c['metrics']['light_requirements'], get_post_meta($post_id , '_pv_gi_light_requirements', true) );
        update_post_meta( $post_id, '_pv_gi_water_requirements', $c['metrics']['water_requirements'], get_post_meta($post_id , '_pv_gi_water_requirements', true) );
        update_post_meta( $post_id, '_pv_gi_rooting_out_min', $c['metrics']['rooting_temp_minimum'], get_post_meta($post_id , '_pv_gi_rooting_out_min', true) );
        update_post_meta( $post_id, '_pv_gi_rooting_out_max', $c['metrics']['rooting_temp_maximum'], get_post_meta($post_id , '_pv_gi_rooting_out_max', true) );
        update_post_meta( $post_id, '_pv_gi_growing_on_min', $c['metrics']['growing_on_minimum'], get_post_meta($post_id , '_pv_gi_growing_on_min', true) );
        update_post_meta( $post_id, '_pv_gi_growing_on_max', $c['metrics']['growing_on_maximum'], get_post_meta($post_id , '_pv_gi_growing_on_max', true) );
        update_post_meta( $post_id, '_pv_gi_holding_temp_min', $c['metrics']['holding_temp_minimum'], get_post_meta($post_id , '_pv_gi_holding_temp_min', true) );
        update_post_meta( $post_id, '_pv_gi_holding_temp_max', $c['metrics']['holding_temp_maximum'], get_post_meta($post_id , '_pv_gi_holding_temp_max', true) );
        update_post_meta( $post_id, '_pv_gi_planting_and_timing', $c['metrics']['planting_and_timing'], get_post_meta($post_id , '_pv_gi_planting_and_timing', true) );
        update_post_meta( $post_id, '_pv_gi_pinching_growth_regulators', $c['metrics']['pinching_growth_regulators'], get_post_meta($post_id , '_pv_gi_pinching_growth_regulators', true) );
        update_post_meta( $post_id, '_pv_gi_pest_disease_management', $c['metrics']['pest_disease_management'], get_post_meta($post_id , '_pv_gi_pest_disease_management', true) );
        update_post_meta( $post_id, '_pv_gi_grower_tips', $c['metrics']['grower_tips'], get_post_meta($post_id , '_pv_gi_grower_tips', true) );
        update_post_meta( $post_id, '_pv_gi_finishing_time_5_inch', $c['metrics']['finishing_time_5_inch'], get_post_meta($post_id , '_pv_gi_finishing_time_5_inch', true) );
        update_post_meta( $post_id, '_pv_gi_finishing_time_6_inch', $c['metrics']['finishing_time_6_inch'], get_post_meta($post_id , '_pv_gi_finishing_time_6_inch', true) );
        update_post_meta( $post_id, '_pv_gi_finishing_time_9_inch', $c['metrics']['finishing_time_9_inch'], get_post_meta($post_id , '_pv_gi_finishing_time_9_inch', true) );
        update_post_meta( $post_id, '_pv_gi_finishing_time_12_inch', $c['metrics']['finishing_time_12_inch'], get_post_meta($post_id , '_pv_gi_finishing_time_12_inch', true) );
    }
}
