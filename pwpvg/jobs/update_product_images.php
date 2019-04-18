<?php

function pv_get_product_images() {
    $curl = curl_init();

    $param = http_build_query([
        'apikey' => 'e9txcshdDtFr2smWCPUyY5HPvGm4Uc',
        'introduction_year_before' => 1900,
        'section' => 'images'
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

    //return "https://www.provenwinners.com/api/v0/plant/search" . $param;
}