<?php
/**
 * Fetch products from github for latest display
 * 
 * @since 1.0.0
 **/


//echo "Fetched products";

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
    
    
    

    foreach ( $glorious_products_data->products as $glorious_products ) {

            //echo $glorious_products->title . "<br>";
            //echo $glorious_products->desc . "<br>";
            //echo $glorious_products->icon . "<br>";
            //echo $glorious_products->buylink . "<br>";
            //echo $glorious_products->settingslink . "<br>";


    ?>


<div class="col-xl-4">
    <div class="card widget widget-connection-request">
        <div class="card-header">
            <h5 class="card-title"><?php echo $glorious_products->type;?><span class="badge badge-secondary badge-style-light">17 min ago</span></h5>
        </div>
        <div class="card-body">
            <div class="widget-connection-request-container d-flex">
                <div class="widget-connection-request-avatar">
                    <div class="avatar avatar-xl m-r-xs">
                        <img src="<?php echo $glorious_products->icon; ?>" data-demo-src="<?php echo $glorious_products->icon; ?>" alt="">
                    </div>
                </div>
                <div class="widget-connection-request-info flex-grow-1">
                    <span class="widget-connection-request-info-name">
                        <?php echo $glorious_products->title;?>
                    </span>
                    <span class="widget-connection-request-info-count">
                        <?php echo $glorious_products->desc; ?>
                    </span>
                    <span class="widget-connection-request-info-about">
                        
                    </span>
                </div>
            </div>
            <div class="widget-connection-request-actions d-flex">
                <a href="<?php echo $glorious_products->buylink; ?>" class="btn btn-primary btn-style-light flex-grow-1 m-r-xxs"><i class="material-icons">done</i>Accept</a>
                <a href="<?php echo $glorious_products->settingslink; ?>" class="btn btn-danger btn-style-light flex-grow-1 m-l-xxs"><i class="material-icons">close</i>Ignore</a>
            </div>
        </div>
    </div>
</div>








    <?php
    }
}
