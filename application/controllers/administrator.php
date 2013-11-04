<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller 
{
	public function __construct() 
	{
        parent::__construct();
    }
	
	// This will load the admin login page
	public function index()
	{
		//echo "called";
		$this->load->view('admin/adminLogin.php');
	}
}	