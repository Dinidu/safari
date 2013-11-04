<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminLoginModel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
##################################################################################################################################
//check username and password

	function veryfy_user($admin_username, $admin_password)
	{
		
		$params = array('iterationCount'=>'8', 'portableHashes'=>'false');
		$this->load->library('PasswordHash', $params);
		
		
		$query = "SELECT * FROM admin_users where user_name=?";
		
		$q = $this->db->query($query,$admin_username);
		
		

		if ($q->num_rows >0)
		{
			
			//check password 
			
			$ok = 0;
			
			$row =  $q->row();
			 
			$enc_password_check = $this->passwordhash->CheckPassword($admin_password, $row->user_password);
			
			if ($enc_password_check == 1)
			{
				
				return $q;

			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	
	}
	//######################################################################################################
	//this updates the data in to database when admin create a new user
	
	function user_register($admin_username, $admin_password){
		
	$data = array(
			'user_name' => $admin_username,
			'user_password' => $admin_password
	);
	
			$this->db->insert('admin_users', $data);
	
			return true;
	}
	
	
}
?>