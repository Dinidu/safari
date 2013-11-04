<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminMessageModel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	function getMessageCount()
	{
		$query ="SELECT * FROM messages WHERE status = 1";
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
}