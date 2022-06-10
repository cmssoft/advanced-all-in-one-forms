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
register_activation_hook(   __FILE__, array( 'AAIOF_Alladvancedform', 'on_activation' ) );
register_deactivation_hook( __FILE__, array( 'AAIOF_Alladvancedform', 'on_deactivation' ) );
register_uninstall_hook(    __FILE__, array( 'AAIOF_Alladvancedform', 'on_uninstall' ) );
add_action( 'plugins_loaded','AAIOF_core');
if(!defined('AAIOF_ADVANCE_FORM_URL')) {
    define('AAIOF_ADVANCE_FORM_URL', plugin_dir_url( __FILE__ ));
}
if(!class_exists( 'AAIOF_Alladvancedform')){
    require_once('includes/class-ai-alladvancedform.php');
}
if(!function_exists( 'AAIOF_core')){
    function AAIOF_core(){
        $ai_form = new \AdvancedAllInOneForms\AAIOF_Alladvancedform();                
        if(method_exists(AAIOF_Alladvancedform::class, 'init')){  
            $ai_form->init();
        }        
    }
}