<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicule_engines extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//	Load manager model
		$this->load->model('model_engines');

		//	Set module name
		$this->module	= 'engines';

		//$this->output->enable_profiler(TRUE);


	}

	public function index()
	{
		$filters = $_GET;
		$rows = $this->model_engines->search( $filters );

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
			$response = $this->model_engines->create($this->input->post());

			$this->smarty->assign( 'response' , $response);
		}

		$this->smarty->assign( 'post' , $post);
		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update($engine_id = false)
	{
		$engine = $this->model_engines->getById($engine_id);

		if(!$engine) {

			$this->session->set_flashdata( 'Don`t exist that engine!' );

			redirect( '/manager/vehicule_engines' , 'refresh' );
		}

		//check post
		if ($post = $this->input->post()) {
			$response = $this->model_engines->update($post, $engine_id);
			$engine = $this->model_engines->getById($engine_id);
			$this->smarty->assign( 'response' , $response);
			$this->smarty->assign( 'post' , $post);
		}

		$this->smarty->assign( 'data' , $engine);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update_ajax($engine_id = false)
	{
		$engine = $this->model_engines->getById($engine_id);

		if(!$engine) {

			$this->session->set_flashdata( 'Don`t exist that engine!' );

			redirect( '/manager/vehicule_engines' , 'refresh' );
		}

		$this->smarty->assign( 'data' , $engine);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function ajax( $id =0 )
	{

		if ($this -> input -> is_ajax_request()) {

			$post		= $this->input->post();

			$json		= $this->model_engines->update($post, $id);

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