<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function drop_us_line()
	{

			//asigning post data to variables
			$Name = $this->input->post('Name');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			
			//if validations ok, send the  email to the  owner
			$this->load->library('email');
			$this->email->from($email, $Name);
			$this->email->to('iamdinidu@gmail.com'); 
			/*$this->email->cc('another@another-example.com');*/ 
			$this->email->bcc('udayasricl@gmail.com'); 
			
			$this->email->subject('Drop Us Line Form - Lankaway');
			$this->email->message($message);	
			
			$this->email->send();
			
			echo "Ok";
			
	}	


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */