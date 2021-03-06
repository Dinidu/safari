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
		
		
		$query = "SELECT * FROM users where user_name=?";
		
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
	
	function user_register($user_name, $userType, $fullName, $email, $contactNum, $password){
		
	$data = array(
			'user_name' => $user_name,
			'user_password' => $password,
			'full_name'=>$fullName,
			'email'=>$email,
			'contact_number'=>$contactNum,
			'user_type'=>$userType,
			'status'=>1
	);
	
			$this->db->insert('users', $data);
	
			return true;
	}
	
	
}
?>