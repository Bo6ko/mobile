<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicule_characteristics extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//	Load manager model
		$this->load->model('model_characteristics');

		//	Set module name
		$this->module	= 'characteristics';

		//$this->output->enable_profiler(TRUE);


	}

	public function index()
	{
		$filters = $_GET;
		$rows = $this->model_characteristics->search( $filters );

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
			$response = $this->model_characteristics->create($this->input->post());

			$this->smarty->assign( 'response' , $response);
		}

		$this->smarty->assign( 'post' , $post);
		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update($characteristic_id = false)
	{
		$characteristic = $this->model_characteristics->getById($characteristic_id);

		if(!$characteristic) {

			$this->session->set_flashdata( 'Don`t exist that characteristic!' );

			redirect( '/manager/vehicule_characteristics' , 'refresh' );
		}

		//check post
		if ($post = $this->input->post()) {
			$response = $this->model_characteristics->update($post, $characteristic_id);
			$characteristic = $this->model_characteristics->getById($characteristic_id);
			$this->smarty->assign( 'response' , $response);
			$this->smarty->assign( 'post' , $post);
		}

		$this->smarty->assign( 'data' , $characteristic);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update_ajax($characteristic_id = false)
	{
		$characteristic = $this->model_characteristics->getById($characteristic_id);

		if(!$characteristic) {

			$this->session->set_flashdata( 'Don`t exist that characteristic!' );

			redirect( '/manager/vehicule_characteristics' , 'refresh' );
		}

		$this->smarty->assign( 'data' , $characteristic);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function ajax( $id =0 )
	{

		if ($this -> input -> is_ajax_request()) {

			$post		= $this->input->post();

			$json		= $this->model_characteristics->update($post, $id);

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