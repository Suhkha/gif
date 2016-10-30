<?php 
/**
* 
*/
class Register_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function save(){
		$this->nickname = $_POST['nickname'];
		$this->email 	= $_POST['email'];
		$this->password = password_hash($_POST['password'],PASSWORD_DEFAULT);

		$this->db->insert('users', $this);
	}

}

?>