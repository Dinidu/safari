<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zones extends CI_Controller {

	// This will load the admin login page
	public function residental()
	{
		$this->load->view('zones/residental');
	}
	public function index()
	{
		$this->load->view('pages/full-width-content');
	}
	
}	