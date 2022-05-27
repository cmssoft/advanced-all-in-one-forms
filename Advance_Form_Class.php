<?php
class Advance_Form_Class{
    public function advance_form_details(){
        $show_enquiry_detail_page = get_option('show_enquiry_detail_page');
        $pdetail_form_id = get_option('pdetail_form_id');
        $show_enquiry_cart_page = get_option('show_enquiry_cart_page');
        $cart_form_id = get_option('cart_form_id');
        $enquiry_modal_title = get_option('enquiry_modal_title');
        $add_btn_title_enquiry = get_option('add_btn_title_enquiry');
		$add_enquiry_btn_details = get_option('add_enquiry_btn_details');
		$add_enquiry_btn_cart = get_option('add_enquiry_btn_cart');

        echo '<div class="captcha_details" id="captcha-integration">
                <h1>Integration Advance Product Setting</h1>
                <div class="" id="recaptcha">
                    <div class="inside">
                        <form id="advance_form_setting" method="post" action="">
                            <table class="form-table">
                                <tbody>
				
									<tr>
										<th>Product Detail Page Setting : </th>
									</tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="show_enquiry_detail_page">Show product enquiry form in product detail page</label>
                                        </th>
                                        <td>
                                            <input type="checkbox" name="show_enquiry_detail_page" value="1" id="show_enquiry_detail_page" ' . (($show_enquiry_detail_page==1) ? "checked" : ""). '/>
                                        </td>
                                    </tr>
                                    <tr class="advanced_select_penquiry_form">
                                        <th scope="row">
                                            <label for="pdetail_form_id">Select  enquiry form for product detail page</label>
                                        </th>
                                        <td>
                                            <select id="pdetail_form_id" name="pdetail_form_id" class="form-control">';

                                            global $post;
                                            $args = array( 'post_type' => sanitize_text_field($_GET['post_type']),'post_status' => 'publish');
                                            $myposts = get_posts( $args );
                                            echo '<option value="">Select Form</option>';
                                            foreach ( $myposts as $post ){
                                                echo '<option value="'.get_the_ID().'" '.(($pdetail_form_id==get_the_ID())?'selected':"").'>'.get_the_title().'</option>';
                                            }
                                            wp_reset_postdata();
                                                
                                            echo '</select>
											
                                        </td>
                                    </tr>
									<tr class="advanced_product_form_shortcode">
										<th scope="row">
                                            <label>Add enquiry button after add to cart button</label>
                                        </th>
										<td>
											<input type="checkbox" name="add_enquiry_btn_details" value="1" id="add_enquiry_btn_details" ' . (($add_enquiry_btn_details==1) ? "checked" : ""). '/>
										</td>
									</tr>
									<tr class="advanced_product_form_shortcode">
										<th></th>
										<td>OR</td>
									</tr>
									<tr class="advanced_product_form_shortcode">
										<th scope="row">
                                            <label>Shortcode for product enquiry</label>
                                        </th>
										<td>
											[advanced_product_enquiry]
										</td>
									</tr>
									<tr>
										<th>Product Cart Page Setting : </th>
									</tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="show_enquiry_cart_page">Show product enquiry form in cart page</label>
                                        </th>
                                        <td>
                                            <input type="checkbox" name="show_enquiry_cart_page" value="1" id="show_enquiry_cart_page" ' . (($show_enquiry_cart_page==1) ? "checked" : ""). '/>
                                        </td>
                                    </tr>
                                    <tr class="advanced_select_cenquiry_form">
                                        <th scope="row">
                                            <label for="cart_form_id">Select enquiry form for cart page</label>
                                        </th>
                                        <td>
                                            <select id="cart_form_id" name="cart_form_id" class="form-control">';

                                                global $post;
                                                $args = array( 'post_type' => sanitize_text_field($_GET['post_type']),'post_status' => 'publish');
                                                $myposts = get_posts( $args );
                                                echo '<option value="">Select Form</option>';
                                                foreach ( $myposts as $post ){
                                                    echo '<option value="'.get_the_ID().'" '.(($cart_form_id==get_the_ID())?'selected':"").'>'.get_the_title().'</option>';
                                                }
                                                wp_reset_postdata();
                                                
                                         echo '</select>
                                        </td>
                                    </tr>
									<tr class="advanced_cart_form_shortcode">
										<th scope="row">
                                            <label>Add enquiry button after cart table</label>
                                        </th>
										<td>
											<input type="checkbox" name="add_enquiry_btn_cart" value="1" id="add_enquiry_btn_cart" ' . (($add_enquiry_btn_cart==1) ? "checked" : ""). '/>
										</td>
									</tr>
									<tr class="advanced_cart_form_shortcode">
										<th></th>
										<td>OR</td>
									</tr>
									<tr class="advanced_cart_form_shortcode">
										<th scope="row">
                                            <label>Shortcode for cart enquiry</label>
                                        </th>
										<td>
											[advanced_cart_enquiry]
										</td>
									</tr>
									
									<tr >
										<th>Enquiry Button  Setting : </th>
									</tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="enquiry_modal_title">Add title for enquiry form</label>
                                        </th>
                                        <td>
                                            <input type="text" name="enquiry_modal_title" value="'.$enquiry_modal_title.'" id="enquiry_modal_title"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            <label for="add_btn_title_enquiry">Add popup button title</label>
                                        </th>
                                        <td>
                                            <input type="text" name="add_btn_title_enquiry" value="'.$add_btn_title_enquiry.'" id="add_btn_title_enquiry"/>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <p class="submit">
                                <input type="submit" id="submit" class="button button-primary" value="Save">
                                <input type="button" id="reset" class="button button-primary" value="Reset" onclick="advance_setting_reset()">
                            </p>
                            <span class="success_msg">Setting Saved.</span>
                        </form>
                    </div>
                </div>
            </div>';
    }
}