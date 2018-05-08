<?php 
/*
Plugin Name: WooCommerce Default Endpoints Customization
Description: The plugin modifies woocommerce default endpoints.
Version: 1.1.2
Author:      codup.io
Author URI:  http://codup.io/
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

if (!defined('DS')) {
    define("DS", DIRECTORY_SEPARATOR);
}

include(dirname(__FILE__) . DS . 'inc' . DS . 'class.ep-customization.php');

new EPC_Class();
