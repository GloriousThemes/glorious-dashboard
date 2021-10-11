<?php
/**
 * Load the Required Files on Demand
 * @since 1.0.0
 * 
 * @author GloriousMotive
 */


// Register the main menu for the theme
if( function_exists( 'gloriousmotive_register_mainmenu' ) ) {
    gloriousmotive_register_mainmenu();
}

require_once GLORIOUSDASHHOME . 'includes/themes/register-menu.php'; //load register main menu file
require_once GLORIOUSDASHHOME . 'includes/themes/fetch-themes.php'; //load register main menu file
require_once GLORIOUSDASHHOME . 'includes/glorious-admin-styles.php'; //Register Styles







?>