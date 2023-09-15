<?php
/*
 * Plugin Name: Plugin Development
 * Description: Start To Learn Plugin Development.
 * Version: 1.0.0
 * Author: Kamrul Hasan
 * Author URI: https://github.com/kamrulcse404
 */




include('ajax-actions.php');


/* Include CSS and Script */
add_action('wp_enqueue_scripts','plugin_css_jsscripts');
function plugin_css_jsscripts() {
    // CSS
    wp_enqueue_style( 'style-css', plugins_url( '/style.css', _FILE_ ));

    // JavaScript
    wp_enqueue_script( 'script-js', plugins_url( '/script.js', _FILE_ ),array('jquery'));

    // Pass ajax_url to script.js
    wp_localize_script( 'script-js', 'plugin_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}


function wc_order_data_table_page() {
  add_menu_page(
    'Order Data Table',
    'Ship to Pathao',
    'manage_options',
    'wc-order-data-table',
    'wc_order_data_table_content',
    'dashicons-admin-generic',
    60
  );


  add_submenu_page(
    'wc-order-data-table',
    'Settings',
    'Settings',
    'manage_options',
    'pathao-shipment-settings',
    'pathao_shipment_settings',
  );

}
add_action( 'admin_menu', 'wc_order_data_table_page' );



function pathao_shipment_settings(){
   include 'settings.php';
}



?>