<?php

/**
 * Plugin Name: Advanced All In One Forms
 * Plugin URI : https://www.vrinsofts.com/advanced-all-in-one-forms
 * Description: Advanced All In One Forms can manage multiple forms and product inquiry. The form supports Ajax-powered submitting, CAPTCHA, SMTP, OVERVIEW and so on.
 * Version: 1.1.0
 * Author: Vrinsoft
 * Author URI : https://www.vrinsofts.com/
 * Text Domain : advanced-all-in-one-forms
 */
defined( 'ABSPATH' ) OR exit;
register_activation_hook(   __FILE__, array( 'All_Advanced_Form_Class', 'on_activation' ) );
register_deactivation_hook( __FILE__, array( 'All_Advanced_Form_Class', 'on_deactivation' ) );
register_uninstall_hook(    __FILE__, array( 'All_Advanced_Form_Class', 'on_uninstall' ) );

add_action( 'plugins_loaded', array( 'All_Advanced_Form_Class', 'init' ) );

if ( ! class_exists( 'All_Advanced_Form_Class' ) )
{
    require_once('All_Advanced_Form_Class.php');
}
?>