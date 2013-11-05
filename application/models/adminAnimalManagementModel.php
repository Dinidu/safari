<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminanimalmanagementmodel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	function getAnimalDetails()
	{
		$query ="SELECT * FROM animals ";
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
	
	/*This will save the */
	function imageUpload($query,$params){
			
			$result = $this->db->query($query,$params);
			if($result != false){
				
				$id = mysql_insert_id();
				
				//echo $id;
				return true;
			}
			else{
				return false;
			}
		
	} 	
}