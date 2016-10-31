<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('api_model');
	}

    /* Muestra un json con los gifs de todos los usuarios. */
    public function index(){
    	$data['api'] = $this->api_model->index();
    	header('Content-Type: application/json');
    	echo json_encode($data);
    }
}