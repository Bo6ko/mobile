<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_vehicules extends MY_Model {

	function __construct()
	{
		parent::__construct();

		$this->table			= TABLE_VEHICULES;
		$this->column_primary	= 'vehicule_id';
		$this->column_label		= 'vehicule_name';

		$this->load->model('model_marques');
		$this->load->model('model_modeles');
		$this->load->model('model_engines');
		$this->load->model('model_carrosseries');
	}

#	============================================================================
#	CREATE

	public function create( $post = array() )
	{
		#	----------------------------
		#	1.	Convert POST array to variables:
		extract( $post );

		#	----------------------------
		#	2.	CHECKS

		#	check:	marque_id
		if ( isset($marque_id) && !empty($marque_id) && intval($marque_id) > 0) {

			$marque_id = intval($marque_id);

			//	check if exists $marque_id
			if ( !$this->model_marques->getById($marque_id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $marque_id . '</b> don`t exists!</p>'
				);
			}
		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Molq izberete marka'
			);

		}

		#	check:	modele_id
		if ( isset($modele_id) && !empty($modele_id) && intval($modele_id) > 0) {

			$modele_id = $modele_id;

			//	check if exists $modele_id
            /*
			if ( !$this->model_modeles->getById($modele_id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $modele_id . '</b> don`t exists!</p>'
				);
			}*/
		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Molq izberete model'
			);

		}

		#	check:	engine_id
		if ( isset($engine_id) && !empty($engine_id) && intval($engine_id) > 0) {

			$engine_id = $engine_id;

			//	check if exists $engine_id
            /*
			if ( !$this->model_engines->getById($engine_id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $engine_id . '</b> don`t exists!</p>'
				);
			}*/
		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Molq izberete engine'
			);

		}

		#	check:	carrosserie_id
		if ( isset($carrosserie_id) && !empty($carrosserie_id) && intval($carrosserie_id) > 0) {

			$carrosserie_id = $carrosserie_id;

			//	check if exists $carrosserie_id
            /*
			if ( !$this->model_carrosseries->getById($carrosserie_id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $carrosserie_id . '</b> don`t exists!</p>'
				);
			}*/
		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Molq izberete carrosserie'
			);

		}

		#	----------------------------
		#	3.	INSERT ...
		$insert = array(
			'marque_id'					=> $marque_id,
			'modele_id'					=> $modele_id,
			'engine_id'					=> $engine_id,
			'carrosserie_id'			=> $carrosserie_id,
			'vehicule_date_creation'	=> date( 'Y-m-d H:i:s' )
		);
		$this->db->insert( $this->table , $insert );

		if ( $this->db->affected_rows() > 0 ) {

			$id				= $this->db->insert_id();

			return array(
				'status'	=> true,
				'message'	=> 'You added a new vehicule',
				'id'		=> $id
			);

		}

		return array(
			'status'	=> false,
			'message'	=> 'Problem pri insert'
		);
	}

