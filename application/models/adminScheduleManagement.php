<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminScheduleManagement extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	function getScheduleDetails()
	{
		$query ="SELECT tripid,vehicleid,starttime,endtime,capacity,availableseets,tripschedule.note,uid,tripschedule.status,
		user_id,user_name,id,vehicleType 
		FROM tripschedule 
		LEFT JOIN users ON tripschedule.uid=users.user_id 
		LEFT JOIN vehicle ON tripschedule.vehicleid= vehicle.id; ";
		
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
	function getVehicleDetails()
	{
		$query ="SELECT * FROM vehicle ; ";
		
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
	
	
	function scheduleSave( $query, $params )
	{
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