<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicules_characteristics extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//	Load manager model
		$this->load->model('model_vehicules_characteristics');
	}

	public function update ( $vehicule_id =0 )
	{
		if ($this -> input -> is_ajax_request()) {

			$post		= $this->input->post();

			$json		= $this->model_vehicules_characteristics->update($post, $vehicule_id);

		} else {

			$json	= array(
				'status'	=> false,
				'message'	=> 'This is not AJAX request.'
			);
		}

		print_r(json_encode($json));
		exit ;
	}

}