<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gif extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('gif_model');
		$this->load->helper('url_helper');
	}

    /* Muestra la vista con información de la bd 
    todos los gifs subidos. */
    public function index(){
    	$data['gifs'] = $this->gif_model->view();
    	$this->load->view('gifs/dashboard',$data);
    }

	/*Permite subir los gifs y guardarlos 
	en su carpeta correspondiente*/
	public function save(){	
		$upload_folder = "./assets/uploads/";
		$name = $_FILES["source"]["name"];
		$final_path = $upload_folder.$name;
		move_uploaded_file($_FILES["source"]["tmp_name"],$final_path);
		$data['query'] = $this->gif_model->save();
	}

	/*Permite activar o desactivar la visibilidad 
	de los gifs*/
	public function update(){
		$data['query'] = $this->gif_model->update();
	}
}