<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicule_equipements extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//	Load manager model
		$this->load->model('model_equipements');

		//	Set module name
		$this->module	= 'equipements';

		//$this->output->enable_profiler(TRUE);


	}

	public function index()
	{
		$filters = $_GET;
		$rows = $this->model_equipements->search( $filters );

		$this->smarty->assign( 'filters' , $filters);
		$this->smarty->assign( 'rows' , $rows);
		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function create()
	{
		//	check post
		if ($post = $this->input->post())
		{
			$response = $this->model_equipements->create($this->input->post());

			$this->smarty->assign( 'response' , $response);
		}

		$this->smarty->assign( 'post' , $post);
		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update($equipement_id = false)
	{
		$equipement = $this->model_equipements->getById($equipement_id);

		if(!$equipement) {

			$this->session->set_flashdata( 'Don`t exist that equipement!' );

			redirect( '/manager/vehicule_equipements' , 'refresh' );
		}

		//check post
		if ($post = $this->input->post()) {
			$response = $this->model_equipements->update($post, $equipement_id);
			$equipement = $this->model_equipements->getById($equipement_id);
			$this->smarty->assign( 'response' , $response);
			$this->smarty->assign( 'post' , $post);
		}

		$this->smarty->assign( 'data' , $equipement);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update_ajax($equipement_id = false)
	{
		$equipement = $this->model_equipements->getById($equipement_id);

		if(!$equipement) {

			$this->session->set_flashdata( 'Don`t exist that equipement!' );

			redirect( '/manager/vehicule_equipements' , 'refresh' );
		}

		$this->smarty->assign( 'data' , $equipement);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function ajax( $id =0 )
	{

		if ($this -> input -> is_ajax_request()) {

			$post		= $this->input->post();

			$json		= $this->model_equipements->update($post, $id);

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