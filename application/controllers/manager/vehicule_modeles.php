<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicule_modeles extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //	Load manager model
        $this->load->model('model_modeles');
        $this->load->model('model_marques');

        //	Set module name
        $this->module	        = 'modeles';

        $this->output->enable_profiler(TRUE);


    }

    public function index()
    {
        $filters = $_GET;
        $rows = $this->model_modeles->search( $filters );

        $this->smarty->assign( 'filters' , $filters);
        $this->smarty->assign( 'rows' , $rows);
        $this->smarty->assign( 'marques' , $this->model_marques->getAll());
        $this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
        $this->smarty->display( 'manager/main.htm' );
    }

    public function create()
    {
        //	check post
        if ($post = $this->input->post())
        {
            $response = $this->model_modeles->create($this->input->post());

            $this->smarty->assign( 'response' , $response);
        }

        $this->smarty->assign( 'post' , $post);
        $this->smarty->assign( 'marques' , $this->model_marques->getAll());
        $this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
        $this->smarty->display( 'manager/main.htm' );
    }

	public function update($modele_id = 0)
	{
		$modele = $this->model_modeles->getById($modele_id);

		if(!$modele) {

			$this->session->set_flashdata( 'Don`t exist that modele!' );

			redirect( '/manager/vehicule_modeles' , 'refresh' );
		}

		$this->smarty->assign( 'data' , $modele);
        $this->smarty->assign( 'marques' , $this->model_marques->getAll());
		$this->smarty->assign( 'content' , $this->smarty->fetch('manager/'.$this->module.'/'.$this->router->fetch_method().'.htm' ) );
		$this->smarty->display( 'manager/main.htm' );
	}

	public function ajax( $id =0 )
	{

		if ($this -> input -> is_ajax_request()) {

			$post		= $this->input->post();

			$json		= $this->model_modeles->update($post, $id);

		} else {

			$json	= array(
				'status'	=> false,
				'message'	=> 'This is not AJAX request.'
			);
		}

		print_r(json_encode($json));
		exit ;
	}

	public function get_modele( )
	{

		$html	= '<option value=""> - choose - </option>';

		$status	= false;

		if ($this->input->is_ajax_request() )
		{
			$marque_id	= $this->input->post("marque_id");

			$modeles = $this->model_modeles->getByMarqueId($marque_id);

			if ( isset($modeles) && is_array($modeles) && count($modeles) > 0 ) {
				foreach ($modeles as $modele) {
					$html .= '<option value="'.$modele['modele_id'].'">'.$modele['modele_name'].'</option>';
				}
				$status = true;
			}
		}

		$json = array('html'=>$html,'status'=>$status);

		print_r(json_encode($json));exit;
	}

}