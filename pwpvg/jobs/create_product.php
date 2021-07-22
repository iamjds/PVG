<?php

function pv_create_new_product( $plant ){

    // Create product object
    $new_product = array(
        'post_title'    => wp_strip_all_tags( $plant['title'] ),
        'post_status'   => 'publish',
        'post_author'   => 1,
        //'post_category' => array( 8,39 )
        'comment_status'=> 'closed',
        'ping_status'   => 'closed',
        'post_parent'   => 0,
        'menu_order'    => 0,
        'post_type'     => 'product',
        'comment_count' => 0,
    );

    // Insert product into the db
    $new_post_id = wp_insert_post( $new_product );

    if( $new_post_id > 0 ){
        pv_add_new_nid( $new_post_id, $plant['nid'] );
        write_log( 'created new product post for ' . $plant['nid'] );
    } else {
        error_log( 'couldnt create new product post for ' . $plant['nid'] );
        return false;
    }

    // Lastly associate any images with new product
    pv_add_new_product_images( $new_post_id, $plant );

    return $new_post_id;

}

function pv_add_new_nid( $post_id, $nid ){
    $add_nid = add_post_meta( $post_id, '_pv_nid', $nid );
    if( $add_nid == false ){ // alert logs if nid could not be added to db
        error_log( 'couldnt add new nid for plant ' . $nid );
        return false;
    }
    pv_add_prelim_attributes( $post_id );
}

function pv_add_prelim_attributes( $post_id ){
    
    try {
        
        //WooCommerce preliminary post meta data
        add_post_meta( $post_id, '_wc_review_count', 0);	
        add_post_meta( $post_id, '_wc_rating_count', array() );
        add_post_meta( $post_id, '_wc_average_rating', 0 );
        //add_post_meta( $post_id, '_edit_lock', 1554344221:1 );
        add_post_meta( $post_id, '_edit_last', 1 );
        add_post_meta( $post_id, '_thumbnail_id', 0 ); //need to get the correct ID of thumbnail from image post ID
        add_post_meta( $post_id, '_sku', NULL ); //this may break something
        add_post_meta( $post_id, '_regular_price', NULL );
        add_post_meta( $post_id, '_sale_price', NULL );
        add_post_meta( $post_id, '_sale_price_dates_from', NULL );
        add_post_meta( $post_id, '_sale_price_dates_to', NULL );
        add_post_meta( $post_id, 'total_sales', 0 );
        add_post_meta( $post_id, '_tax_status', 'taxable' );
        add_post_meta( $post_id, '_tax_class', NULL );
        add_post_meta( $post_id, '_manage_stock', 'no' );
        add_post_meta( $post_id, '_backorders', 'no' );
        add_post_meta( $post_id, '_low_stock_amount', NULL );
        add_post_meta( $post_id, '_sold_individually', 'no' );
        add_post_meta( $post_id, '_weight', NULL );
        add_post_meta( $post_id, '_length', NULL );
        add_post_meta( $post_id, '_width', NULL );
        add_post_meta( $post_id, '_height', NULL );
        add_post_meta( $post_id, '_upsell_ids', array() );
        add_post_meta( $post_id, '_crosssell_ids', array() );
        add_post_meta( $post_id, '_purchase_note', NULL );
        add_post_meta( $post_id, '_default_attributes', array() );
        add_post_meta( $post_id, '_virtual', 'no' );
        add_post_meta( $post_id, '_downloadable', 'no' );
        add_post_meta( $post_id, '_product_image_gallery', 0 ); //need to populate this with plant image data after inserting into the media library and getting post IDs to add here
        add_post_meta( $post_id, '_download_limit', -1 );
        add_post_meta( $post_id, '_download_expiry', -1 );
        add_post_meta( $post_id, '_stock', NULL );
        add_post_meta( $post_id, '_stock_status', 'instock' );
        add_post_meta( $post_id, '_product_version', '3.5.6' );
        add_post_meta( $post_id, '_price', NULL );
        add_post_meta( $post_id, '_product_attributes', array() );

    } catch (Exception $e) {
        error_log( 'error adding post meta: ' . $e );
    }

}

function pv_wp_post_attachments( $parent_id, $image, $title ){    
    global $wpdb;

    $featured_filename = $image['sizes']["1024"];
    $image_post_id = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE guid=%s", $featured_filename ) );

    // $featured_attachment = array(
    //     'guid'           => $featured_filename,
    //     'post_mime_type' => 'image/jpeg',
    //     'post_title'     => sanitize_title( $title ),
    //     'post_status'    => 'inherit'
    // );

    $new_product = array(
        'ID'            => ($image_post_id ? $image_post_id : 0),
        'post_title'    => sanitize_title( $title ),
        'post_status'   => 'inherit',
        'post_author'   => 1,
        'guid'          => $featured_filename,
        'comment_status'=> 'open',
        'ping_status'   => 'closed',
        'post_parent'   => $parent_id,
        'menu_order'    => 0,
        'post_type'     => 'attachment',
        'post_mime_type' => 'image/jpeg',
        'comment_count' => 0,
    );


    // Insert new image post into db
    $image_post_id = wp_insert_post( $new_product );

    /*
    *   The following traditional method of creating attachment posts
    *   and linking them to new products cannot be used for this site
    *   because we are referencing images that will not be stored in
    *   the WordPress Upload directory, therefore the wp_insert_attachment
    *   function cannot work properly
    */
    // $featured_post_id = wp_insert_attachment( $featured_attachment, $featured_filename, $parent_id );    

    // // Generate the metadata for the attachment, and update the db record.
    // $attach_data = wp_generate_attachment_metadata( $featured_post_id, $featured_filename );
    // wp_update_attachment_metadata( $featured_post_id, $attach_data );

    // set_post_thumbnail( $parent_id, $featured_post_id );

    return $image_post_id;

}

function pv_add_new_product_images( $post_id, $plant ){

    $image_post_ids = array();
    $gallery = array();

    // Create Featured Image first
    try {
        $image_id = pv_wp_post_attachments( $post_id, $plant['images']['featured'], $plant['title'] );   
        $image_post_ids['featured'] = $image_id;

        // Then add all the other images for the new plant
        foreach( $plant['images']['all'] as $image ){            
            if( $image['nid'] != $plant['images']['featured']['nid']){
                $image_id = pv_wp_post_attachments( $post_id, $image, $plant['title'] );
                array_push( $gallery, $image_id );
            }
        }        

        // take image post ID array and add them to featured image / product gallery        

        if( count($gallery) > 0 ){
            $image_post_ids['gallery'] = $gallery;            
        }        

        if( count($image_post_ids) > 0 ){
            //set product image
            if( isset($image_post_ids['featured']) ){
                set_post_thumbnail($post_id, $image_post_ids['featured']);
            }

            //set product gallery
            if( isset($image_post_ids['gallery']) && count($image_post_ids['gallery']) > 0 ){
                update_post_meta( $post_id, '_product_image_gallery', implode(',', $image_post_ids['gallery']) );
            }

        }

        write_log( 'post ' . $post_id . ' images have been added/updated' );
    } catch(Exception $e){
        error_log( 'failed to create new image: ' . $e );
    }

}
