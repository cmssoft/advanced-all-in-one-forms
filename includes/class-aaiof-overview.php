<?php
namespace AdvancedAllInOneForms;
if (!defined( 'ABSPATH')) exit;
if (!class_exists( 'AAIOF_Overview')){
	class AAIOF_Overview {
		public function aaiof_wp_list_tables(){
			$this->aaiof_dropdown_contact_lists();    
			_e('<table id="example" class="display wp_list_vcf" cellspacing="0" width="100%"><thead><tr>');
			$this->aaiof_get_list_columns();        
			_e('</tr></thead><tfoot><tr>');		
			$this->aaiof_get_list_columns();    	
			_e('</tr></tfoot><tbody>');
			$this->aaiof_get_list_value();
			_e('</tbody></table>');
		}
		public function aaiof_get_list_columns(){
			global $wpdb;
			$table_name = $wpdb->prefix . "advanced_all_form_entry";
			$data = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM ".$table_name." WHERE vcf_id = %d", sanitize_text_field($_GET['form_id'])) );

			$field = get_post_meta(sanitize_text_field($_GET['form_id']), 'vcf_fields_data', true);
            $get_fields = unserialize($field);

			foreach($data as $columns){
				$data_id[] = $columns->data_id;
				/*$k_name[] = $columns->name;*/
				foreach($get_fields as $k=>$v){
					if($get_fields[$k]['name']==$columns->name){
						$k_name[] = $get_fields[$k]['label'];
					}
				}
			}
			
			$kname = array_unique($k_name);
			foreach($kname as $column){
				if($column != 'file' && $column != 'hiddenRecaptcha'){
					_e('<th>'.substr($column,0,20).'</th>');
				}
			}
			if(!empty($kname)){
				_e('<th>Action</th>');
			}
		}
		public function aaiof_get_list_value(){
			global $wpdb;
			$table_name = $wpdb->prefix . "advanced_all_form_entry";
			$data = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM ".$table_name." WHERE vcf_id = %d", sanitize_text_field($_GET['form_id'])) );

			foreach($data as $columns){
				$data_id[] = $columns->data_id;
				$k_name[] = $columns->name;
			}
			$unique = array_unique($data_id);
			$kname = array_unique($k_name);
			foreach($unique as $list){
				_e('<tr>');
					foreach($kname as $name_val){
						if($name_val != 'file' && $name_val != 'hiddenRecaptcha'){                        
							$data1 = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM ".$table_name." WHERE vcf_id = %d AND data_id = %d AND name = %s", sanitize_text_field($_GET['form_id']), sanitize_text_field($list), sanitize_text_field($name_val)) );
							_e('<td>'.$data1[0]->value.'</td>');
						}
					}
					_e('<td><a class="btn btn-primary" href="javascript:void(0)" onclick=aaiof_delete_list_view('.$list.')>Remove</a></td>');
				_e('</tr>');
			}
		}
		public function aaiof_dropdown_contact_lists(){
			_e('<div class="wrap"><h1 class="wp-heading-inline">Overview</h1><form action="" method="GET" class="overview_vcfform">
					<div class="form-group dropdown_fields">
						<label for="posts">Choose a Form:</label>
						<input type="hidden" name="post_type" value="'.sanitize_text_field($_GET['post_type']).'"/>
						<input type="hidden" name="page" value="'.sanitize_text_field($_GET['page']).'"/>
						<select id="posts" name="form_id" class="form-control" required>');
						global $post;
						$args = array( 'post_type' => sanitize_text_field($_GET['post_type']),'post_status' => 'publish');
						$myposts = get_posts( $args );
						_e('<option value="">Select Form</option>');
						foreach ( $myposts as $post )
						{
							_e('<option value="'.get_the_ID().'" '.(($_GET['form_id']==get_the_ID())?'selected':"").'>'.get_the_title().'</option>');
						}
						wp_reset_postdata();
						_e('</select>
						<input type="submit" class="button button-primary" value="Submit">
					</div>
				</form></div>');
			_e('<div class="delete_error_overview">Record deleted successfully.</div>');    
		}
	}
}