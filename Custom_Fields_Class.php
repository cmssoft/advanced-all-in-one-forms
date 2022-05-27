<?php
class Custom_Fields_Class{
    public function text($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Text Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">                    	
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="text">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="text-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="placeholder-'.$rand.'">Placeholder:</label>
					    	<input type="text" class="form-control" id="placeholder-'.$rand.'" name="placeholder['.$rand.']" value="'.(isset($field['placeholder'])?''.$field['placeholder'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Maxlength:</label>
                            <input type="text" class="form-control max_textval" id="max-'.$rand.'" name="max['.$rand.']" value="'.(isset($field['max'])?''.$field['max'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Minlength:</label>
                            <input type="text" class="form-control min_textval" id="min-'.$rand.'" name="min['.$rand.']" value="'.(isset($field['min'])?''.$field['min'].'':"").'">
                        </div>                        
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>                        
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function description($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Description Field</h2>
                        </div>
                        <div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="description">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="description-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Description:</label>
                            <textarea  class="form-control" id="label-'.$rand.'" name="label['.$rand.']" rows=4 columns=10 width:100%>'.(isset($field['label'])?''.$field['label'].'':"").'</textarea>
                        </div>
                        <div class="form-group">
                            <label for="id-'.$rand.'">ID:</label>
                            <input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Class:</label>
                            <input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
                        </div>
                         <div class="form-group">
                            <label for="placeholder-'.$rand.'">HTML Tag:</label>
                            <input type="text" class="form-control" id="placeholder-'.$rand.'" name="placeholder['.$rand.']" value="'.(isset($field['placeholder'])?''.$field['placeholder'].'':"").'" placeholder="p,span,h1,h2,h3,...">
                        </div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function rating($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Rating Field</h2>
                        </div>
                        <div class="col-sm-4 box_button">                        
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="rating">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="rating-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Description:</label>
                            <textarea  class="form-control" id="label-'.$rand.'" name="label['.$rand.']">'.(isset($field['label'])?''.$field['label'].'':"").'</textarea>
                        </div>
                        <div class="form-group">
                            <label for="id-'.$rand.'">ID:</label>
                            <input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Class:</label>
                            <input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="required-'.$rand.'">Required:</label>
                            <input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function password($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Password Field</h2>
                        </div>
                        <div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="password">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="password-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Label:</label>
                            <input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="placeholder-'.$rand.'">Placeholder:</label>
                            <input type="text" class="form-control" id="placeholder-'.$rand.'" name="placeholder['.$rand.']" value="'.(isset($field['placeholder'])?''.$field['placeholder'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="id-'.$rand.'">ID:</label>
                            <input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Class:</label>
                            <input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="required-'.$rand.'">Minlength:</label>
                            <input type="text" class="form-control" id="class-'.$rand.'" name="min['.$rand.']" value="'.(isset($field['min'])?''.$field['min'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="required-'.$rand.'">Strong:</label>
                            <input type="checkbox" class="form-control" id="max-'.$rand.'" name="max['.$rand.']" value="yes" '.(($field['max']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="required-'.$rand.'">Required:</label>
                            <input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function email($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Email Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="email">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="email-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="placeholder-'.$rand.'">Placeholder:</label>
					    	<input type="text" class="form-control" id="placeholder-'.$rand.'" name="placeholder['.$rand.']" value="'.(isset($field['placeholder'])?''.$field['placeholder'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function phone($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Phone Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="phone">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="phone-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="placeholder-'.$rand.'">Placeholder:</label>
					    	<input type="text" class="form-control" id="placeholder-'.$rand.'" name="placeholder['.$rand.']" value="'.(isset($field['placeholder'])?''.$field['placeholder'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Maxlength:</label>
                            <input type="text" class="form-control max_phoneval" id="max-'.$rand.'" name="max['.$rand.']" value="'.(isset($field['max'])?''.$field['max'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Minlength:</label>
                            <input type="text" class="form-control min_phoneval" id="min-'.$rand.'" name="min['.$rand.']" value="'.(isset($field['min'])?''.$field['min'].'':"").'">
                        </div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function textarea($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Textarea Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="textarea">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="textarea-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
                        <div class="form-group">
                            <label for="rows-'.$rand.'">Rows:</label>
                            <input type="text" class="form-control" id="rows-'.$rand.'" name="rows['.$rand.']" value="'.(isset($field['rows'])?''.$field['rows'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="columns-'.$rand.'">Columns:</label>
                            <input type="text" class="form-control" id="columns-'.$rand.'" name="columns['.$rand.']" value="'.(isset($field['columns'])?''.$field['columns'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Length:</label>
                            <input type="text" class="form-control" id="max-'.$rand.'" name="max['.$rand.']" value="'.(isset($field['max'])?''.$field['max'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function url($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>URL Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="url">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="url-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="placeholder-'.$rand.'">Placeholder:</label>
					    	<input type="text" class="form-control" id="placeholder-'.$rand.'" name="placeholder['.$rand.']" value="'.(isset($field['placeholder'])?''.$field['placeholder'].'':"").'" >
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function date($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Date Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="date">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="date-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function time($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Time Field</h2>
                        </div>
                        <div class="col-sm-4 box_button">
                            <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="time">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="time-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Label:</label>
                            <input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="id-'.$rand.'">ID:</label>
                            <input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Class:</label>
                            <input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="required-'.$rand.'">Required:</label>
                            <input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function file($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>File Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="file">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="file-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Extensions:</label>
                            <input type="text" class="form-control" id="extension-'.$rand.'" name="extension['.$rand.']" value="'.(isset($field['extension'])?''.$field['extension'].'':"").'" placeholder="png,jpeg,..." >
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">File Size:</label>
                            <input type="number" class="form-control" id="filesize-'.$rand.'" name="filesize['.$rand.']" value="'.(isset($field['filesize'])?''.$field['filesize'].'':"").'" placeholder="KB">
                        </div>
                        <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function select($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Select Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>

                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="select">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="select-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="placeholder-'.$rand.'">Placeholder:</label>
					    	<input type="text" class="form-control" id="placeholder-'.$rand.'" name="placeholder['.$rand.']" value="'.(isset($field['placeholder'])?''.$field['placeholder'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
					  	<div class="option_'.$rand.' options_vcf7">';

                            if(isset($field['option']))
                            {
                                foreach($field['option'] as $key1=>$value1)
                                {
                                    echo  '<div class="row select_row_'.$rand.' select_row_'.$rand.'-'.$key1.'" id="select_option_list">
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <input type="text" Placeholder="Option" name="option['.$rand.']['.$key1.']" class="r_opt form-control" value="'.$value1.'">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <input type="text" Placeholder="Value" name="option_val['.$rand.']['.$key1.']" class="r_val form-control" value="'.$field['option_val'][$key1].'">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <i class="fa fa-plus-circle fa-2x add_more_radio" onclick=add_more_options(1,'.$rand.')></i>
                                          <i class="col-md-offset-1 fa fa-times-circle fa-2x remove_more_radio" onclick="remove_more_options('.$key1.','.$rand.')"></i>
                                       </div>
                                    </div>';
                                }
                            }
                            else
                            {
                                echo '<div class="row select_row_'.$rand.' " id="select_option_list">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" Placeholder="Option" name="option['.$rand.'][0]" class="r_opt form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input type="text" Placeholder="Value" name="option_val['.$rand.'][0]" class="r_val form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="margin-top-5 fa fa-plus-circle fa-2x default_blue add_more_radio" onclick=add_more_options(1,'.$rand.')></i>
                                    </div>
                                </div>';
                            }
					  	echo '</div>
                    </div>
                </div>
            </li>';
    }
    public function radio($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Radio Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">

                    	
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="radio">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="radio-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
					  	<div class="option_'.$rand.' options_vcf7">';

                        if(isset($field['option']))
                        {
                            foreach($field['option'] as $key1=>$value1)
                            {

                                echo  '<div class="row select_row_'.$rand.' select_row_'.$rand.'-'.$key1.'" id="select_option_list">
                                   <div class="col-md-4">
                                      <div class="form-group">
                                         <input type="text" Placeholder="Option" name="option['.$rand.']['.$key1.']" class="r_opt form-control" value="'.$value1.'">
                                      </div>
                                   </div>
                                   <div class="col-md-4">
                                      <div class="form-group">
                                         <input type="text" Placeholder="Value" name="option_val['.$rand.']['.$key1.']" class="r_val form-control" value="'.$field['option_val'][$key1].'">
                                      </div>
                                   </div>
                                   <div class="col-md-4">
                                      <i class="fa fa-plus-circle fa-2x add_more_radio" onclick=add_more_options(1,'.$rand.')></i>
                                      <i class="col-md-offset-1 fa fa-times-circle fa-2x remove_more_radio" onclick="remove_more_options('.$key1.','.$rand.')"></i>
                                   </div>
                                </div>';
                            }
                        }
                        else
                        {    
						  	echo '<div class="row select_row_'.$rand.' " id="select_option_list">
						  		<div class="col-md-4">
								  	<div class="form-group">
								  		<input type="text" Placeholder="Option" name="option['.$rand.'][0]" class="r_opt form-control">
								  	</div>
						  		</div>
						  		<div class="col-md-4">
						  			<div class="form-group">
						  			<input type="text" Placeholder="Value" name="option_val['.$rand.'][0]" class="r_val form-control" >
						  			</div>
						  		</div>
						  		<div class="col-md-4">
						  			<i class="margin-top-5 fa fa-plus-circle fa-2x default_blue add_more_radio" onclick=add_more_options(1,'.$rand.')></i>
						  		</div>
						  	</div>';
                        }
					  	echo '</div>
                    </div>
                </div>
            </li>';
    }
    public function checkbox($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Checkbox Field</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">

                    	
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="checkbox">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="checkbox-'.$rand.'">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="placeholder-'.$rand.'">Placeholder:</label>
					    	<input type="text" class="form-control" id="placeholder-'.$rand.'" name="placeholder['.$rand.']" value="'.(isset($field['placeholder'])?''.$field['placeholder'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="required-'.$rand.'">Required:</label>
					    	<input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
					  	</div>
					  	<div class="option_'.$rand.' options_vcf7">';

                            if(isset($field['option']))
                            {
                                foreach($field['option'] as $key1=>$value1)
                                {
        						  	echo  '<div class="row select_row_'.$rand.' select_row_'.$rand.'-'.$key1.'" id="select_option_list">
                                           <div class="col-md-4">
                                              <div class="form-group">
                                                 <input type="text" Placeholder="Option" name="option['.$rand.']['.$key1.']" class="r_opt form-control" value="'.$value1.'">
                                              </div>
                                           </div>
                                           <div class="col-md-4">
                                              <div class="form-group">
                                                 <input type="text" Placeholder="Value" name="option_val['.$rand.']['.$key1.']" class="r_val form-control" value="'.$field['option_val'][$key1].'">
                                              </div>
                                           </div>
                                           <div class="col-md-4">
                                              <i class="fa fa-plus-circle fa-2x add_more_radio" onclick=add_more_options(1,'.$rand.')></i>
                                              <i class="col-md-offset-1 fa fa-times-circle fa-2x remove_more_radio" onclick="remove_more_options('.$key1.','.$rand.')"></i>
                                           </div>
                                        </div>';
                                }
                            }
                            else
                            {
                                echo '<div class="row select_row_'.$rand.' " id="select_option_list">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" Placeholder="Option" name="option['.$rand.'][0]" class="r_opt form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input type="text" Placeholder="Value" name="option_val['.$rand.'][0]" class="r_val form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="margin-top-5 fa fa-plus-circle fa-2x default_blue add_more_radio" onclick=add_more_options(1,'.$rand.')></i>
                                    </div>
                                </div>';
                            }

					  	echo '</div>
                    </div>
                </div>
            </li>';
    }
    public function submit($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>Submit</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="submit">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
                    </div>
                </div>
            </li>';
    }
    public function recaptcha($field,$rand){
        $rand = esc_html($rand);
    	echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                    	<div class="col-sm-8 head_box">
                    		<h2>reCaptcha</h2>
                    	</div>
                    	<div class="col-sm-4 box_button">                    	
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                    	<input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="recaptcha">
                    	<div class="form-group">
					    	<label for="label-'.$rand.'">Label:</label>
					    	<input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="id-'.$rand.'">ID:</label>
					    	<input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
					  	</div>
					  	<div class="form-group">
					    	<label for="class-'.$rand.'">Class:</label>
					    	<input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
					  	</div>
                    </div>
                </div>
            </li>';
    }
    public function acceptance($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Acceptance Field</h2>
                        </div>
                        <div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="acceptance">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="acceptance-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Option:</label>
                            <textarea class="form-control" id="label-'.$rand.'" name="label['.$rand.']">'.(isset($field['label'])?''.$field['label'].'':"").'</textarea>
                        </div>
                        <div class="form-group">
                            <label for="id-'.$rand.'">ID:</label>
                            <input type="text" class="form-control" id="id-'.$rand.'" name="id['.$rand.']" value="'.(isset($field['id'])?''.$field['id'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Class:</label>
                            <input type="text" class="form-control" id="class-'.$rand.'" name="class['.$rand.']" value="'.(isset($field['class'])?''.$field['class'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="required-'.$rand.'">Required:</label>
                            <input type="checkbox" class="form-control" id="required-'.$rand.'" name="required['.$rand.']" value="yes" '.(($field['required']=='yes')?'checked':"").'>
                        </div>
                    </div>
                </div>
            </li>';
    }
    /** Product Title and Urls Details **/
    public function product_title($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Product Title</h2>
                        </div>
                        <div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="product_title">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="product_title-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Label:</label>
                            <input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function product_url($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Product Url</h2>
                        </div>
                        <div class="col-sm-4 box_button">

                        
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="product_url">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="product_url-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Label:</label>
                            <input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function product_price($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Product Price</h2>
                        </div>
                        <div class="col-sm-4 box_button">

                        
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="product_price">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="product_price-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Label:</label>
                            <input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
    public function product_qty($field,$rand){
        $rand = esc_html($rand);
        echo '<li class="ui-state-default card" id="box-'.$rand.'">
                <div class="card-header" id="card-'.$rand.'">
                    <div class="row">
                        <div class="col-sm-8 head_box">
                            <h2>Product Quantity</h2>
                        </div>
                        <div class="col-sm-4 box_button">
                        <button type="button" class="btn btn-link" onclick=remove('.$rand.')><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <label for="class-'.$rand.'">Raw class:</label>
                            <input type="text" class="form-control" id="rw-cls-'.$rand.'" name="rw-cls['.$rand.']" value="'.(isset($field['rw-cls'])?''.$field['rw-cls'].'':"").'">
                        </div>
                        <div class="form-group">
                            <label for="class-'.$rand.'">Column  class:</label>
                            <input type="text" class="form-control" id="cl-cls-'.$rand.'" name="cl-cls['.$rand.']" value="'.(isset($field['cl-cls'])?''.$field['cl-cls'].'':"").'">
                        </div>
                <div class="form-group">
                            <label for="raws-'.$rand.'">Raw Start:</label>
                            <input type="checkbox" class="form-control" id="raws-'.$rand.'" name="raws['.$rand.']" value="yes" '.(($field['raws']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="rawed-'.$rand.'">Raw End:</label>
                            <input type="checkbox" class="form-control" id="rawed-'.$rand.'" name="rawed['.$rand.']" value="yes" '.(($field['rawed']=='yes')?'checked':"").'>
                        </div>
                        <div class="form-group">
                            <label for="column-'.$rand.'">Culumn :</label>
                            col-
                            <select class="form-control" id="col-data-'.$rand.'" name="col-data['.$rand.']">
                                 <option value="lg" '.(($field['col-data-num']=='lg')?'selected':"").'>lg</option>
                                 <option value="md" '.(($field['col-data-num']=='sm')?'selected':"").'>md</option>
                                 <option value="sm" '.(($field['col-data-num']=='md')?'selected':"").'>sm</option>
                            </select>
                            -<select class="form-control" id="col-data-num-'.$rand.'" name="col-data-num['.$rand.']">
                                 <option value="1" '.(($field['col-data-num']=='1')?'selected':"").'>1</option>
                                 <option value="2" '.(($field['col-data-num']=='2')?'selected':"").'>2</option>
                                 <option value="3" '.(($field['col-data-num']=='3')?'selected':"").'>3</option>
                                 <option value="4" '.(($field['col-data-num']=='4')?'selected':"").'>4</option>
                                 <option value="5" '.(($field['col-data-num']=='5')?'selected':"").'>5</option>
                                 <option value="6" '.(($field['col-data-num']=='6')?'selected':"").'>6</option>
                                 <option value="7" '.(($field['col-data-num']=='7')?'selected':"").'>7</option>
                                 <option value="8" '.(($field['col-data-num']=='8')?'selected':"").'>8</option>
                                 <option value="9" '.(($field['col-data-num']=='9')?'selected':"").'>9</option>
                                 <option value="10" '.(($field['col-data-num']=='10')?'selected':"").'>10</option>
                                 <option value="11" '.(($field['col-data-num']=='11')?'selected':"").'>11</option>
                                 <option value="12" '.(($field['col-data-num']=='12')?'selected':"").'>12</option>
                            </select>
                        </div>
                <div id="collapse-'.$rand.'" class="collapse in" aria-labelledby="card-'.$rand.'">
                    <div class="card-body">
                        <input type="hidden" class="form-control" name="input['.$rand.']" id="input-'.$rand.'" value="product_qty">
                        <input type="hidden" class="form-control" name="name['.$rand.']" value="product_qty-'.$rand.'">
                        <div class="form-group">
                            <label for="label-'.$rand.'">Label:</label>
                            <input type="text" class="form-control" id="label-'.$rand.'" name="label['.$rand.']" value="'.(isset($field['label'])?''.$field['label'].'':"").'">
                        </div>
                    </div>
                </div>
            </li>';
    }
}