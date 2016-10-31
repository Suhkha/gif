<?php 
/**
* 
*/
class Gif_Model extends CI_Model {
  
  function __construct()	{
    parent::__construct();
    $this->load->database();
  }

    /*Permite guardar en base datos la información
    de la imagen/gif subida*/
    public function save(){   
      $this->source = $_FILES["source"]["name"];
      $this->active = 0;
      $this->id_user = $_SESSION['id'];
      $this->db->insert('gifs', $this);
    }

    /*Extrae todos los gifs subidos
    y ordenados en descendete*/
    public function view(){
      $this->db->from('gifs');
      $this->db->order_by("id", "desc");
      $query = $this->db->get(); 
      return $query->result_array();
    }

    /*Actualiza en la tabla el gif activado 
    o desactivado según corresponda*/
    public function update(){
      $id__gif = $_POST['id__gif'];
      $status  = $_POST['status'];

      if($status == "1"){
        $this->db->set('active', '1');
        $this->db->where('id', $id__gif);
        $this->db->update('gifs');
      }else{
        $this->db->set('active', '0');
        $this->db->where('id', $id__gif);
        $this->db->update('gifs');    
      }
    }
  }

  ?>