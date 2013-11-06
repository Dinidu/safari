<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminanimalmanagementmodel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	function getAnimalDetails()
	{
		$query ="SELECT animal_id,name,zoneid,discription,image,is_available,uid,added_date,
		user_id,user_name,zone_id,zone_name 
		FROM animals 
		LEFT JOIN users ON animals.uid=users.user_id 
		LEFT JOIN zones ON animals.zoneid= zones.zone_id; ";
		
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