<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminUserRegistration extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
			
	}
##################################################################################################
	
	function adminUserSave()
	{

		//setting custom validation messages
		$this->form_validation->set_message('required', '%s cannot be empty..');
		$this->form_validation->set_message('valid_email', '%s should be a valid email..');
		$this->form_validation->set_message('recaptcha_matches', 'Wrong code.');	
		
		
		//setting validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'required|xss_clean');
		$this->form_validation->set_rules('email','Email', 'required|xss_clean');
		$this->form_validation->set_rules('password1',' password ', 'required|xss_clean|email');
		$this->form_validation->set_rules('password2',' password ', 'required|xss_clean');
		
	
		if ($this->form_validation->run() == true)
		{
			//asigning post data to variables
			$user_name = $this->input->post('user_name');
			$userType = $this->input->post('userType');
			$fullName = $this->input->post('fullName');
			$email = $this->input->post('email');
			$contactNum = $this->input->post('contactNum');
			$password1 = $this->input->post('password1');
			$password2 = $this->input->post('password2');
			
			if( $password1 ==  $password2 )
			{
				$this->load->model('adminLoginModel');
				$params = array('iterationCount'=>'8', 'portableHashes'=>'false');
				$this->load->library('PasswordHash', $params);
				
			
				$valideuser = $this
				->adminLoginModel
				->user_register(
						$user_name,$userType,$fullName,$email,$contactNum,
						$this->passwordhash->HashPassword($password1)
					
				);
				
				echo 'user creation success';
				redirect('administrator/user');
		
			}
			else
			{
				echo 'passwords are not matchnig.please enter equla passwords';
				
			}
					
		}
		else
		{
			echo 'forma validation error';
			
		}
	}
}