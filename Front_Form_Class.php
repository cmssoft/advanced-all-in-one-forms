<?php
class Front_Form_Class{
    public function front_design_view($attr){
    	$vcf_data = get_post_meta( $attr['id'], 'vcf_fields_data', true);
        $get_vcf_data = unserialize($vcf_data);
        echo '<form action="" method="post" id="vcf7form-'.$attr['id'].'" class="vcf7form" data-id="'.$attr['id'].'" enctype="multipart/form-data">';
        foreach($get_vcf_data as $k=>$data){
            $type = $data['type'];
            $this->$type($k,$data,$attr);
        }
        echo '</form>';
	}
    public function text($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        if($data['max'] == '' && $data['min'] == ''){
            echo $raws;
            echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
            echo '<div class="form-group" id="'.$data['id'].'">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
            <input type="'.$data['type'].'" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").'>
            </div></div>';
            echo $rawed;
        }else{
            echo $raws;
            echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
            echo '<div class="form-group" id="'.$data['id'].'">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
            <input type="'.$data['type'].'" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").' maxlength = "'.$data['max'].'" minlength = "'.$data['min'].'">
            </div></div>';
            echo $rawed;
        }
    }
    public function description($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo '<div class="form-group" id="'.$data['id'].'">';
            if($data['placeholder'] == ''){
                echo '<p>'.$data['label'].'</p>';
            }else{
                echo '<'.$data['placeholder'].'>'.$data['label'].'</'.$data['placeholder'].'>';
            }                    
        echo '</div>';
        echo '</div>';
        echo $rawed;
    }
    public function rating($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo '<div class="form-group"><div><p for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</p>';
        echo '<div class="form-group rating '.$data['class'].'" id="'.$data['id'].'">';
        echo '<label>
                <input type="radio" name="'.$data['type'].'-'.$k.'" value="1" '.(($data['required']=='yes')?'required="required"':"").' />
                <span class="icon">★</span>
                </label>
                <label>
                <input type="radio" name="'.$data['type'].'-'.$k.'" value="2" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                </label>
                <label>
                <input type="radio" name="'.$data['type'].'-'.$k.'" value="3" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>   
                </label>
                <label>
                <input type="radio" name="'.$data['type'].'-'.$k.'" value="4" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                </label>
                <label>
                <input type="radio" name="'.$data['type'].'-'.$k.'" value="5" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                </label>';                    
        echo '</div></div></div>';
        echo '</div>';
        echo $rawed;
    }
    public function password($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        if($data['max'] == 'yes'){   
            if($data['min'] == ''){
                echo '<div class="form-group" id="'.$data['id'].'">
                <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'  <span> (Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters)</span></label>
                <input type="password" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                </div>';
            }else{
                echo '<div class="form-group" id="'.$data['id'].'">
                <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'  <span> (Must contain at least one number and one uppercase and lowercase letter, and at least '.$data['min'].' or more characters)</span></label>
                <input type="password" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{'.$data['min'].',}">
                </div>';
            }
        }else{
            echo '<div class="form-group" id="'.$data['id'].'">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
            <input type="password" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").' minlength="'.$data['min'].'">
            </div>';
        }
        echo '</div>';
        echo $rawed;
    }
    public function email($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo '<div class="form-group" id="'.$data['id'].'">
        <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
        <input type="email" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").' pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63}$">
        </div>';
        echo '</div>';
        echo $rawed;
    }
    public function phone($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        if($data['max'] == '' && $data['min'] == ''){
            echo '<div class="form-group" id="'.$data['id'].'">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
            <input type="tel" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").'>
            </div>';
        }else{
            echo '<div class="form-group" id="'.$data['id'].'">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
            <input type="tel" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").' maxlength = "'.$data['max'].'" minlength = "'.$data['min'].'">
            </div>';
        }
        echo '</div>';
        echo $rawed;
    }
    public function textarea($k,$data,$attr){
        if($data['raws'] == 'yes'){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        if($data['max'] == ''){
            echo '<div class="form-group" id="'.$data['id'].'">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
            <textarea name="'.$data['type'].'-'.$k.'" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" '.(($data['required']=='yes')?'required="required"':"").' rows="'.$data['rows'].'" cols="'.$data['columns'].'"></textarea>
            </div>';
        }else{
            echo '<div class="form-group" id="'.$data['id'].'">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
            <textarea name="'.$data['type'].'-'.$k.'" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" '.(($data['required']=='yes')?'required="required"':"").' rows="'.$data['rows'].'" cols="'.$data['columns'].'" maxlength="'.$data['max'].'"></textarea>
            </div>';
        }
        echo '</div>';
        echo $rawed;
    }
    public function url($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo '<div class="form-group" id="'.$data['id'].'">
        <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
        <input type="url" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="'.$data['placeholder'].'" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").'>
        </div>';
        echo '</div>';
        echo $rawed;
    }
    public function date($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo '<div class="form-group" id="'.$data['id'].'">
        <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
        <input type="text" class="form-control datepicker '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'"  placeholder="MM/DD/YYYY" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").'>
        </div>';
        echo '</div>';
        echo $rawed;
    }
    public function file($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo '<div class="form-group '.$data['class'].' add_file" id="'.$data['id'].'">
        <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
        <input type="file" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'"  name="'.$data['type'].'-'.$k.'" accepted="'.$data['extension'].'" data-extension="'.$data['extension'].'" data-filesize="'.$data['filesize'].'" '.(($data['required']=='yes')?'required="required"':"").' >
        <label id="file_error" class="error"></label>
        </div>';
        echo '</div>';
        echo $rawed;
    }
    public function time($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo '<div class="form-group" id="'.$data['id'].'">
        <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
        <input type="text" class="form-control timepicker '.$data['class'].'" id="'.$data['type'].'-'.$k.'-'.$key.'" placeholder="HH:MM" name="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").' readonly>
        </div>';
        echo '</div>';
        echo $rawed;
    }
    public function select($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        $html = '<div class="form-group" id="'.$data['id'].'">
                <label for="'.$data['type'].'-'.$k.'">'.$data['label'].'</label>
                <select name="'.$data['type'].'-'.$k.'" class="form-control '.$data['class'].'" id="'.$data['type'].'-'.$k.'" '.(($data['required']=='yes')?'required="required"':"").'>
                    <option value="">'.$data['placeholder'].'</option>';
                    foreach($data['option'] as $key=>$value){
                        if($value != ''){   
                            if($data['option_val'][$key] != '')
                            {
                                $html .= '<option value="'.$data['option_val'][$key].'">'.$value.'</option>';
                            }
                            else
                            {
                                $html .= '<option value="'.$value.'">'.$value.'</option>';
                            }
                        }
                    }
        $html .= '</select>
        </div>';
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo $html;
        echo '</div>';
        echo $rawed;
    }
    public function radio($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        $html = '<div class="form-group radio_option '.$data['class'].'" id="'.$data['id'].'">
        <label >'.$data['label'].'</label><div>';
        foreach($data['option'] as $key=>$value){
            if($value != ''){
                $html .= '<div class="checkbox">
                <label for="'.$data['type'].'-'.$k.'-'.$key.'"><input type="'.$data['type'].'" value="'.$data['option_val'][$key].'" name="'.$data['type'].'-'.$k.'" id="'.$data['type'].'-'.$k.'-'.$key.'" '.(($data['required']=='yes')?'required="required"':"").'><span>'.$value.'</span></label>
                </div>';
            }
        }
        $html .= '</div></div>';
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo $html;
        echo '</div>';
        echo $rawed;
    }
    public function checkbox($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }        
        $html .= '<div class="form-group checkbox_option '.$data['class'].'" id="'.$data['id'].'">
        <label >'.$data['label'].'</label><div>';
        foreach($data['option'] as $key=>$value){
            if($value != ''){
                $html .= '<div class="checkbox">
                <label for="'.$data['type'].'-'.$k.'-'.$key.'"><input type="'.$data['type'].'" value="'.$data['option_val'][$key].'" name="'.$data['type'].'-'.$k.'[]" id="'.$data['type'].'-'.$k.'-'.$key.'" '.(($data['required']=='yes')?'required="required"':"").'><span>'.$value.'</span></label>
                </div>';
            }
        }
        $html .= '</div></div>';
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo $html;
        echo '</div>';
        echo $rawed;
    }
    public function product_title($k,$data,$attr){
        $show_enquiry_cart_page = get_option('show_enquiry_cart_page');
        if($show_enquiry_cart_page == 1 && is_cart()){
            global $woocommerce;
            $items = $woocommerce->cart->get_cart();
            $count = 1;
            foreach($items as $item => $values){
                $_product =  wc_get_product( $values['data']->get_id());
				echo '<input type="hidden" class="form-control '.$data['class'].'" name="'.$data['type'].'-'.$k.'[]" value="'.$_product->get_title().'" readonly>';        
                $count++;
            }
        }else{
            if($data['raws'] == 'yes' ){
                $raws = '<div class="row '.$data['rw-cls'].'">';
            }else{
                $raws = '';
            }
            if($data['rawed'] == 'yes' ){
                $rawed = '</div>';
            }else{
                $rawed = '';
            }
            echo $raws;
            echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
            echo '<div class="form-group">
            <label>'.$data['label'].'</label>
            <p>'.get_the_title().'</p>
            <input type="hidden" class="form-control '.$data['class'].'" name="'.$data['type'].'-'.$k.'" value="'.get_the_title().'" readonly>
            </div>';
            echo '</div>';
            echo $rawed;
        }
    }
    public function product_url($k,$data,$attr){
        $show_enquiry_cart_page = get_option('show_enquiry_cart_page');
        if($show_enquiry_cart_page == 1 && is_cart()){
            global $woocommerce;
            $items = $woocommerce->cart->get_cart();
            $count = 1;
            foreach($items as $item => $values){
                $_product =  wc_get_product( $values['data']->get_id());
                echo '<input type="hidden" class="form-control '.$data['class'].'" name="'.$data['type'].'-'.$k.'[]" value="'.$_product->get_permalink().'" readonly>';
                $count++;
            }
        }else{         
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
                $url = "https://";
            }else{
                $url = "http://";
            }            
            $url.= $_SERVER['HTTP_HOST'];
            $url.= $_SERVER['REQUEST_URI'];
            if($data['raws'] == 'yes' ){
                $raws = '<div class="row '.$data['rw-cls'].'">';
            }else{
                $raws = '';
            }
            if($data['rawed'] == 'yes' ){
                $rawed = '</div>';
            }else{
                $rawed = '';
            }
            echo $raws;
            echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
                echo '<div class="form-group">
                        <label>'.$data['label'].'</label>
                        <p><a href="">'.$url.'</a></p>
                        <input type="hidden" class="form-control '.$data['class'].'" name="'.$data['type'].'-'.$k.'" value="'.$url.'" readonly>
                    </div>';
            echo '</div>';
            echo $rawed;
        }
    }
    public function product_price($k,$data,$attr){
        $show_enquiry_cart_page = get_option('show_enquiry_cart_page');
        if($show_enquiry_cart_page == 1 && is_cart()){
            global $woocommerce;
            $items = $woocommerce->cart->get_cart();
            $count = 1;
            foreach($items as $item => $values){
                $_product =  wc_get_product( $values['data']->get_id());
                echo '<input type="hidden" class="form-control '.$data['class'].'" name="'.$data['type'].'-'.$k.'[]" value="'.$_product->get_price().'" readonly>';
                $count++;
            }
        }else{
            $product_id = get_the_ID();
            $_product = wc_get_product( $product_id );
            $regular_price = $_product->get_regular_price();
            $sale_price = $_product->get_sale_price();
            if($sale_price == ''){
                $p_price = $regular_price;
            }else{
                $p_price = $sale_price;
            }
            if($data['raws'] == 'yes' ){
                $raws = '<div class="row '.$data['rw-cls'].'">';
            }else{
                $raws = '';
            }
            if($data['rawed'] == 'yes' ){
                $rawed = '</div>';
            }else{
                $rawed = '';
            }

            echo $raws;
            echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
            echo '<div class="form-group">
            <label>'.$data['label'].'</label>
            <p>'.wc_price($p_price).'</p>
            <input type="hidden" class="form-control '.$data['class'].'" name="'.$data['type'].'-'.$k.'" value="'.$p_price.'" readonly>
            </div>';
            echo '</div>';
            echo $rawed;
        }
    }
    public function product_qty($k,$data,$attr){
        $show_enquiry_cart_page = get_option('show_enquiry_cart_page');
        if($show_enquiry_cart_page == 1 && is_cart()){
            global $woocommerce;
            $items = $woocommerce->cart->get_cart();
            $count = 1;
            foreach($items as $item => $values){
                $quantity = $values['quantity'];
                echo '<input type="hidden" class="form-control '.$data['class'].'" name="'.$data['type'].'-'.$k.'[]" value="'.$quantity.'" readonly>';
                $count++;
            }
        }else{
            if($data['raws'] == 'yes' ){
                $raws = '<div class="row '.$data['rw-cls'].'">';
            }else{
                $raws = '';
            }
            if($data['rawed'] == 'yes' ){
                $rawed = '</div>';
            }else{
                $rawed = '';
            }
            echo $raws;
            echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
                echo '<div class="form-group">
                    <label>'.$data['label'].'</label>
                    <input type="number" placeholder="Quantity" class="form-control '.$data['class'].'" name="'.$data['type'].'-'.$k.'" value="">
                </div>';
            echo '</div>';
            echo $rawed;
        }
    }
    public function submit($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        $message = unserialize(get_post_meta( $attr['id'], 'vcf_success_sms', true));
        echo '<button type="submit" class="btn btn-default  '.$data['class'].''.$data['class'].'" id="'.$data['id'].'">'.$data['label'].'</button>';
        echo '<img src="'.plugin_dir_url( __FILE__ ).'/assets/images/loading.gif" class="loader_gif" width="50" height="50" />';
        echo '<div class="form-group success-error" data-url="'.$message['thankyou'].'">'.$message['success'].'</div>';
        echo '</div>';
        echo $rawed;        
    }
    public function recaptcha($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        $sitekey = get_option('gcaptcha_sitekey');
        $secretkey = get_option('gcaptcha_secret');
        echo '<div class="form-group" id="'.$data['id'].'">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'">'.$data['label'].'</label>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script><div class="g-recaptcha '.$data['class'].'" id="'.$data['id'].'" data-sitekey="'.$sitekey.'" data-callback="recaptchaCallback"></div><input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
        </div>';
        echo '<div class="form-group success-error-captcha">Your Captcha response was incorrect. Please try again.</div>';
        echo '</div>';
        echo $rawed;
    }
    public function acceptance($k,$data,$attr){
        if($data['raws'] == 'yes' ){
            $raws = '<div class="row '.$data['rw-cls'].'">';
        }else{
            $raws = '';
        }
        if($data['rawed'] == 'yes' ){
            $rawed = '</div>';
        }else{
            $rawed = '';
        }
        echo $raws;
        echo '<div class="col-'.$data['col-data'].'-'.$data['col-data-num'].' '.$data['cl-cls'].'">';
        echo '<div class="form-group" id="'.$data['id'].'">
        <div>
        <div class="checkbox">
            <label for="'.$data['type'].'-'.$k.'-'.$key.'"><input type="checkbox" value="Yes" name="'.$data['type'].'-'.$k.'" id="'.$data['type'].'-'.$k.'-'.$key.'" '.(($data['required']=='yes')?'required="required"':"").'><span>'.$data['label'].'</span></label>
        </div>
        </div>
        </div>';
        echo '</div>';
        echo $rawed;
    }
}