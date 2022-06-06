<?php
class Overview_Class{
    public function wp_list_tables(){
    	$this->dropdown_contact_lists();    	
		echo '<table id="example" class="display wp_list_vcf" cellspacing="0" width="100%"><thead><tr>';
		$this->get_list_columns();        
        echo '</tr></thead><tfoot><tr>';		
		$this->get_list_columns();    	
    	echo '</tr></tfoot><tbody>';
    	$this->get_list_value();
    	echo '</tbody></table>';
    }
    public function get_list_columns(){
		global $wpdb;
		$table_name = $wpdb->prefix . "advanced_all_form_entry";
		$data = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM ".$table_name." WHERE vcf_id = %d", sanitize_text_field($_GET['form_id'])) );

        foreach($data as $columns){
            $data_id[] = $columns->data_id;
            $k_name[] = $columns->name;
        }
		$kname = array_unique($k_name);
        foreach($kname as $column){
            if($column != 'file' && $column != 'hiddenRecaptcha'){
                  echo '<th>'.substr($column,0,20).'</th>';
            }
        }
        if(!empty($kname)){
            echo '<th>Action</th>';
        }
	}
	public function get_list_value(){
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
            echo '<tr>';
                foreach($kname as $name_val){
                    if($name_val != 'file' && $name_val != 'hiddenRecaptcha'){                        
						$data1 = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM ".$table_name." WHERE vcf_id = %d AND data_id = %d AND name = %s", sanitize_text_field($_GET['form_id']), sanitize_text_field($list), sanitize_text_field($name_val)) );
                        echo '<td>'.$data1[0]->value.'</td>';
                    }
                }
                echo '<td><a class="btn btn-primary" href="javascript:void(0)" onclick=delete_list_view('.$list.')>Remove</a></td>';
            echo '</tr>';
    	}
	}
	public function dropdown_contact_lists(){
		echo '<form action="" method="GET" class="overview_vcfform">
				<div class="form-group dropdown_fields">
					<label for="posts">Choose a Form:</label>
					<input type="hidden" name="post_type" value="'.sanitize_text_field($_GET['post_type']).'"/>
					<input type="hidden" name="page" value="'.sanitize_text_field($_GET['page']).'"/>
					<select id="posts" name="form_id" class="form-control" required>';
					global $post;
					$args = array( 'post_type' => sanitize_text_field($_GET['post_type']),'post_status' => 'publish');
					$myposts = get_posts( $args );
					echo '<option value="">Select Form</option>';
					foreach ( $myposts as $post )
					{
						echo '<option value="'.get_the_ID().'" '.(($_GET['form_id']==get_the_ID())?'selected':"").'>'.get_the_title().'</option>';
					}
					wp_reset_postdata();
					echo '</select>
			  		<input type="submit" class="btn btn-link" value="Submit">
			  	</div>
			</form>';

        echo '<div class="delete_error_overview">Record deleted successfully.</div>';    
	}
}