<?php 
/*
Plugin Name: WooCommerce Default Endpoints Customization
Plugin URI: https://blog.duaneleem.com/woocommerce-subscription-rest-api-information/
Description: This plugin modifies woocommerce default endpoint to include the amount of orders in a subscription.  Plugin originally developed by Codup.io and modified by Duane Leem with bug fixes.
Version: 1.1.2
Author:      Duane Leem
Author URI:  https://duaneleem.com/
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

if (!defined('DS')) {
    define("DS", DIRECTORY_SEPARATOR);
}

include(dirname(__FILE__) . DS . 'inc' . DS . 'class.ep-customization.php');

new EPC_Class();
