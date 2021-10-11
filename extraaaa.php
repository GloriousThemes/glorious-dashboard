














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