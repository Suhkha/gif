<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gif extends CI_Controller {

	public function index()
	{
		$this->load->view('gifs/dashboard');
	
	}

	public function save()
	{
        $output_dir = "./assets/uploads/";
        $fileName = $_FILES["source"]["name"];
        $final_path = $output_dir.$fileName;
		move_uploaded_file($_FILES["source"]["tmp_name"],$final_path);

		$this->load->model('gif_model');
		$data['query'] = $this->gif_model->save();
	}

}