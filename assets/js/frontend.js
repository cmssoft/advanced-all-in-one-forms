jQuery(document).ready(function(){
	jQuery('.success-error').hide();
	jQuery('.loader_gif').hide();
	jQuery('.form-group.success-error-captcha').hide();
	jQuery('input.timepicker').timepicker({});
	jQuery( "input.datepicker" ).datepicker();
	jQuery(".vcf7form").each(function()
	{
		var vcid = jQuery(this).attr('id');
		var formid = jQuery(this).data('id');

		var filesize = jQuery("#"+vcid).find(".add_file").find(".form-control").data('filesize');
		var extension = jQuery("#"+vcid).find(".add_file").find(".form-control").attr('accepted');
		
    	jQuery("#"+vcid).validate({	
			rules: {				
			},
			messages:{
			},
			errorPlacement: function(error, element)
			{
	            if (element.attr("type") == "radio" || element.attr("type") == "checkbox")
	            {
	                error.insertAfter(element.parent().parent().parent());
	            }
	            else
	            {
	                error.insertAfter(element);
	            }
        	},
			submitHandler: function()
			{
				var elem = jQuery("#"+vcid).find(".g-recaptcha");
				jQuery('#file_error').hide();
				if(elem.length == 1)
				{
					var wwcaptcha = grecaptcha.getResponse();
					if(wwcaptcha == ''){
						jQuery('.form-group.success-error-captcha').show();
					}else{
						jQuery('.form-group.success-error-captcha').hide();

						jQuery('.loader_gif').show();
						var file_Arr = [];
						jQuery("#"+vcid).find(".add_file").each(function(){
							var file_data = jQuery(this).find('.form-control').prop('files')[0];
							file_Arr.push(file_data);
						});

						var formData1 = new FormData();
						formData1.append('file', file_Arr[0]);
						formData1.append('action', 'aaiof_vcfform_insert_data');
						formData1.append('vcf_id', formid);
						formData1.append('fields', jQuery("#"+vcid).serialize());
						
						formData1.append('filesize', filesize);
						formData1.append('extension', extension);
						jQuery.ajax({
							url: my_ajax_object.ajax_url,
							/*dataType: "json",*/
							type: "post",
							contentType: false,
							processData: false,
							data: formData1,
							beforeSend: function() {
								jQuery('.vcf7form button[type=submit]').prop('disabled', true);
							},
							success: function(result){
								jQuery('.loader_gif').hide();
														
								if(result == 0)
								{
									var redirect_url = jQuery('.success-error').data('url');
									if(redirect_url != '')
									{
										window.location.href = redirect_url;
									}
									else
									{
										jQuery('.vcf7form button[type=submit]').prop('disabled', false);   
										jQuery('.success-error').show();
									}
								}
								else
								{
									jQuery('.vcf7form button[type=submit]').prop('disabled', false);      
									jQuery('#file_error').show();
									jQuery('#file_error').html(result);
								}
							}
						});
					}
				}
				else
				{	
					jQuery('.loader_gif').show();
					var file_Arr = [];
					jQuery("#"+vcid).find(".add_file").each(function()
					{
						var file_data = jQuery(this).find('.form-control').prop('files')[0];
						file_Arr.push(file_data);
					});
					
					var formData1 = new FormData();
		    		formData1.append('file', file_Arr[0]);
		    		formData1.append('action', 'aaiof_vcfform_insert_data');
		    		formData1.append('vcf_id', formid);
		    		formData1.append('fields', jQuery("#"+vcid).serialize());
		    		
		    		formData1.append('filesize', filesize);
		    		formData1.append('extension', extension);
					jQuery.ajax({
					    url: my_ajax_object.ajax_url,
					    /*dataType: "json",*/
					    type: "post",
				        contentType: false,
				        processData: false,
					    data: formData1,
						beforeSend: function() {
					        jQuery('.vcf7form button[type=submit]').prop('disabled', true);
					    },
					    success: function(result)
					    {
					    	jQuery('.loader_gif').hide();
					       	if(result == 0)
					       	{
								var redirect_url = jQuery('.success-error').data('url');
					       		if(redirect_url != '')
					       		{
					       			window.location.href = redirect_url;
					       		}
					       		else
					       		{
									jQuery('.vcf7form button[type=submit]').prop('disabled', false);   
					       			jQuery('.success-error').show();					       			
					       		}
					       	}
					       	else
					       	{
								jQuery('.vcf7form button[type=submit]').prop('disabled', false);   								   
					       		jQuery('#file_error').show();
					       		jQuery('#file_error').html(result);
					       	}
					    }
					});
				}
			}
		});
  	});
});