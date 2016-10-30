<?php 
/**
* 
*/
class Gif_Model extends CI_Model {
 	
 	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


    public function save()
    {
        $this->source = $_FILES["source"]["name"];
        $this->active = 1;
        $this->db->insert('gifs', $this);
    }

}

?>