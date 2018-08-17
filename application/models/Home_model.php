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

    function add_consulta_web($array)
    {
    
        $array_consulta_web['nombre'] = $array['nombre'];
        $array_consulta_web['mensaje'] = $array['mensaje'];

        if($array['apellido']) $array_consulta_web['apellido'] = $array['apellido'];
        if($array['email']) $array_consulta_web['email'] = $array['email'];
        if($array['whatsapp']) $array_consulta_web['whatsapp'] = $array['whatsapp']; 

        return $this->db->insert('contacto',$array_consulta_web);
 
    }


}

/* End of file  */
/* Location: ./application/models/ */