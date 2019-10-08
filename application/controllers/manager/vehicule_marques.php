<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicule_marques extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //	Load manager model
        $this->load->model('model_marques');

        //	Set module name
        $this->module	= 'marques';

        //$this->output->enable_profiler(TRUE);


    }

    public function index()
    {
        $filters = $_GET;
        $rows = $this->model_marques->search( $filters );

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
            $response = $this->model_marques->create($this->input->post());

            $this->smarty->assign( 'response' , $response);
        }

        $this->smarty->assign( 'post' , $post);
        $this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
        $this->smarty->display( 'manager/main.htm' );
    }

	public function update($marque_id = false)
	{
		$marque = $this->model_marques->getById($marque_id);

		if(!$marque) {

			$this->session->set_flashdata( 'Don`t exist that marque!' );

			redirect( '/manager/vehicule_marques' , 'refresh' );
		}

		//check post
		if ($post = $this->input->post()) {
			$response = $this->model_marques->update($post, $marque_id);
			$marque = $this->model_marques->getById($marque_id);
			$this->smarty->assign( 'response' , $response);
			$this->smarty->assign( 'post' , $post);
		}

		$this->smarty->assign( 'data' , $marque);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function update_ajax($marque_id = false)
	{
		$marque = $this->model_marques->getById($marque_id);

		if(!$marque) {

			$this->session->set_flashdata( 'Don`t exist that marque!' );

			redirect( '/manager/vehicule_marques' , 'refresh' );
		}

		$this->smarty->assign( 'data' , $marque);

		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function ajax( $id =0 )
	{

		if ($this -> input -> is_ajax_request()) {

			$post		= $this->input->post();

			$json		= $this->model_marques->update($post, $id);

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