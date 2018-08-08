<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Administrador_model'); 
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('administrador.php',(array)$output);
	}
 

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}


	public function carrusel()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('carrusel');
			$crud->set_subject('Carrusel');
			$crud->required_fields('titulo', 'descripcion', 'path_imagen');
			$crud->columns('id_carrusel','titulo', 'titulo2', 'descripcion', 'path_imagen');
 
			$crud->display_as('path_imagen','Imagen'); 
 			$crud->set_field_upload('path_imagen','assets/img/carrusel');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function publicacion()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('publicacion');
			$crud->set_subject('Publicación');
			$crud->required_fields('titulo' );
			$crud->columns('id_publicacion','titulo', 'descripcion', 'path_imagen', 'iframe');
 
			$crud->display_as('path_imagen','Imagen'); 
 			$crud->set_field_upload('path_imagen','assets/img/publicacion');

 			$crud->callback_column('iframe',array($this,'add_field_callback_1'));


			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function contacto()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('contacto');
			$crud->set_subject('Contacto');
			$crud->required_fields('nombre', 'apellido', 'email');
			$crud->columns('nombre','apellido', 'email', 'telefono', 'fecha' );
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_edit();
			$output = $crud->render();
			
			

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
 
	function add_field_callback_1($value, $row)
	{
		return $value.'';
	}


}

/*
public function investigacion_autores()
{
	try{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('investigacion_autor');
		$crud->set_relation('id_investigacion','investigacion','titulo');

		$crud->set_subject('Autores');
		$crud->required_fields('nombre', 'apellido');
		$crud->columns('id_investigacion','nombre', 'apellido', 'foto' );

		$crud->display_as('id_investigacion','Investigacion'); 
			
			$crud->set_field_upload('foto','assets/img/autores');

		$output = $crud->render();

		$this->_example_output($output);

	}catch(Exception $e){
		show_error($e->getMessage().' --- '.$e->getTraceAsString());
	}
}*/

/*
function add_field_traer_autores($value, $row)
{
	 echo "valor".$value;
}*/


	/*
	function add_field_traer_autores($value, $row)
	{	

		$autores = $this->Administrador_model->traer_autores_investigacion($value);

		$var_autores = '';

		foreach ($autores as $row) 
		{
			$var_autores .= $row['nombre']." <br>";
		}

		return $var_autores;
	}*/