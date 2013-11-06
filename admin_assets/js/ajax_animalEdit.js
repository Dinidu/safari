//JavaScript Document for uploading images to the slider
	$('#animal_edit').live('click',function()
	{
		var form_data = {
			animal_id:$('#animal_id').val(),
			RiDSafSL2013_tok : $("input[name=RiDSafSL2013_tok]").val()
		    			};
					$.ajax({
						type: "POST",
						url: baseurl+"administrator/animalEdit",						
						dataType: "json",
						data : form_data,				
						cache:false,
						success: 
		              		function(){	

							}
									
						});
			return false;	
			});
