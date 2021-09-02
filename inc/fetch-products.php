<?php
/**
 * Fetch products from github for latest display
 * 
 * @since 1.0.0
 **/


echo "Fetched products";

$url = 'https://raw.githubusercontent.com/GloriousDash/glorious-dashboard/main/assets/json/products.json';

$glorious_products_request = wp_remote_get( $url );

if( is_wp_error( $glorious_products_request ) ) {
    return false; // bail now
}

// retrieve the bodu of the JSON file
$glorious_products_body = wp_remote_retrieve_body( $glorious_products_request );

//Decode the body of the JSON Files
$glorious_products_data = json_decode( $glorious_products_body );

//var_dump($glorious_products_body);

if( ! empty ( $glorious_products_data ) ) {
    
    
    echo '<ul>';
    

    foreach ( $glorious_products_data->products as $glorious_products ) {
        echo '<li>';
            echo $glorious_products->title . "<br>";
            echo $glorious_products->desc . "<br>";
            echo $glorious_products->icon . "<br>";
            echo $glorious_products->buylink . "<br>";
            echo $glorious_products->settingslink . "<br>";
        echo '</li>';
    }

    echo '</ul>';
}
