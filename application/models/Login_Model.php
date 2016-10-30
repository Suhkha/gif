<?php 
/**
* 
*/
class Login_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}


	public function check_data($email, $password){
		$this->db->select('password')->from('users')->where('email',$email);
		$password_db = $this->db->get()->row('password');

		return password_verify($password, $password_db);
		
	}

	public function get_user_data($email){
		$this->db->from('users');
		$this->db->where('email', $email);
		return $this->db->get()->row();
	}
}

?>