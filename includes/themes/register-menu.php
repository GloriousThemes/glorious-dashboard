<?php
/**
 * Register the Main Menu required for any theme,
 * Should be above the Dashboard
 *
 * @package     GloriousDashboard
 * @author      Glorious Motive
 * @copyright   2021
 * @license     GPL-2.0+
 */

 



if( ! function_exists ( 'gloriousmotive_register_mainmenu' ) ) {
    function gloriousmotive_register_mainmenu() {
        return "Hello";
        print 'true';
    }   
}






/**
 * Register the Admin Menu above Dashboard
 * 
 *  @since 1.0.0
 */

function glorious_framework_glorious_admin_menu(){
	global $glorious_framework_glorious_admin_screens;

	$admin_menu_page = array (
		'title' => esc_html__('GloriousMotive','glorious-framework'),
		'menu_title' => esc_html__('GloriousMotive','glorious-framework'),
		'capability' => 'edit_theme_options',
		'menu_slug' => 'glorious',
		'function' => 'gloriousdash_dashboard_page',//'glorious_framework_glorious_admin_page_welcome',
		'icon_url' => GLORIOUSDASHURI . 'assets/img/logo.svg',
		'position' => '0',
	);
	$menu_page = apply_filters( 'glorious_framework_glorious_admin_menu_page', $admin_menu_page );


	if ( current_user_can( 'edit_theme_options' ) ) {
		
		add_menu_page( 
			$menu_page['title'], 
			$menu_page['menu_title'], 
			$menu_page['capability'], 
			$menu_page['menu_slug'], 
			$menu_page['function'], 
			$menu_page['icon_url'],  
			$menu_page['position'] 
		);
		
		foreach ( $glorious_framework_glorious_admin_screens as $screen ) {
			add_submenu_page( 
				'glorious', 
				$screen['title'], 
				'- '.$screen['title'], 
				'edit_theme_options', 
				$screen['id'], 
				$screen['function'] 
			);
		}
	}
}

add_action( 'admin_menu', 'glorious_framework_glorious_admin_menu' );







/**
 * Adds additional menu for menu-slug
 *
 * @return void
 */
if( ! function_exists( 'gloriousdash_dashboard_register_additional_menu' ) ) {

    function gloriousdash_dashboard_register_additional_menu() {
        
        
        //register_nav_menu( 'gloriousdash-dashboard', 'GloriousDash Dashboard' );
        /*add_menu_page( 'GloriousDash Dashboard', 
                        'GloriousDash', 
                        'manage_options', 
                        'gloriousdash-dashboard',
                        'gloriousdash_dashboard_page',
                        'dashicons-speed',
                        60 
        );*/
        //Depricated
        //Moved under Glorious Admin Menu
        
        // submenu for list of products
        add_submenu_page( 'glorious', 'Gloriousdash Products', '- Products', 'manage_options', 'gloriousdash-dashboard-products', 'gloriousdash_dashboard_products' );

        // submenu for list of products
        //add_submenu_page( 'glorious', 'Gloriousdash Licenses', '- Licenses', 'manage_options', 'gloriousdash-dashboard-licenses', 'gloriousdash_dashboard_licenses' );

        // submenu for list of products
        //add_submenu_page( 'glorious', 'Gloriousdash System Status', '- System Status', 'manage_options', 'gloriousdash-dashboard-system', 'gloriousdash_dashboard_system' );
        
    }

}

function gloriousdash_dashboard_page() {
	require_once GLORIOUSDASHHOME . 'includes/themes/glorious-landing.php'; //Register Styles
}


function glorious_welcome() {
    require_once GLORIOUSDASHHOME . 'includes/themes/glorious-welcome.php'; //Register Styles

}

function gloriousdash_dashboard_licenses() {
	require_once GLORIOUSDASHHOME . 'includes/glorious-product-licenses.php'; //Register Styles
}
