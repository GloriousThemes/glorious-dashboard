<?php
//register scripts required for GloriousDash Dashboard



wp_register_script(
    'gloriousdash-dashboard-app',
    GLORIOUSDASHURI . 'assets/js/app.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-app' );




wp_register_script(
    'gloriousdash-dashboard-component',
    GLORIOUSDASHURI . 'assets/js/component.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-component' );



wp_register_script(
    'gloriousdash-dashboard-functions',
    GLORIOUSDASHURI . 'assets/js/functions.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-functions' );



wp_register_script(
    'gloriousdash-dashboard-main',
    GLORIOUSDASHURI . 'assets/js/main.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-main' );



wp_register_script(
    'gloriousdash-dashboard-popover',
    GLORIOUSDASHURI . 'assets/js/popover.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-popover' );



wp_register_script(
    'gloriousdash-dashboard-touch',
    GLORIOUSDASHURI . 'assets/js/touch.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-touch' );



wp_register_script(
    'gloriousdash-dashboard-widgets',
    GLORIOUSDASHURI . 'assets/js/widgets.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-widgets' );



wp_register_script(
    'gloriousdash-dashboard-tile-grid',
    GLORIOUSDASHURI . 'assets/js/tile-grid.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-tile-grid' );



wp_register_script(
    'gloriousdash-dashboard-syntax',
    GLORIOUSDASHURI . 'assets/js/syntax.js',
    array( ),
    '1.0',
    true
);
wp_enqueue_script( 'gloriousdash-dashboard-syntax' );