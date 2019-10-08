<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicules extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//	Load manager model

		$this->load->model('model_vehicules');
		$this->load->model('model_marques');
		$this->load->model('model_modeles');
		$this->load->model('model_engines');
        $this->load->model('model_carrosseries');
        $this->load->model('model_equipements');
        $this->load->model('model_characteristics');
        $this->load->model('model_vehicules_equipements');
        $this->load->model('model_vehicules_characteristics');


		//	Set module name
		$this->module = 'vehicules';

		$this->output->enable_profiler(TRUE);


	}

	public function index()
	{
		$filters = $_GET;
		$rows = $this->model_vehicules->search($filters);

		$marque_id = (isset($_GET['marque_id']) && $_GET['marque_id'] > 0) ? intval($_GET['marque_id']) : false;
		if ($marque_id > 0) {
			$modeles = $this->model_modeles->getByMarqueId($marque_id);
			$this->smarty->assign('modeles', $modeles);
		}

		$this->smarty->assign('marques', $this->model_marques->getAll());
		$this->smarty->assign('engines', $this->model_engines->getAll());
		$this->smarty->assign('carrosseries', $this->model_carrosseries->getAll());
		$this->smarty->assign('filters', $filters);
		$this->smarty->assign('rows', $rows);
		$this->smarty->assign('content', $this->smarty->fetch('manager/' . $this->module . '/' . $this->router->fetch_method() . '.htm'));
		$this->smarty->display('manager/main.htm');
	}

	public function create()
	{
		//	check post
		if ($post = $this->input->post()) {

			$response = $this->model_vehicules->create($this->input->post());

			$this->smarty->assign('response', $response);

			$marque_id = (isset($post['marque_id']) && $post['marque_id'] > 0) ? intval($post['marque_id']) : false;
			if ($marque_id > 0) {
				$modeles = $this->model_modeles->getByMarqueId($marque_id);
				$this->smarty->assign('modeles', $modeles);
			}
		}

		$this->smarty->assign('marques', $this->model_marques->getAll());
		$this->smarty->assign('engines', $this->model_engines->getAll());
		$this->smarty->assign('carrosseries', $this->model_carrosseries->getAll());

		$this->smarty->assign('post', $post);
		$this->smarty->assign('content', $this->smarty->fetch('manager/' . $this->module . '/' . $this->router->fetch_method() . '.htm'));
		$this->smarty->display('manager/main.htm');
	}

	public function update($vehicule_id = 0)
	{
		$vehicule = $this->model_vehicules->getById($vehicule_id);

		if (!$vehicule) {

			$this->session->set_flashdata('Don`t exist that vehicule!');

			redirect('/manager/vehicules', 'refresh');
		}

		$marque_id = intval($vehicule['marque_id']);
		if ($marque_id > 0) {
			$modeles = $this->model_modeles->getByMarqueId($marque_id);
			$this->smarty->assign('modeles', $modeles);
		}

		$this->smarty->assign('data', $vehicule);
		$this->smarty->assign('marques', $this->model_marques->getAll());
		$this->smarty->assign('engines', $this->model_engines->getAll());
        $this->smarty->assign('carrosseries', $this->model_carrosseries->getAll());

        $equipements    = $this->model_equipements->getAll();
        $this->smarty->assign('equipements', $equipements);
        $equipements_selected   = $this->model_vehicules_equipements->getByVehiculeId( $vehicule_id , true );
        $this->smarty->assign('equipements_selected', $equipements_selected );

        $characteristics    = $this->model_characteristics->getAll();
        $this->smarty->assign('characteristics', $characteristics);
        $characteristics_selected   = $this->model_vehicules_characteristics->getByVehiculeId( $vehicule_id , true );
        $this->smarty->assign('characteristics_selected', $characteristics_selected );

		$this->smarty->assign('content', $this->smarty->fetch('manager/' . $this->module . '/' . $this->router->fetch_method() . '.htm'));
		$this->smarty->display('manager/main.htm');
	}

	public function ajax($id = 0)
	{

		if ($this->input->is_ajax_request()) {

			$post = $this->input->post();

			$json = $this->model_vehicules->update($post, $id);

		} else {

			$json = array(
				'status' => false,
				'message' => 'This is not AJAX request.'
			);
		}

		print_r(json_encode($json));
		exit;
	}

}