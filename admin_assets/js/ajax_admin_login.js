// JavaScript Document for administrator login

$(document).ready(function(){
	
	//after the retailer click the log in button this will be run.
    $('#submit_login').live('click',function(){
		
		
		var form_data = {
		    			admin_username: $('#admin_username').val(),
						admin_password: $('#admin_password').val(),
		                zkyVilminAd_tok : $("input[name=zkyVilminAd_tok]").val()//this is the hide token. this should be included to send the post data to the sysytem
		            };
				
					$.ajax({
						type: "POST",
						url: baseurl+"login/login_validate", // this will pass the post data to the controller ->administrator, login function
						dataType: "json",
						data : form_data,
						cache:false,
						success: 
		              		function(data){
								console.log(data);
								
//------------------------------------check the json data coming from the administrator/login function ---------------


								if(data.validation_result == "passed" ){
									
									//alert(' You are successfully log in .. ' );
										$().toastmessage('showSuccessToast', "You are successfully log in .. ");
											
									window.location.href = baseurl+"admin"; //this will load the administrator main panel after user log in
						 		}
								
								else if( data.registration == "falied" ){
									$().toastmessage('showErrorToast', 'You are not a registered user!');
									//alert('please enter a correct user name & password');
									}
									
								else{
									
									//if the user name is wrong this will alert the error message
									if(data.admin_username){
									$().toastmessage('showWarningToast', data.admin_username);
										//alert(data.admin_username);
									}
									
									//if the password is wrong this will alert the error message
									if(data.admin_password){
										$().toastmessage('showWarningToast', data.admin_password);
										//alert(data.admin_password);
										
									}
								}
							}
									
						});
			
			return false;	
		});
});
