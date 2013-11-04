<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	// This will load the admin login page
	public function index()
	{
		$this->load->view('admin/adminLogin');
	}
}	