<?php

function pv_get_product_updates($sections) {
    $curl = curl_init();

    /**
     * Check if $sections is null
     * and if it isn't only query 
     * exactly what is specified
     * in the cron job options
     */
    $selected_sections = '';

    if( $sections != null && !empty( $sections ) ){
        if( is_array( $sections ) ) {
            $selected_sections = join(',', $sections);
        } else {
            $selected_sections = $sections;
        }
    } else {
        $selected_sections = 'identity,features,needs,characteristics,images,series,culture';
        // $selected_sections = 'culture';
    }

    $param = http_build_query([
        'apikey'                    => 'e9txcshdDtFr2smWCPUyY5HPvGm4Uc',
        // 'introduction_year_before'  => 2021,
        'sections'                  => $selected_sections,
        'nid'                       => '397957,425971,390513,398276,398279,398284,397715,398325',
        'limit'                     => 50,
        'page'                      => 1
    ]);

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.provenwinners.com/api/v0/plant/search?" . $param,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if( isset( $err )) {
        write_log( $err );
    } 


    if( isset( $response ) && count( json_decode($response, true) ) > 0 ) {    

        //loop through all PVG plant data and determine
        //whether its new data or something to be updated
        foreach(json_decode($response, true) as $plant) { 
            
            // lookup does not take into products that are marked as private
            // need to conduct a lookup that includes products that are already marked as private
            $lookup = get_nid_lookup( $plant['nid'] );              

            if( !empty( $lookup ) ) {
                // update existing product in db  
                write_log( 'plant '.$plant['nid'].' already exists' );

                $post_id = 0;
                $json_string = json_encode( $lookup );
                $json_parsed = json_decode( $json_string, true );

                if( count($json_parsed) > 0 ){
                    $post_id = $json_parsed[0]['ID'];
                }

                // update images if needed
                pv_add_new_product_images( $post_id, $plant );

                // *put a timestamp entry check so it won't try to update every product every time it runs
                pv_update_product_attributes( $post_id, $plant );                

                // update post title to be series + variety only, instead of including the series, genus, etc.
                pv_update_plant_title( $post_id, $plant );

            } elseif ( empty( $lookup ) ) {
                //create new product in db            
                write_log( 'new plant to add' );       

                $post_id = pv_create_new_product( $plant );
                write_log( 'new product was created' );

                pv_update_product_attributes( $post_id, $plant );
                write_log( 'new product attributes were created' );
            }
        }

        return true;  
    } else {
        write_log( 'no API responses returned' );
        return false;
    }  
}

function get_nid_lookup( $nid ) {
    $does_exist = false;
    
    $args = array(
        'post_type'     => 'product',        
        'meta_key'      => '_pv_nid',
        'post_status'   => 'any',
        'meta_value'    => $nid,
    );
    $query = get_posts( $args );
    
    //write_log( $query );

    return $query;
}

function pv_update_plant_title( $post_id, $plant_data ) {
    if( array_key_exists('identity', $plant_data) ) {
        $series = $plant_data['identity']['series'];
        $variety_name = $plant_data['identity']['variety'];
        $new_title = $series . ' ' . $variety_name;

        if( $new_title != null && isset($new_title) && $new_title != '' ) {
            write_log('editing plant name');

            wp_update_post( [
                'ID'            => $post_id,
                'post_title'    => $new_title
            ]);
        }
    }
}
