<?php
/**
 * Plugin Name: Glorious Dashboard
 * Plugin URI:  https://gloriousdash.com/products/
 * Description: GloriousDash & GloriousThemes Dashboard for all products and plugins.
 * Version:     1.0.0
 * Author:      GloriousDash
 * Author URI:  https://gloriousdash.com
 * Text Domain: glorious-dashboard
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     Glorious Dashboard
 * @author      GloriousDash
 * @copyright   2021 GloriousDash ( Kashyap Global Services pvt ltd )
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

define ('GLORIOUSDASHHOME', plugin_dir_path( __FILE__ ));
define ('GLORIOUSDASHURI', plugin_dir_url( __FILE__ ));

//Execute after plugins are loaded
add_action( 'init', 'gloriousdashboard_init' );

function gloriousdashboard_init() {
    //current user can manage options
    if ( current_user_can( 'manage_options' ) ) {
        add_action( 'admin_menu', 'gloriousdash_dashboard_register_additional_menu' );
    }

    //$screen = get_current_screen();
}




/**
 * Adds additional menu for menu-slug
 *
 * @return void
 */
function gloriousdash_dashboard_register_additional_menu() {
    //register_nav_menu( 'gloriousdash-dashboard', 'GloriousDash Dashboard' );
    add_menu_page( 'GloriousDash Dashboard', 
                    'GloriousDash', 
                    'manage_options', 
                    'gloriousdash-dashboard',
                    'gloriousdash_dashboard_page',
                    'dashicons-speed',
                    60 
    );

    // submenu for list of products
    add_submenu_page( 'gloriousdash-dashboard', 'Gloriousdash Products', '- Products', 'manage_options', 'gloriousdash-dashboard-products', 'gloriousdash_dashboard_products' );

    // submenu for list of products
    add_submenu_page( 'gloriousdash-dashboard', 'Gloriousdash Licenses', '- Licenses', 'manage_options', 'gloriousdash-dashboard-licenses', 'gloriousdash_dashboard_licenses' );

    // submenu for list of products
    add_submenu_page( 'gloriousdash-dashboard', 'Gloriousdash System Status', '- System Status', 'manage_options', 'gloriousdash-dashboard-system', 'gloriousdash_dashboard_system' );
    
}
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
    include 'inc/dashboard-system-status.php';
}




//include the style sheets files
include 'inc/register-css.php';
include 'inc/register-scripts.php';