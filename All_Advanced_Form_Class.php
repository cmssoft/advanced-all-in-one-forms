<?php

class All_Advanced_Form_Class
{
    protected static $instance;

    public static function init()
    {
        is_null( self::$instance ) AND self::$instance = new self;
        return self::$instance;
    }

    public static function on_activation()
    {
        global $wpdb;
        if ( ! current_user_can( 'activate_plugins' ) )
            return;
        $plugin = isset( $_REQUEST['plugin'] ) ? $_REQUEST['plugin'] : '';
        
        check_admin_referer( "activate-plugin_{$plugin}" );
        
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE `{$wpdb->base_prefix}advanced_all_form_entry` (
          ID int(11) AUTO_INCREMENT NOT NULL,
          vcf_id bigint(20) UNSIGNED NOT NULL,
          data_id bigint(20) UNSIGNED NOT NULL,
          name varchar(250) NOT NULL,
          value text NOT NULL,
          created_at datetime NOT NULL DEFAULT current_timestamp(),
          modified_at datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
          PRIMARY KEY  (ID)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public static function on_deactivation()
    {
        if ( ! current_user_can( 'activate_plugins' ) )
            return;
        $plugin = isset( $_REQUEST['plugin'] ) ? $_REQUEST['plugin'] : '';
        check_admin_referer( "deactivate-plugin_{$plugin}" );
    }

    public static function on_uninstall()
    {
        
    }
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'frontend_scripts'));
        add_action('admin_enqueue_scripts', array($this, 'backend_scripts'));
        add_action( 'init', array($this, 'my_custom_post_type') );
        add_shortcode('advanced-form', array($this, 'advanced_form_front_view'));

        /* Ajax Hooks */

        add_action('wp_ajax_select_field', array($this,'select_field'));
        add_action( 'save_post', array($this,'get_before_update_postdata'));
        add_action( 'admin_menu', array($this,'vcf_options_page'));
        add_action( 'edit_form_after_title', array($this, 'contact_form_tab_content'));

        add_action('wp_ajax_recaptcha_generate',array($this, 'recaptcha_generate'));
        add_action('wp_ajax_smtp_generate',array($this, 'smtp_generate'));
        add_action('wp_ajax_advance_setting_form',array($this, 'advance_setting_form'));
        add_action('wp_ajax_vcfform_insert_data',array($this, 'vcfform_insert_data'));
        add_action('wp_ajax_nopriv_vcfform_insert_data',array($this, 'vcfform_insert_data'));

        add_action('wp_ajax_recaptcha_reset',array($this, 'recaptcha_reset'));

        add_action('wp_ajax_delete_list_view',array($this, 'delete_list_view'));

        add_action('wp_ajax_smtp_reset',array($this, 'smtp_reset'));

        add_action('wp_ajax_advance_setting_reset',array($this, 'advance_setting_reset'));

        add_filter( 'gettext', array($this, 'change_publish_button'), 10, 2 );

        /** Start Woocommerce Hooks **/
        add_action( 'woocommerce_before_cart',array($this, 'action_woocommerce_after_cart_table'), 10, 0 );
        add_action( 'woocommerce_after_single_product_summary',array($this, 'woocommerce_after_add_to_cart_button'), 10, 0 );

        add_action( 'woocommerce_after_add_to_cart_form',array($this, 'woocommerce_add_pinquiry_button'), 10, 0 );
		
		add_shortcode('advanced_product_enquiry',array($this,'wc_add_pinquiry_button_shortcode'));

        add_action( 'woocommerce_after_cart_table',array($this, 'woocommerce_cart_pinquiry_button'), 10, 0 );
		
		add_shortcode('advanced_cart_enquiry',array($this,'wc_cart_pinquiry_button_shortcode'));

