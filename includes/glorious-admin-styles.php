<?php

function gloriousmotive_styles() {
     //wp_enqueue_style( 'glorious-hub', plugins_url( '/assets/css/hub.css', __FILE__ ), array( ), 1.0 );
     wp_enqueue_style( 'glorious-hub', GLORIOUSDASHURI. 'assets/css/hub.css', array(), '1.0.0' );
     

     wp_enqueue_style( 'glorious-bootstrap', GLORIOUSDASHURI. 'styles/assets/plugins/bootstrap/css/bootstrap.min.css', array(), '1.0.0' );
     wp_enqueue_style( 'glorious-maindash', GLORIOUSDASHURI. 'styles/assets/css/main.min.css', array(), '1.0.0' );
     wp_enqueue_style( 'glorious-horizontal-menu', GLORIOUSDASHURI. 'styles/assets/css/horizontal-menu/horizontal-menu.css', array(), '1.0.0' );

     wp_enqueue_script( 'glorious-bootstrap-js', GLORIOUSDASHURI. 'styles/assets/plugins/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true );

}
// Register style sheet.
add_action( 'admin_enqueue_scripts', 'gloriousmotive_styles' );

//Register the styles only if screen is 'glorious'


function glorious_material_icons() {
     echo'<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">';
}
add_action( 'admin_head' , 'glorious_material_icons' );
?>