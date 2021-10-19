







    <div class="column is-4">
        <div class="tile-grid-item">
            <div class="tile-grid-item-inner">
                <img src="<?php echo $glorious_products->icon; ?>" data-demo-src="<?php echo $glorious_products->icon; ?>" alt="">
                <div class="meta">
                    <span class="dark-inverted"><?php echo $glorious_products->title;?></span>
                    <span>
                        <span><?php echo $glorious_products->type;?></span>
                    <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                    <span><?php echo $glorious_products->desc; ?></span>
                    </span>
                </div>
            </div>

            <div class="tile-grid-item-inner">
                <div class="meta">
                    <span class="dark-inverted"><?php //echo $glorious_products->title;?></span>
                    <span>
                        <span></span><i aria-hidden="true" class="fas fa-circle icon-separator"></i><div></div>
                        <span></span>
                        <span><a href="<?php echo $glorious_products->buylink; ?>">Buy the Product</a></span>
                    <i aria-hidden="true" class="fas fa-circle icon-separator"></i>
                    <span><a href="<?php echo $glorious_products->settingslink; ?>">Change Settings</a></span>
                    </span>
                </div>
            </div>
        </div>
    </div>






/**
 * Display a custom menu page
 */
function gloriousdash_dashboard_page(){
    esc_html_e( 'Admin Page Test', 'gloriousdash-dashboard' );  
    echo GLORIOUSDASHURI;

    include 'inc/dashboard.php';
}


/**
 * Products Page
 */
function gloriousdash_dashboard_products() {
    include 'inc/dashboard-products.php';
}


/**
 * License Page
 */
function gloriousdash_dashboard_licenses() {
    include 'inc/dashboard-licenses.php';
}



/**
 * System Status Page
 */
function gloriousdash_dashboard_system() {
    require_once 'inc/dashboard-system-status.php';
}




//include the style sheets files
//include '../inc/register-css.php';
//include '../inc/register-scripts.php';