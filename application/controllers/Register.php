<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('users/register');
	
	}



	public function save()
	{
		$this->load->library('form_validation');
        
		if($this->form_validation->run() === FALSE){
			$this->load->view('users/register');
			
		}else{

			$this->load->model('register_model');
			$data['query'] = $this->register_model->save();

		}
	
	}
}