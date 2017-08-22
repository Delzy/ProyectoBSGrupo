<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


abstract class AbstractController extends CI_Controller 
{
	protected $arregloPost;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
    	$this->load->helper('html');
	}

	protected function is_post()
	{
		$tempArray = $this->input->post();
		
		if(empty($tempArray))
		{
			$this->arregloPost = array();
			return FALSE;
		}

		$this->arregloPost = $tempArray;
		return TRUE;
	}

	protected function formulario_usuarios()
	{
		$arreglo_datos_usuario = array
		(
			'email' => array
						(
							'name' => 'email',
							'id' => 'email',
							'class' => 'form-control input-sx',
							'value' => '',
		 					'placeholder' => 'Ingrese correo electronico',
		 					'data-error' => 'El correo electronico es requerido',
		 					'required' => 'required',
		 					'type' => 'email'
						),

			'password' => array
						(
							'name' => 'password',
							'id' => 'password',
							'class' => 'form-control input-sx',
							'value' => '',
							'placeholder' => 'Ingrese su contraseña',
							'data-error' => 'El campo contraseña es necesario',
							'required' => 'required'
						),

			'confirmar_password' => array
						(
						 	'name' => 'confirmar_password',
						 	'id' => 'confirmar_password',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Vuelva a ingresar la contraseña',
						 	'data-error' => 'Debe volver a ingresar la contraseña',
						 	'required' => 'required',
						 	'data-match' => '#password',
						 	'type' => 'password'
						),

			'cumpleanios' => array
						(
						 	'name' => 'cumpleanios',
						 	'id' => 'cumpleanios',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'data-error' => 'La fecha de cumpleanios es requerido',
						 	'required' => 'required',
						 	'type' => 'date'
						),

			'nombre' => array
						(
						 	'name' => 'nombre',
						 	'id' => 'nombre',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Ingrese su nombre',
						 	'data-error' => 'El nombre es requerido',
						 	'required' => 'required',
						 	'type' => 'text'
						),

			'apellidos' => array
						(
						 	'name' => 'apellidos',
						 	'id' => 'apellidos',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Ingrese sus apellidos',
						 	'data-error' => 'Los apellidos son requeridos',
						 	'required' => 'required',
						 	'type' => 'text'
						),

			'telefono' => array
						(
						 	'name' => 'telefono',
						 	'id' => 'telefono',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Ingrese su telefono',
						 	'type' => 'text'
						),

			'fotografia' => array
						(
						 	'name' => 'fotografia',
						 	'id' => 'fotografia',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Ingrese una fotografia',
						 	'type' => 'text'
						)
		);
		return $arreglo_datos_usuario;
	}


}