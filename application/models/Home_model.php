<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
 
	public function __construct()
	{
		parent::__construct();
		
		
	}

	function get_publicaciones()
    {
   	
    	$resultado = $this->db->query("	SELECT *
						    			FROM publicacion p  " );

    	return $resultado->result_array();
    }

    function get_carrusel()
    {
   	
    	$resultado = $this->db->query("	SELECT *
						    			FROM carrusel p  " );

    	return $resultado->result_array();
    }


}

/* End of file  */
/* Location: ./application/models/ */