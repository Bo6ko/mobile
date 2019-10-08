<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicule_carrosseries extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//	Load manager model
		$this->load->model('model_carrosseries');

		//	Set module name
		$this->module	= 'carrosseries';

		//$this->output->enable_profiler(TRUE);


	}

	public function index()
	{
		$filters = $_GET;
		$rows = $this->model_carrosseries->search( $filters );

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
			$response = $this->model_carrosseries->create($this->input->post());

			$this->smarty->assign( 'response' , $response);
		}

		$this->smarty->assign( 'post' , $post);
		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update($carrosserie_id = false)
	{
		$carrosserie = $this->model_carrosseries->getById($carrosserie_id);

		if(!$carrosserie) {

			$this->session->set_flashdata( 'Don`t exist that carrosserie!' );

			redirect( '/manager/vehicule_carrosseries' , 'refresh' );
		}

		//check post
		if ($post = $this->input->post()) {
			$response = $this->model_carrosseries->update($post, $carrosserie_id);
			$carrosserie = $this->model_carrosseries->getById($carrosserie_id);
			$this->smarty->assign( 'response' , $response);
			$this->smarty->assign( 'post' , $post);
		}

		$this->smarty->assign( 'data' , $carrosserie);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update_ajax($carrosserie_id = false)
	{
		$carrosserie = $this->model_carrosseries->getById($carrosserie_id);

		if(!$carrosserie) {

			$this->session->set_flashdata( 'Don`t exist that carrosserie!' );

			redirect( '/manager/vehicule_carrosseries' , 'refresh' );
		}

		$this->smarty->assign( 'data' , $carrosserie);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function ajax( $id =0 )
	{

		if ($this -> input -> is_ajax_request()) {

			$post		= $this->input->post();

			$json		= $this->model_carrosseries->update($post, $id);

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