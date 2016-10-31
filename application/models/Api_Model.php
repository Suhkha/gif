<?php 
/**
* 
*/
class Api_Model extends CI_Model {
  
  function __construct()	{
    parent::__construct();
    $this->load->database();
  }

    /*Extrae todos los gifs subidos
    y ordenados en descendete*/
    public function index(){
      $this->db->from('gifs')->where('active', "1");
      $this->db->order_by("id", "desc");
      $query = $this->db->get(); 
      return $query->result_array();
    }

  }

  ?>