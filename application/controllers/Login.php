<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/*Muestra la vista de login*/
	public function index(){
		$this->load->view('login');
	}

	/*Permite la validación de datos de usuario 
	y asignación de sesión de login en caso de ser exitoso*/
	public function login_user(){
		$this->load->library('form_validation');

		if($this->form_validation->run() === FALSE){
			$this->load->view('login');
			
		}else{
			$this->load->model('login_model');

			//Validación del formulario
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

	//Da de baja la sesión de usuario
	public function logout(){
		session_unset();
		redirect('/');
	}
}
