<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminSliderModel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	function getSliderDetails()
	{
		$query ="SELECT * FROM slider_images ";
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
}