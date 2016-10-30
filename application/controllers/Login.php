<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login_user(){
		$this->load->library('form_validation');
        
		if($this->form_validation->run() === FALSE){
			$this->load->view('login');
			
		}else{
			$this->load->model('login_model');

			//Validate correct data
			$email 		= $this->input->post('email');
			$password 	= $this->input->post('password');

			if ($this->login_model->check_data($email, $password)) {

				$user = $this->login_model->get_user_data($email);

				$_SESSION['id']        = $user->id;
				$_SESSION['nickname']  = $user->nickname;
				$_SESSION['logged_in'] = true;
				
				$this->load->view('gifs/dashboard');

			}else{

				$this->data['alert'] = 'Are you sure you are registered on this site?';
				$this->load->view('login',$this->data);
				
			}



		}
	}
}
