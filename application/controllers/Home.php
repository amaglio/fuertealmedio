<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct(); 
		$this->load->model('Home_model');
	}

	function index()
	{	
		$datos_head["titulo"] = "Torneo Fuerte al Medio";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true); 

		$datos["noticias"] =  $this->Home_model->get_publicaciones();
		$datos["carrusel"] =  $this->Home_model->get_carrusel();

		$this->load->view('home.php',$datos);
	}

	// function index2()
	// {	
	// 	$this->load->view('home2.php');
	// }

	function procesa_consulta_web()
	{			
		chrome_log("Home/procesa_contacto_web");

		if ($this->form_validation->run('procesa_consulta_web') == FALSE):

			chrome_log("No paso validacion");
			$this->session->set_flashdata('mensaje', 'Error: no paso la validacion.');
			$datos['error'] = true;
			$datos['mensaje'] = 'Error: no paso la validacion.';

		else:

			chrome_log("Paso validacion");

			$resultado = $this->Home_model->add_consulta_web($this->input->post());


			$resultado_email = enviar_email($this->input->post());


			if( $resultado > 0):

				$this->session->set_flashdata('mensaje', 'Consulta enviada exitosamente');
				$datos['error'] = false;
				$datos['mensaje'] = 'Consulta enviada exitosamente';

			else:

				$this->session->set_flashdata('mensaje', 'Error interno, por favor intente mas tarde.');
				$datos['error'] = true;
				$datos['mensaje'] = 'Error interno, por favor intente mas tarde.';

			endif; 

		endif;	

		print json_encode($datos);

	}

	/*
	function procesa_contacto_web()
	{			
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|trim|xss_clean|max_length[100]');			
		$this->form_validation->set_rules('apellido', 'Apellido', 'required|trim|xss_clean|max_length[100]');			
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|max_length[100]');			
		$this->form_validation->set_rules('mensaje', 'Mensaje', 'trim|xss_clean|max_length[2000]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('form_contacto_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'nombre' => set_value('nombre'),
					       	'apellido' => set_value('apellido'),
					       	'email' => set_value('email'),
					       	'mensaje' => set_value('mensaje')
						);
					
			// run insert model to write data to db
		
			if ($this->Home->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('Home/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	*/

	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}

 	 
}