        /** End Woocommerce Hooks **/


    }
    public function backend_scripts()
    {
        wp_register_style( 'custom-css', plugin_dir_url( __FILE__ ) . 'assets/css/backend/custom.css' );
        wp_enqueue_style( 'custom-css' );
        wp_register_style( 'fonts-css', plugin_dir_url( __FILE__ ) . 'assets/css/font-awesome.min.css' );
        wp_enqueue_style( 'fonts-css' );
        wp_register_style( 'dataTable-css', plugin_dir_url( __FILE__ ) . 'assets/css/backend/jquery.dataTables.min.css' );
        wp_enqueue_style( 'dataTable-css' );
        wp_enqueue_script( 'ui-js', plugin_dir_url( __FILE__ ) . 'assets/js/backend/jquery-ui.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'jquery-js', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.validate.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'dataTables-js', plugin_dir_url( __FILE__ ) . 'assets/js/backend/jquery.dataTables.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'custom-js', plugin_dir_url( __FILE__ ) . 'assets/js/backend/custom.js', array( 'jquery' ) );
        wp_localize_script( 'custom-js', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

    }
    public function frontend_scripts()
    {
        wp_register_style( 'bootstrap-css', plugin_dir_url( __FILE__ ) . 'assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap-css' );
        wp_register_style( 'custom-css', plugin_dir_url( __FILE__ ) . 'assets/css/frontend/custom.css' );
        wp_enqueue_style( 'custom-css' );
         wp_register_style( 'timepicker-css', plugin_dir_url( __FILE__ ) . 'assets/css/frontend/jquery.timepicker.min.css' );
        wp_enqueue_style( 'timepicker-css' );
        wp_register_style( 'jquery-ui-css', plugin_dir_url( __FILE__ ) . 'assets/css/frontend/jquery-ui.css' );
        wp_enqueue_style( 'jquery-ui-css' );
        wp_enqueue_script( 'bootstrap-js', plugin_dir_url( __FILE__ ) . 'assets/js/bootstrap.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'jquery-js', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'validate-js', plugin_dir_url( __FILE__ ) . 'assets/js/frontend/jquery.validate.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'ui-js', plugin_dir_url( __FILE__ ) . 'assets/js/frontend/jquery-ui.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'custom-js', plugin_dir_url( __FILE__ ) . 'assets/js/frontend/custom.js', array( 'jquery' ) );
        wp_enqueue_script( 'additional-js', plugin_dir_url( __FILE__ ) . 'assets/js/frontend/additional-methods.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'timepicker-js', plugin_dir_url( __FILE__ ) . 'assets/js/frontend/jquery.timepicker.min.js', array( 'jquery' ) );
         wp_localize_script( 'custom-js', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    }
    public function my_custom_post_type()
    {
        $supports = array(
            'title'
            );
        $args = array(
          'supports' => $supports,
          'public' => true,
          'publicly_queryable' => false,
          'show_ui' => true,
          'exclude_from_search' => true,
          'show_in_nav_menus' => false,
          'rewrite' => false,
          'labels' => array(
            'name' => __( 'All In One Forms' ),
            'singular_name' => __( 'All In One Form' ),
            'add_new_item' => __( 'Add New Form' ),
            'add_new' => __( 'Add New Form' ),
            'edit_item' => __( 'Edit Form' ),
            ),
          'has_archive' => false,

        );
        register_post_type( 'advanced_form', $args );
    }



    function change_publish_button( $translation, $text )
    {
        if ( 'advanced_form' == get_post_type() && $text == 'Update')
        {
            return 'Save';
        }

        return $translation;
    }
    public function vcf_options_page()
    {
        remove_submenu_page('edit.php?post_type=advanced_form','post-new.php?post_type=advanced_form');
        add_submenu_page( 'edit.php?post_type=advanced_form', 'Recaptcha', 'Recaptcha', 'manage_options', 'cf-recaptcha-page', array($this,'advanced_form_submenu_captcha_page' ));
        add_submenu_page( 'edit.php?post_type=advanced_form', 'Overview', 'Overview', 'manage_options', 'cf-overview-page', array($this,'advanced_form_submenu_overview_page' ));
        add_submenu_page( 'edit.php?post_type=advanced_form', 'SMTP Setting', 'SMTP Setting', 'manage_options', 'cf-smtp-page', array($this,'advanced_form_submenu_smtp_page' ));
        if ( class_exists( 'WooCommerce' ) )
        {
        add_submenu_page( 'edit.php?post_type=advanced_form', 'Advance Setting', 'Advance Setting', 'manage_options', 'cf-advance-page', array($this,'advanced_form_submenu_advance_page' ));
            }
    }

    public function recaptcha_generate()
    {
        $params = array();
        parse_str($_POST['formData'], $params);
        $sitekey = $params['sitekey'];
        $secretkey = $params['secret'];

        update_option('gcaptcha_sitekey', $sitekey );
        update_option('gcaptcha_secret', $secretkey );
    }

    public function smtp_generate()
    {
        $params = array();
        parse_str($_POST['formData'], $params);
        $vcf7_smtp_host = $params['vcf7_smtp_host'];
        $vcf7_smtp_port = $params['vcf7_smtp_port'];
        $vcf7_smtp_ssl = $params['vcf7_smtp_ssl'];
        $vcf7_smtp_username = $params['vcf7_smtp_username'];
        $vcf7_smtp_pwd = $params['vcf7_smtp_pwd'];

        update_option('vcf7_smtp_host', $vcf7_smtp_host );
        update_option('vcf7_smtp_port', $vcf7_smtp_port );
        update_option('vcf7_smtp_ssl', $vcf7_smtp_ssl );
        update_option('vcf7_smtp_username', $vcf7_smtp_username );
        update_option('vcf7_smtp_pwd', $vcf7_smtp_pwd );
    }

    public function advance_setting_form()
    {
        $params = array();
        parse_str($_POST['formData'], $params);

       // print_r($params); die();
        $show_enquiry_detail_page = $params['show_enquiry_detail_page'];
        $pdetail_form_id = $params['pdetail_form_id'];
        $show_enquiry_cart_page = $params['show_enquiry_cart_page'];
        $cart_form_id = $params['cart_form_id'];
        $enquiry_modal_title = $params['enquiry_modal_title'];
        $add_btn_title_enquiry = $params['add_btn_title_enquiry'];
		$add_enquiry_btn_details = $params['add_enquiry_btn_details'];
		$add_enquiry_btn_cart = $params['add_enquiry_btn_cart'];

        update_option('show_enquiry_detail_page', $show_enquiry_detail_page );
        update_option('pdetail_form_id', $pdetail_form_id );
        update_option('show_enquiry_cart_page', $show_enquiry_cart_page );
        update_option('cart_form_id', $cart_form_id );
        update_option('enquiry_modal_title', $enquiry_modal_title );
        update_option('add_btn_title_enquiry', $add_btn_title_enquiry );
		update_option('add_enquiry_btn_details', $add_enquiry_btn_details );
		update_option('add_enquiry_btn_cart', $add_enquiry_btn_cart );
    }

    public function recaptcha_reset()
    {
        update_option('gcaptcha_sitekey', '');
        update_option('gcaptcha_secret', '');
    }

    public function delete_list_view()
    {
        $id = $_POST['data_id'];
        global $wpdb;
        $table = $wpdb->prefix . "advanced_all_form_entry";
        $results = $wpdb->delete( $table, array( 'data_id' => $id ) );
        echo $results; die();
    }

    public function smtp_reset()
    {
        update_option('vcf7_smtp_host', '');
        update_option('vcf7_smtp_port', '');
        update_option('vcf7_smtp_ssl', '');
        update_option('vcf7_smtp_username', '');
        update_option('vcf7_smtp_pwd', '');
    }

    public function advance_setting_reset()
    {
        //echo 'tewst'; die();
        update_option('show_enquiry_detail_page','');
        update_option('pdetail_form_id', '');
        update_option('show_enquiry_cart_page', '');
        update_option('cart_form_id', '');
    }

    public function advanced_form_submenu_captcha_page()
    {
        if ( ! class_exists( 'reCaptcha_Form_Class' ) )
        {
            require_once('reCaptcha_Form_Class.php');
        }
        $captcha = new reCaptcha_Form_Class;
        $captcha->recaptcha_form_details();
    }

    public function advanced_form_submenu_overview_page()
    {
        if ( ! class_exists( 'Overview_Class' ) )
        {
            require_once('Overview_Class.php');
        }
        $overviw = new Overview_Class;
        $overviw->wp_list_tables();
    }

    public function advanced_form_submenu_smtp_page()
    {
        if ( ! class_exists( 'Smtp_Form_Class' ) )
        {
            require_once('Smtp_Form_Class.php');
        }
        $captcha = new Smtp_Form_Class;
        $captcha->smtp_form_details();
    }

    public function advanced_form_submenu_advance_page()
    {
        if ( ! class_exists( 'Advance_Form_Class' ) )
        {
            require_once('Advance_Form_Class.php');
        }
        $advance = new Advance_Form_Class;
        $advance->advance_form_details();
    }
    
    public function select_field()
    {
        if ( ! class_exists( 'Custom_Fields_Class' ) )
        {
            require_once('Custom_Fields_Class.php');
        }
        $field = $_POST['field'];
        $fieldsobj = new Custom_Fields_Class;
        $rand = rand();
        $fieldsobj->$field($field,$rand);
        die();  
    }

    public function get_before_update_postdata( $post_id )
    {

		if(isset($_POST['input']))
		{
			foreach($_POST['input'] as $key=>$value)
			{
				$data['type'] = $value;
				$data['label'] = $_POST['label'][$key];
				$data['name'] = $_POST['name'][$key];
				$data['placeholder'] = $_POST['placeholder'][$key];
				$data['required'] = $_POST['required'][$key];
				$data['id'] = $_POST['id'][$key];
				$data['class'] = $_POST['class'][$key];
				$data['max'] = $_POST['max'][$key];
				$data['min'] = $_POST['min'][$key];
				$data['filesize'] = $_POST['filesize'][$key];
				$data['extension'] = $_POST['extension'][$key];
				$data['rows'] = $_POST['rows'][$key];
				$data['columns'] = $_POST['columns'][$key];
				$data['option'] = $_POST['option'][$key];
				$data['option_val'] = $_POST['option_val'][$key];
                $data['rw-cls'] = $_POST['rw-cls'][$key];
                $data['raws'] = $_POST['raws'][$key];
                $data['rawed'] = $_POST['rawed'][$key];
                $data['cl-cls'] = $_POST['cl-cls'][$key];
                $data['col-data'] = $_POST['col-data'][$key];
                $data['col-data-num'] = $_POST['col-data-num'][$key];

				if(!empty($data['type']))
				{
					$field[$key] = $data;
				}
			}
        }
        $field_data = serialize($field);

     ///   echo $field_data; die();

        $vcf_mail = $_POST['vcf7-mail'];

        $mail['recipient'] = $vcf_mail['recipient'];
        $mail['sender'] = $vcf_mail['sender'];
        $mail['subject'] = $vcf_mail['subject'];
        $mail['attachments'] = $vcf_mail['attachments'];
        $mail['additional_headers'] = $vcf_mail['additional_headers'];

        $vcf_mail2 = $_POST['vcf7-mail-2'];

        $mail2['active'] = $vcf_mail2['active'];
        $mail2['recipient'] = $vcf_mail2['recipient'];
        $mail2['sender'] = $vcf_mail2['sender'];
        $mail2['subject'] = $vcf_mail2['subject'];
        $mail2['attachments'] = $vcf_mail2['attachments'];
        $mail2['additional_headers'] = $vcf_mail2['additional_headers'];
        $mail_data = serialize($mail);
        
        $vcf_mail21 = serialize($mail2);
        update_post_meta( $post_id, 'vcf_fields_data', $field_data);
        update_post_meta( $post_id, 'vcf_mail_data2', $vcf_mail21);
        update_post_meta( $post_id, 'vcf_body_data', $vcf_mail['body']);
        update_post_meta( $post_id, 'vcf_mail_body2', $vcf_mail2['body']);
        update_post_meta( $post_id, 'vcf_mail_data', $mail_data);


        $message = $_POST['vcf7-message'];
        $message = serialize($message);
        update_post_meta( $post_id, 'vcf_success_sms', $message);
    }

    public function contact_form_tab_content($post)
    {
        if ( ! class_exists( 'Tabs_Form_Class' ) )
        {
            require_once('Tabs_Form_Class.php');
        }
        $tabs = new Tabs_Form_Class;
        $tabs->contact_form_tab_content($post);
    }
    public function advanced_form_front_view($attr)
    {
        if ( ! class_exists( 'Front_Form_Class' ) )
        {
            require_once('Front_Form_Class.php');
        }
        $front = new Front_Form_Class;
        $front->front_design_view($attr);
    }
    public function vcfform_insert_data()
    {
        //print_r($_FILES); die();
        global $wpdb;
        $table_name2 = $wpdb->prefix . "advanced_all_form_entry";
        $params = array();
        parse_str($_POST['fields'], $params);

        $vcfid = $_POST['vcf_id'];

        if(!empty($_FILES['file']))
        {
            $file = $_FILES['file'];
            $filesize = $_POST['filesize'];

           // echo  $filesize; die();
            $extension = $_POST['extension'];


            $file_img = $this->image_upload($file,$filesize,$extension);

            if($file_img['success'])
            {
                $file_img1 = $file_img['success'];

            }
            else
            {
                echo json_encode($file_img['error']);
                die();
            }

            $params['file'] = $file_img1;

        }


       // print_r($params); die();
        if ( ! class_exists( 'Mail_Form_Class' ) )
        {
            require_once('Mail_Form_Class.php');
        }
        $front = new Mail_Form_Class;
        $result = $front->mail_sent_format($params,$vcfid);




        if($result == 1)
        {
           // echo 'test'; die();
            $last_id = $wpdb->get_var( 'SELECT data_id FROM ' . $table_name2 .' ORDER BY data_id DESC LIMIT 1');

            $data_id = $last_id+1;

          //  print_r($params); die();

            foreach($params as $key=>$value)
            {
                if($key == 'g-recaptcha-response')
                {
                    
                }
                else
                {
                    if(is_array($value))
                    {
                        $value = implode( ", ", $value);
                    }
                    $result_check = $wpdb->insert($table_name2, array('vcf_id'=>$vcfid, 'data_id'=>$data_id, 'name' => $key, 'value' => $value) );
                }
            }
            return $result_check;
        }
        die();
    }
    public function image_upload($file,$filesize,$extension)
    {
        if(isset($file))
        {
            $errors= array();
            $file_name = explode(".", $file["name"]);

            $newfilename = round(microtime(true)) . '.' . end($file_name);
            $file_size = $file['size'];
            $file_tmp = $file['tmp_name'];
            $file_type = $file['type'];
            $file_ext = strtolower(end(explode('.',$file['name'])));

            //echo $file_ext; die();



            $extension = str_replace(".","",$extension);

            $extensions = explode(',', $extension);

              
          
            if(in_array($file_ext,$extensions) === false && $extensions != '' && $extensions[0] != 'undefined')
            {
               $errors['error'] = "Only files with a following extensions are allowed : ".$extension;
            }

            
            $file_size = round($file_size / 1024,4);
          
            if($file_size > $filesize)
            {
               $errors['error'] = 'File size must be smaller than '.$filesize.'KB';
            }
            
              
            if(empty($errors)==true)
            {
                mkdir("../wp-content/uploads/contact_form");
                move_uploaded_file($file_tmp,"../wp-content/uploads/contact_form/".$newfilename);

                $errors['success'] = $newfilename;
            }
            return $errors;
        }
    }

    /** Start Woocommerce Hooks **/

    public function action_woocommerce_after_cart_table()
    {
        $show_enquiry_cart_page = get_option('show_enquiry_cart_page');
        $enquiry_modal_title = get_option('enquiry_modal_title');

        if($show_enquiry_cart_page == 1)
        {
            $cart_form_id = get_option('cart_form_id');

            echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'.$enquiry_modal_title.'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">';
                      echo do_shortcode('[advanced-form id='.$cart_form_id.']');
                      echo '</div>
                    </div>
                  </div>
                </div>';
        }
    }

    public function woocommerce_after_add_to_cart_button()
    {
        
        $show_enquiry_detail_page = get_option('show_enquiry_detail_page');
        $enquiry_modal_title = get_option('enquiry_modal_title');
        if($show_enquiry_detail_page == 1)
        {
            $pdetail_form_id = get_option('pdetail_form_id');

            $pdetail_form_title = get_option('pdetail_form_title');

            echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'.$enquiry_modal_title.'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">';
                      echo do_shortcode('[advanced-form id='.$pdetail_form_id.']');
                      echo '</div>
                    </div>
                  </div>
                </div>';
            
        }
    }

    public function woocommerce_add_pinquiry_button()
    {
        $show_enquiry_detail_page = get_option('show_enquiry_detail_page');

        $add_btn_title_enquiry = get_option('add_btn_title_enquiry');
		$add_enquiry_btn_details = get_option('add_enquiry_btn_details');
        if($show_enquiry_detail_page == 1 && $add_enquiry_btn_details == 1)
        {
            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">'.$add_btn_title_enquiry.'</button>';
        }
    }

    public function woocommerce_cart_pinquiry_button()
    {
        $show_enquiry_cart_page = get_option('show_enquiry_cart_page');

        $add_btn_title_enquiry = get_option('add_btn_title_enquiry');
		$add_enquiry_btn_cart = get_option('add_enquiry_btn_cart');
        if($show_enquiry_cart_page == 1 && $add_enquiry_btn_cart == 1)
        {
            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">'.$add_btn_title_enquiry.'</button>';
        }
    }
	
	 public function wc_cart_pinquiry_button_shortcode()
    {
        $show_enquiry_cart_page = get_option('show_enquiry_cart_page');

        $add_btn_title_enquiry = get_option('add_btn_title_enquiry');
        if($show_enquiry_cart_page == 1)
        {
            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">'.$add_btn_title_enquiry.'</button>';
        }
    }
	
	public function wc_add_pinquiry_button_shortcode()
    {
        $show_enquiry_detail_page = get_option('show_enquiry_detail_page');

        $add_btn_title_enquiry = get_option('add_btn_title_enquiry');
        if($show_enquiry_detail_page == 1)
        {
            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">'.$add_btn_title_enquiry.'</button>';
        }
    }
    /** End Woocommerce Hooks **/
}
?>