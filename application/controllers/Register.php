<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/*Muestra el formulario de inicio de sesión*/
	public function index(){
		$this->load->view('users/register');
	}

	/*Se valida el formulario y se registra el usuario
	en el modelo Register*/
	public function save(){
		$this->load->library('form_validation');
        
		if($this->form_validation->run() === FALSE){
			$this->load->view('users/register');
			
		}else{

			$this->load->model('register_model');

			$email = $this->input->post('email');
			$check_email  = $this->register_model->check_email($email);

			if($check_email != ""){
				$this->data['alert'] = 'We got this email, try with another one! ';
				$this->load->view('users/register',$this->data);
			}else{
				$data['query'] = $this->register_model->save();
				$this->load->view('login');
			}
			

		}
	}
}