#	============================================================================
#	UPDATE

	public function update( $post = array() , $id )
	{

		#	----------------------------
		#	1.	Convert POST array to variables:
		extract( $post );

		#	----------------------------
		#	2.	CHECKS

		#	check:	marque_id
		if ( isset($marque_id) && !empty($marque_id) && intval($marque_id) > 0) {

			$marque_id = intval($marque_id);

			//	check if exists $marque_id
			$marque	= $this->model_marques->getById($marque_id);

			if ( !$marque ) {

				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $marque_id . '</b> don`t exists!</p>'
				);
			}

			$marque_name	= $marque['marque_name'];

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Molq izberete marka'
			);

		}

		#	check:	modele_id
		if ( isset($modele_id) && !empty($modele_id) && intval($modele_id) > 0) {

			$modele_id = $modele_id;

			//	check if exists $modele_id
			if ( !$this->model_modeles->getById($modele_id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $modele_id . '</b> don`t exists!</p>'
				);
			}
		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Molq izberete model ot marka:'.$marque_name
			);

		}

		#	check:	engine_id
		if ( isset($engine_id) && !empty($engine_id) && intval($engine_id) > 0) {

			$engine_id = $engine_id;

			//	check if exists $engine_id
			if ( !$this->model_engines->getById($engine_id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $engine_id . '</b> don`t exists!</p>'
				);
			}
		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Molq izberete engine'
			);

		}

		#	check:	carrosserie_id
		if ( isset($carrosserie_id) && !empty($carrosserie_id) && intval($carrosserie_id) > 0) {

			$carrosserie_id = $carrosserie_id;

			//	check if exists $carrosserie_id
			if ( !$this->model_carrosseries->getById($carrosserie_id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $carrosserie_id . '</b> don`t exists!</p>'
				);
			}
		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Molq izberete carrosserie'
			);

		}

		#	----------------------------
		#	3.	U[PDATE ...
		$update = array(
			'marque_id'					=> $marque_id,
			'modele_id'					=> $modele_id,
			'engine_id'					=> $engine_id,
			'carrosserie_id'			=> $carrosserie_id,
			'vehicule_date_creation'	=> date( 'Y-m-d H:i:s' )
		);

		$this->db->update( $this->table , $update , array( $this->column_primary => $id ) );

		return array(
			'status'		=> true,
			'message'		=> 'Update successfull!'
		);
	}

#	============================================================================
#	GET

#	============================================================================
#	SEARCH

	public function search( $filters = array() )
	{
		if ( isset($filters) && !empty($filters) && is_array($filters) ) {
			extract($filters);
		}

		$this -> db -> select( "*" );
		$this->db->from( $this->table );
		$this -> db -> join(TABLE_VEHICULE_MARQUES, TABLE_VEHICULES . '.marque_id = ' . TABLE_VEHICULE_MARQUES . '.marque_id', 'left');
		$this -> db -> join(TABLE_VEHICULE_MODELES, TABLE_VEHICULES . '.modele_id = ' . TABLE_VEHICULE_MODELES . '.modele_id', 'left');
		$this -> db -> join(TABLE_VEHICULE_ENGINES, TABLE_VEHICULES . '.engine_id = ' . TABLE_VEHICULE_ENGINES . '.engine_id', 'left');
		$this -> db -> join(TABLE_VEHICULE_CARROSSERIES, TABLE_VEHICULES . '.carrosserie_id = ' . TABLE_VEHICULE_CARROSSERIES . '.carrosserie_id', 'left');

		if (isset($marque_id) && $marque_id != '')
			$this -> db -> like(TABLE_VEHICULES . '.marque_id', $marque_id);
		if (isset($marque_name) && $marque_name != '')
			$this -> db -> like(TABLE_VEHICULES . '.marque_name', $marque_name);
		if (isset($modele_id) && $modele_id != '')
			$this -> db -> like(TABLE_VEHICULES . '.modele_id', $modele_id);
		if (isset($engine_id) && $engine_id != '')
			$this -> db -> like(TABLE_VEHICULES . '.engine_id', $engine_id);
		if (isset($carrosserie_id) && $carrosserie_id != '')
			$this -> db -> like(TABLE_VEHICULES . '.carrosserie_id', $carrosserie_id);

		if ( isset( $from_date ) && $from_date != '' ){
			$this->db->where( 'DATE_FORMAT(marque_date_creation, "%Y-%m-%d") >=' , $from_date );
			// $this->db->where( 'marque_date_creation >=' , $from_date . ' 00:00:00' );
		}

		if ( isset( $to_date ) && $to_date != '' ) {
			$this->db->where( 'DATE_FORMAT(marque_date_creation, "%Y-%m-%d") <=' , $to_date );
			// $this->db->where( 'marque_date_creation <=' , $to_date . ' 23:59:59' );
		}

		$result	= $this->db->get()->result_array();

		//echo '<pre>' , var_dump($result) , '</pre>';

		return $result;
	}

#	============================================================================
#	DELETE
}