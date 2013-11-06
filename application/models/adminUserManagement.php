<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminUserManagement extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	//get the user details from the database
	function getUserDetails()
	{
		$query ="SELECT user_id,user_name,user_password,full_name,email,contact_number,users.user_type,status,
		usertype_id,type 
		FROM users 
		LEFT JOIN user_types ON users.user_type=user_types.usertype_id ; ";
		
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
	
	
	function getUserTypes()
	{
		$query ="SELECT * FROM user_types ; ";
		
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
	
	
	//save the data to the user table
	function userSave( $query, $params )
	{
		$result = $this->db->query($query,$params);
			if($result != false){
				
				$id = mysql_insert_id();
				return true;
			}
			else{
				return false;
			}
	}
}