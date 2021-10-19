<?php
/**
 * Plugin Name: Glorious
 * Plugin URI:  https://gloriousmotive.com/products/glorious
 * Description: GloriousMotive & GloriousThemes Dashboard for all products and plugins.
 * Version:     1.0.0
 * Author:      GloriousMotive
 * Author URI:  https://gloriousmotive.com
 * Text Domain: glorious
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     Glorious Dashboard
 * @author      GloriousMotive
 * @copyright   2021 GloriousMotive ( Kashyap Technologies pvt ltd )
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

    //$gloriousCurrentScreen = get_current_screen();
    //$currentScreen->parent_base;


}
add_action( 'init', 'gloriousdashboard_init' );





require_once GLORIOUSDASHHOME. 'includes/main.php'; //load main file
