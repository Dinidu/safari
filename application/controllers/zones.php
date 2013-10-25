<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zones extends CI_Controller {

	// This will load the admin login page
	public function residental()
	{
		$this->load->view('zones/residental');
	}
	public function african_zone()
	{
		$this->load->view('zones/Africanzone');
	}
	public function austrailian_zone()
	{
		$this->load->view('zones/Austrailianzone');
	}
	public function bengal_zone()
	{
		$this->load->view('zones/Bengalzone');
	}
	public function lion_zone()
	{
		$this->load->view('zones/Lionzone');
	}
	public function srilankan_zone()
	{
		$this->load->view('zones/Srilankanzone');
	}
}	