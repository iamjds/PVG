<?php

function pv_get_product_updates() {
    $product_data = array();
    $curl = curl_init();

    $param = http_build_query([
        'apikey'                    => 'e9txcshdDtFr2smWCPUyY5HPvGm4Uc',
        'introduction_year_before'  => 2020,
        //'professional_release_after'=> strtotime('1900-01-01'),
        'sections'                  => 'features,needs,characteristics,images,series',
        'limit'                     => 50,
        'page'                      => 18
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

    if( isset( $curl_error )) {
        return $curl_error;
    } 


    if( isset( $response ) && count( json_decode($response, true) ) > 0 ) {    

        //loop through all PVG plant data and determine
        //whether its new data or something to be updated
        foreach(json_decode($response, true) as $plant) {        
            $lookup = get_nid_lookup( $plant['nid'] );     

            if( !empty( $lookup ) ) {
                //update existing product in db  
                error_log( 'plant '.$plant['nid'].' already exists' );

                $post_id = 0;
                $json_string = json_encode( $lookup );
                $json_parsed = json_decode( $json_string, true );

                if( count($json_parsed) > 0 ){
                    $post_id = $json_parsed[0]['ID'];
                }

                // *put a timestamp entry check so it won't try to update every product every time it runs
                pv_update_product_attributes( $post_id, $plant );
            } elseif ( empty( $lookup ) ) {
                //create new product in db            
                error_log( 'new plant to add' );       

                $post_id = pv_create_new_product( $plant );
                error_log( 'new product was created' );

                pv_update_product_attributes( $post_id, $plant );
                error_log( 'new product attributes were created' );
            }
        }

        return true;  
    } else {
        error_log( 'no API responses returned' );
        return false;
    }  
}

function get_nid_lookup( $nid ) {
    $does_exist = false;
    
    $args = array(
        'post_type'     => 'product',        
        'meta_key'      => '_pv_nid',
        'meta_value'    => $nid,
    );
    $query = get_posts( $args );
    
    return $query;
}