<?php
/**
 * Plugin Name: Glorious Dashboard
 * Plugin URI:  https://gloriousmotive.com/products/
 * Description: GloriousDash & GloriousThemes Dashboard for all products and plugins.
 * Version:     1.0.0
 * Author:      GloriousMotive
 * Author URI:  https://gloriousmotive.com
 * Text Domain: glorious-dashboard
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     Glorious Dashboard
 * @author      GloriousDash
 * @copyright   2021 GloriousDash ( Kashyap Technologies pvt ltd )
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );
define ('GLORIOUSDASHHOME', plugin_dir_path( __FILE__ ));
define ('GLORIOUSDASHURI', plugin_dir_url( __FILE__ ));
define( 'GLORIOUSVERSION', '1.0.0' );
define( 'GLORIOUSNAME', 'GloriousMotive');

//Execute after plugins are loaded
function gloriousdashboard_init() {

    //current user can manage options
    if ( current_user_can( 'manage_options' ) ) {
        add_action( 'admin_menu', 'gloriousdash_dashboard_register_additional_menu' );
    }

    //$screen = get_current_screen();

}
add_action( 'init', 'gloriousdashboard_init' );



require_once GLORIOUSDASHHOME. 'includes/main.php'; //load main file
