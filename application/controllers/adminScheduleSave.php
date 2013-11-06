<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminScheduleSave extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
			
	}
##################################################################################################
	
	function schedule_save()
	{

		//setting custom validation messages
		$this->form_validation->set_message('required', '%s cannot be empty..');
		$this->form_validation->set_message('valid_email', '%s should be a valid email..');
		$this->form_validation->set_message('recaptcha_matches', 'Wrong code.');	
		
		
		//setting validation rules
		$this->form_validation->set_rules('startTime', 'Start Time', 'required|xss_clean');
		$this->form_validation->set_rules('endTime','End Time', 'required|xss_clean');
		$this->form_validation->set_rules('capacity',' Capacity ', 'required|xss_clean');
		$this->form_validation->set_rules('numOfSeats',' Number Of Seats ', 'xss_clean');
		$this->form_validation->set_rules('note','Note ', 'xss_clean');
		
	
		if ($this->form_validation->run() == true)
		{
			
			//asigning post data to variables
			$vehicleType = $this->input->post('vehicleType');
			$startTime = $this->input->post('startTime');
			$endTime = $this->input->post('endTime');
			$capacity = $this->input->post('capacity');
			$numOfSeats = $this->input->post('numOfSeats');
			$endTime = $this->input->post('endTime');
			$note = $this->input->post('note');
			
			$this->load->model('adminScheduleManagement');
			$params = array($vehicleType,$startTime,$endTime,$capacity,$numOfSeats,$note,$note,1,1);
			$query = 'INSERT INTO tripschedule(vehicleid,starttime,endtime,capacity,availableseets,note,uid,status) 
					VALUES(?,?,?,?,?,?,?,?)'; 
			
			$result = $this->adminScheduleManagement->scheduleSave($query,$params);
			
			if($result == true){
				redirect('administrator/schedule');
				echo '{"successfully_inserted": "passed"}';
				}
			else{
				echo '{"successfully_inserted": "failed"}';
				}
	
			
			}
		else{
			
			//if username & passwords are empty of bad inputs these json data will be passed to ajax_admin_login.js.
			//then the error messages will displayed.
		
			$output = '{"review_name":"'.form_error('review_name').'",
			"review_email":"'.form_error('review_email').'",
			"review_message":"'.form_error('review_message').'", "recaptcha_challenge_field" : "'.form_error('recaptcha_challenge_field').'"}';
	
	
			echo $output;
			}
	}
}