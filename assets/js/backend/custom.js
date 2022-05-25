jQuery(document).ready(function()
{
	jQuery(".captcha_details span.success_msg").hide();
	jQuery(".delete_error_overview").hide();
	jQuery(".advanced_select_penquiry_form").hide();
	jQuery(".advanced_product_form_shortcode").hide();
	jQuery(".advanced_select_cenquiry_form").hide();
	jQuery(".advanced_cart_form_shortcode").hide();
	jQuery('#add_fields').click(function()
	{
	var field = jQuery("#fields").val();
	
	jQuery("#add_fields").attr('disabled', true);
	jQuery.ajax({
	    type: 'POST',
	    url: ajaxurl,
	    data: {"action": "select_field", field:field},
	    success: function(data)
	    {
	    	jQuery("#sortable1").append(data);
	    	jQuery("#add_fields").attr('disabled', false);
	    }
	});
	return false;
	});

	jQuery( "#sortable1" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();

    jQuery("#vcf7_tabs").tabs();

    jQuery("#recaptcha_form").validate({
			rules: {
				sitekey: "required",
				secret: "required"
			},
			messages:{
			},
			submitHandler: function()
			{
				var formData = jQuery("#recaptcha_form").serialize();
				jQuery.ajax({
							    type: "post",
							    dataType: "json",
							    url: my_ajax_object.ajax_url,
							    data: {formData:formData,action:'recaptcha_generate'},
							    success: function(msg)
							    {
							       	jQuery(".captcha_details span.success_msg").show();
							    }
							});
			}
		});

    jQuery("#smtp_form").validate({
			rules: {
				sitekey: "required",
				secret: "required"
			},
			messages:{
			},
			submitHandler: function()
			{
				var formData = jQuery("#smtp_form").serialize();
				jQuery.ajax({
							    type: "post",
							    dataType: "json",
							    url: my_ajax_object.ajax_url,
							    data: {formData:formData,action:'smtp_generate'},
							    success: function(msg)
							    {
							       	jQuery(".captcha_details span.success_msg").show();
							    }
							});
			}
		});

    jQuery("#smtp_setting_form").validate({
			rules: {
				smtp_username: "required",
				smtp_password: "required",
				smtp_host: "required",
				smtp_secure: "required",
				smtp_port: "required"
			},
			messages:{
			},
			submitHandler: function()
			{
				var formData = jQuery("#smtp_setting_form").serialize();
				jQuery.ajax({
							    type: "post",
							    dataType: "json",
							    url: my_ajax_object.ajax_url,
							    data: {formData:formData,action:'smtp_setting_form'},
							    success: function(msg)
							    {
							       	jQuery(".captcha_details span.success_msg").show();
							    }
							});
			}
		});

    jQuery("#advance_form_setting").validate({
			rules: {
			},
			messages:{
			},
			submitHandler: function()
			{
				var formData = jQuery("#advance_form_setting").serialize();
				jQuery.ajax({
							    type: "post",
							    dataType: "json",
							    url: my_ajax_object.ajax_url,
							    data: {formData:formData,action:'advance_setting_form'},
							    success: function(msg)
							    {
							       	jQuery(".captcha_details span.success_msg").show();
							    }
							});
			}
		});

    jQuery('#example').DataTable({
    	"scrollX": true
    });


    

    jQuery("#smtp_check").change(function()
    {
	    if(this.checked)
	    {
	        jQuery("tr.smtp_col").show();
	    }
	    else
	    {
	    	jQuery("tr.smtp_col").hide();
	    }
	});

	jQuery("#mail-2-active").change(function()
    {
	    if(this.checked)
	    {
	        jQuery("#vcf-mail-2 table.form-table").show();
	    }
	    else
	    {
	    	jQuery("#vcf-mail-2 table.form-table").hide();
	    }
	});
	
	jQuery("#show_enquiry_detail_page").change(function()
    {
		if (jQuery("#show_enquiry_detail_page").is(":checked"))
		{
            jQuery(".advanced_select_penquiry_form").show();
			jQuery(".advanced_product_form_shortcode").show();
		}
		else
		{
			jQuery(".advanced_select_penquiry_form").hide();
			jQuery(".advanced_product_form_shortcode").hide();
		}
	})
	jQuery("#show_enquiry_cart_page").change(function()
    {
		if (jQuery("#show_enquiry_cart_page").is(":checked"))
		{
			
            jQuery(".advanced_select_cenquiry_form").show();
			jQuery(".advanced_cart_form_shortcode").show();
		}
		else
		{
			jQuery(".advanced_select_cenquiry_form").hide();
			jQuery(".advanced_cart_form_shortcode").hide();
		}
	})
	
	jQuery(".advanced_select_cenquiry_form").change(function()
    {
		jQuery(".advanced_cart_form_shortcode").show();
	})
	
	jQuery(".advanced_select_penquiry_form").change(function()
    {
		jQuery(".advanced_product_form_shortcode").show();
	})
});

function remove(val)
{
	if (confirm("Are you sure you want to delete this field?"))
	{
		jQuery('#box-'+val).css('display','none');
		jQuery('#input-'+val).attr('value','');
	}
}

function recaptcha_reset()
{
	if (confirm("Are you sure reset data?"))
	{
		var formData = jQuery("#recaptcha_form").serialize();
		jQuery.ajax({
					    type: "post",
					    dataType: "json",
					    url: my_ajax_object.ajax_url,
					    data: {formData:formData,action:'recaptcha_reset'},
					    success: function(msg)
					    {
					    	jQuery(".captcha_details span.success_msg").show();
					    	location.reload();
					    }
					});
	}
}

function smtp_reset()
{
	if (confirm("Are you sure reset data?"))
	{
		var formData = jQuery("#smtp_form").serialize();
		jQuery.ajax({
					    type: "post",
					    dataType: "json",
					    url: my_ajax_object.ajax_url,
					    data: {formData:formData,action:'smtp_reset'},
					    success: function(msg)
					    {
					    	jQuery(".captcha_details span.success_msg").show();
					    	location.reload();
					    }
					});
	}
}

function advance_setting_reset()
{
	if (confirm("Are you sure you want to reset this field?"))
	{
		var formData = jQuery("#advance_form_setting").serialize();
		jQuery.ajax({
					    type: "post",
					    dataType: "json",
					    url: my_ajax_object.ajax_url,
					    data: {formData:formData,action:'advance_setting_reset'},
					    success: function(msg)
					    {
					    	jQuery(".captcha_details span.success_msg").show();
					    	location.reload();
					    }
					});
	}
}

function delete_list_view(num)
{
	if (confirm("Are you sure you want to delete this field?"))
	{
		jQuery.ajax({
		    type: "post",
		    dataType: "json",
		    url: my_ajax_object.ajax_url,
		    data: {data_id:num,action:'delete_list_view'},
		    success: function(msg)
		    {
		    	jQuery(".delete_error_overview").show();

		    	location.reload();
		    }
		});
	}
}

function add_more_options(val,id)
{
	var count;
	var items = [];
	jQuery(".select_row_"+id).each(function()
	{
    	count++;
    	items.push(count);
  	});
	jQuery(".option_"+id).append('<div class="row select_row_'+id+' select_row_'+id+'-'+items.length+'"><div class="col-md-4"><div class="form-group"><input type="text" placeholder="Option" class="r_opt form-control" name="option['+id+']['+items.length+']"></div></div><div class="col-md-4"><div class="form-group"><input type="text" placeholder="Value" class="r_val form-control" name="option_val['+id+']['+items.length+']"></div></div><div class="col-md-4"><i class="margin-top-5 fa fa-plus-circle fa-2x default_blue add_more_radio" onclick="add_more_options('+items.length+','+id+')"></i><i class="col-md-offset-1 fa fa-times-circle default_red fa-2x remove_more_radio" data-field="43242" onclick="remove_more_options('+items.length+','+id+')"></i></div></div>');
}
function remove_more_options(val,id)
{
	jQuery(".select_row_"+id+"-"+val).remove();
}

function smtp_reset()
{
	if (confirm("Are you sure reset data?"))
	{
		var formData = jQuery("#smtp_setting_form").serialize();
		jQuery.ajax({
					    type: "post",
					    dataType: "json",
					    url: my_ajax_object.ajax_url,
					    data: {formData:formData,action:'smtp_reset'},
					    success: function(msg)
					    {
					    	jQuery(".captcha_details span.success_msg").show();
					    	location.reload();
					    }
					});
	}
}

jQuery(window).on("load", function()
{
	if(jQuery("#smtp_check").is(':checked'))
	{
		jQuery("tr.smtp_col").show();
	}
	else
	{
		jQuery("tr.smtp_col").hide();
	}

	if(jQuery("#mail-2-active").is(':checked'))
	{
		jQuery("#vcf-mail-2 table.form-table").show();
	}
	else
	{
		jQuery("#vcf-mail-2 table.form-table").hide();
	}
	
	if(jQuery("#show_enquiry_detail_page").is(':checked'))
	{
		jQuery(".advanced_select_penquiry_form").show();
		jQuery(".advanced_product_form_shortcode").hide();
		if(jQuery("#pdetail_form_id").val() != '')
		{
			jQuery(".advanced_product_form_shortcode").show();
		}
	}
	if(jQuery("#show_enquiry_cart_page").is(':checked'))
	{
		jQuery(".advanced_select_cenquiry_form").show();
		jQuery(".advanced_cart_form_shortcode").hide();
		if(jQuery("#cart_form_id").val() != '')
		{
			jQuery(".advanced_cart_form_shortcode").show();
		}
	}
})

