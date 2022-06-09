<?php
/**
 * Plugin Name: Advanced All In One Forms
 * Plugin URI : https://github.com/cmssoft/advanced-all-in-one-forms
 * Description: Advanced All In One Forms can manage multiple forms and product inquiry. The form supports Ajax-powered submitting, CAPTCHA, OVERVIEW and so on.
 * Version: 1.0.0
 * Author: cmssoft
 * Author URI : https://github.com/cmssoft/
 * Text Domain : advanced-all-in-one-forms
*/
defined( 'ABSPATH' ) OR exit;
register_activation_hook(   __FILE__, array( 'AI_Alladvancedform', 'on_activation' ) );
register_deactivation_hook( __FILE__, array( 'AI_Alladvancedform', 'on_deactivation' ) );
register_uninstall_hook(    __FILE__, array( 'AI_Alladvancedform', 'on_uninstall' ) );
add_action( 'plugins_loaded', array( 'AI_Alladvancedform', 'init' ) );
if(!defined('AI_ADVANCE_FORM_URL')) {
    define('AI_ADVANCE_FORM_URL', plugin_dir_url( __FILE__ ));
}
if(!class_exists( 'AI_Alladvancedform')){
    require_once('includes/class-ai-alladvancedform.php');
}