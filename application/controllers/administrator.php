<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller 
{
	private $view_data = array();
	
	public function __construct() 
	{
        parent::__construct();
		$this->load->library('image_CRUD');
    }
	
	// This will load the admin login page
	public function index()
	{
		$this->load->view('admin/adminLogin');
	}
	
	 // handles the Administrator log in
	function login_validate()
	{
	
		$this->load->library('form_validation');
			
		//setting custom validation messages
		$this->form_validation->set_message('required', '%s cannot be empty.');
		$this->form_validation->set_message('alpha_dash', '%s please use / of - only ');
		
		//setting validation rules
		$this->form_validation->set_rules('admin_username', 'User Name', 'required|xss_clean|max_length[45]|alpha_dash');
		$this->form_validation->set_rules('admin_password','Password', 'required|xss_clean|max_length[45]|alpha_dash');
		
	
		if ($this->form_validation->run() == true)
		{
			
			//asigning post data to variables
			$admin_name = $this->input->post('admin_username');
			$admin_password = $this->input->post('admin_password');
			
			$this->load->model('adminLoginModel');
			$valideuser = $this->adminLoginModel->veryfy_user($admin_name,$admin_password);
			//$valideuser = true;
			if($valideuser == true)
			{	
				$this->session->set_userdata('admin_username', $admin_name );
				echo '{"validation_result": "passed"}'; //if user is a valid user send json data to ajax_admin_login.js
				
			}
				
			else
			{
				echo '{"registration" : "falied"}'; //if something happern during the user validation process ,this json data will pass to create error messages.
				//echo "<script>$().toastmessage('showErrorToast', 'You are not a registered user!');<script>";
				$this->session->sess_destroy();
				$this->session->set_flashdata('login3','You are not a registered user!');
				//redirect(base_url()."/administrator");  
			}
			
		}
		else
		{
			
			//if username & passwords are empty or bad inputs these json data will be passed to ajax_admin_login.js.
			//then the error messages will displayed.
		
			$output = '{"admin_username":"'.form_error('admin_username').'",
			"admin_password":"'.form_error('admin_password').'"}';
	
			echo $output;
			$this->session->sess_destroy();
			$this->session->set_flashdata('login',form_error('admin_username') );
			$this->session->set_flashdata('login2',form_error('admin_password') );
			//index();
			//redirect(base_url()."/administrator"); 
			
			//echo "<script>$().toastmessage('showErrorToast', 'You are not a registered user!');<script>";
		}
	}

	function log_out(){
		
		//define varible for username which is going to change
		$username = $this->session->userdata('username');
		
		//destroy the session data
		$this->session->sess_destroy();
	
		redirect(base_url()."administrator"); 
		}

	function alpha_dash_space($str_in){
	    return ( ! preg_match("/^([-a-z0-9_-\s,().\/])+$/i", $str_in)) ? FALSE : TRUE;
    }

    function numeric_slash($str_in){
    	return ( ! preg_match("/^([0-9\/])+$/i", $str_in)) ? FALSE : TRUE;
    }    	
	
	//render admin dashboard
	function dashboard()
	{
			//this will load the adminmessage model 
			$this->load->model('adminMessageModel');
			
			//get new messages 
			$this->view_data['messages'] = $this->adminMessageModel->getMessageCount();
			$this->view_data['message_count'] = count( $this->view_data['messages'] );
			
			$this->load->view('admin/adminDashboard', $this->view_data );	
	}
	
	//render the admin slider view
	function slider( $output = null )
	{
		$this->load->model('adminSliderModel');
	
		$this->view_data['slider_details'] = $this->adminSliderModel->getSliderDetails();
		
		$this->load->view('admin/adminSlider', $this->view_data);
	}
	
	//render athe adcmin anima view
	function animal()
	{
		$this->load->model('adminanimalmanagementmodel');
	
		$this->view_data['animal_details'] = $this->adminanimalmanagementmodel->getAnimalDetails();
		
		$this->load->view('admin/adminAnimalMangement',$this->view_data );
	}
	//render athe admin animal edit view
	function animalEdit()
	{
		$animal_id = $this->input->post('animal_id');
		echo '{"animal_edit": '.$animal_id.' }';
	}
	
	//render athe adcmin schedule view
	function schedule()
	{
		$this->load->model('adminScheduleManagement');
		$this->view_data['schedule_details'] = $this->adminScheduleManagement->getScheduleDetails();
		$this->view_data['vehicle_details'] = $this->adminScheduleManagement->getVehicleDetails();
		
		$this->load->view('admin/adminSchedule',$this->view_data );	
	}
	
	//render admin gallery view
	function gallery()
	{
		$this->load->model('adminGalleryManagement');
		$this->view_data['gallery_details'] = $this->adminGalleryManagement->getGalleryDetails();
		$this->load->view('admin/adminGallery', $this->view_data );
		
	}
	
	//render admin messages view
	function messages()
	{
		
	}
	
	//render admin user view
	function user()
	{
		$this->load->model('adminUserManagement');
		$this->view_data['user_details'] = $this->adminUserManagement->getUserDetails();
		$this->view_data['user_types'] = $this->adminUserManagement->getUserTypes();
		
		$this->load->view('admin/adminUser',$this->view_data );	
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}