<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function pv_get_product_series(){
    $nIds = get_post_meta( get_the_ID(), '_pv_more_colors_nids', true);    

    if( isset($nIds) && !empty($nIds) ){

        $nid_string = implode(',', unserialize($nIds));    
        $curl = curl_init();

        $param = http_build_query([
            'apikey'                    => 'e9txcshdDtFr2smWCPUyY5HPvGm4Uc',
            'sections'                  => 'images',
            'nid'                       => $nid_string
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
        } else {
            return $response;
        }        
    } else {
        return 'nID not present';
    }
}

?>
<div id="pv_more_colors" class="panel wc-metaboxes-wrapper hidden">
	<!--<p style="color: red; font-weight: 700; margin-left: 20px;">all fields are read only</p>-->

    <div class="pv-more-color-grid">

	<?php
        $res = pv_get_product_series();

        //$nIds = get_post_meta( get_the_ID(), '_pv_more_colors_nids', true);
        //var_dump( $res );    
        
        if ( isset($res) && count($res) > 0 && !is_string($res) ){
            $json_series = json_decode($res, true);
            $nids = array();

            foreach($json_series as $plant) : ?>
            
            <div class="pv-mc-grid-item">
                <?php                    
    
                    $args = array(
                        'post_type'     => 'product',        
                        'meta_key'      => '_pv_nid',
                        'meta_value'    => $plant['nid'],
                    );
                    $query = get_posts( $args );

                    if( !empty( $query ) ) {
                        //var_dump( $query );
                    }

                ?>


                <a href=""> <!-- need to get permalink of post from nID of plant -->
                    <img src="<?php echo $plant['images']['featured']['sizes']['500-sq']; ?>" />
                    <h3><?php echo $plant['title']; ?></h3>
                </a>
            </div>

            <?php endforeach;

            //var_dump( $res );
        } else {
            ?>

            <p>No additional colors for this plant.</p>

            <?php
        }

	?>

	</div>
</div>