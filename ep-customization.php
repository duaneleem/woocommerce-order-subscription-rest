<?php 
/*
Plugin Name: Woocommerce default endpoints customization
Description: The plugin modifies woocommerce default endpoints.
Version: 1.1.1.0
Author:      codup.io
Author URI:  http://codup.io/
*/

if (!defined('DS')) {
    define("DS", DIRECTORY_SEPARATOR);
}

include(dirname(__FILE__) . DS . 'inc' . DS . 'class.ep-customization.php');

new EPC_Class();
