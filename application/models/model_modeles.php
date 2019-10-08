<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_modeles extends MY_Model {

	function __construct()
	{
		parent::__construct();

		$this->table			= TABLE_VEHICULE_MODELES;
		$this->column_primary	= 'modele_id';
		$this->column_label		= 'modele_name';
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

        #	check:	modele_name
        if ( isset($marque_id) && !empty($marque_id) && intval($marque_id) > 0 ) {

            $marque_id = intval($marque_id);

            //	check if exists $marque_id
            $marque	= $this->model_marques->getById($marque_id);

            //	check if exists by name
            if ( !$marque ) {

                return array(
                    'status'	=> false,
                    'message'	=> '<p><b>Marque id: ' . $marque_id . '</b> don`t exists!</p>'
                );
            }

        } else {

            return array(
                'status'	=> false,
                'message'	=> 'Lipsva marque'
            );

        }

		#	check:	modele_name
		if ( isset($modele_name) && !empty($modele_name) ) {

			$modele_name	= clean($modele_name);

			//	check if exists by name
			if ( $this->existsByName($modele_name) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $modele_name . '</b> already exist!</p>'
				);
			}

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva modele_name'
			);

		}

		#	check:	modele_slogan
		if ( isset($modele_slogan) && !empty($modele_slogan) ) {

			$modele_slogan  = clean($modele_slogan);

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva modele_slogan'
			);
		}

		#	----------------------------
		#	3.	INSERT ...
		$insert = array(
            'marque_id'   => $marque_id,
			$this->column_label		=> $modele_name,
			'modele_slogan'			=> $modele_slogan,
			'modele_date_creation'	=> date( 'Y-m-d H:i:s' )
		);
		$this->db->insert( $this->table , $insert );

		if ( $this->db->affected_rows() > 0 ) {

			$id				= $this->db->insert_id();

			return array(
				'status'	=> true,
				'message'	=> 'You added a new marque:  '.$modele_name,
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
        if ( isset($marque_id) && !empty($marque_id) && intval($marque_id) > 0 ) {

            $marque_id = intval($marque_id);

            //	check if exists $marque_id
            $marque	= $this->model_marques->getById($marque_id);
            $modele	= $this->getById($id);

            //	check if exists marque & modele is in for this marque
            if ( !$marque || $modele['marque_id'] != $marque_id) {

                return array(
                    'status'	=> false,
                    'message'	=> '<p><b>Marque id: ' . $marque_id . '</b> don`t exists! Or you try to change modele for different marque!</p>'
                );
            }

        } else {

            return array(
                'status'	=> false,
                'message'	=> 'Lipsva marque'
            );

        }

		#	check:	modele_name
		if ( isset($modele_name) && !empty($modele_name) ) {

			$modele_name	= clean($modele_name);

			//	check if exists by name
			if ( $this->existsByName($modele_name,$id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $modele_name . '</b> already exist!</p>'
				);
			}

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva modele_name'
			);

		}

		#	check:	modele_slogan
		if ( isset($modele_slogan) && !empty($modele_slogan) ) {

			$modele_slogan  = clean($modele_slogan);

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva modele_slogan'
			);
		}

		#	----------------------------
		#	3.	U[PDATE ...
		$update = array(
            'marque_id'             => $marque_id,
			$this->column_label		=> $modele_name,
			'modele_slogan'			=> $modele_slogan,
			'modele_date_creation'	=> date( 'Y-m-d H:i:s' )
		);

		$this->db->update( $this->table , $update , array( $this->column_primary => $id ) );

		return array(
			'status'		=> true,
			'message'		=> 'Update successfull!:  '.$modele_name
		);
	}

#	============================================================================
#	GET

    public function getAll( )
	{
		$this->db->select( "*" );
		$this->db->from( $this->table );
		$result = $this->db->get()->result_array();

		return $result;
	}

	public function getByMarqueId($marque_id) {
		$this->db->select('*');
		$this->db->from( $this->table );
		$this->db->where('marque_id', $marque_id);
		$this->db->order_by('modele_name', 'asc');

		$query = $this->db->get();

		return ( $query->num_rows() > 0 ) ? $query->result_array() : FALSE;
	}

#	============================================================================
#	SEARCH

	public function search( $filters = array() )
	{
		if ( isset($filters) && !empty($filters) && is_array($filters) ) {
			extract($filters);
		}

		$this->db->select( "*" );
		$this->db->from( $this->table );
        $this -> db -> join(TABLE_VEHICULE_MARQUES, $this->table . '.marque_id = ' . TABLE_VEHICULE_MARQUES . '.marque_id', 'left');

		#	search filters ...
        if( isset( $marque_id ) && intval($marque_id) > 0 ) {
            $this->db->where($this->table.'.marque_id', $marque_id);
        }
		if( isset( $modele_name ) && $modele_name != '' ) {
			$this->db->like( 'modele_name' , $modele_name );
		}
		if( isset( $modele_slogan ) && $modele_slogan != '' ) {
			$this->db->like( 'modele_slogan' , $modele_slogan );
		}

		if ( isset( $from_date ) && $from_date != '' ){
			$this->db->where( 'DATE_FORMAT(modele_date_creation, "%Y-%m-%d") >=' , $from_date );
			// $this->db->where( 'modele_date_creation >=' , $from_date . ' 00:00:00' );
		}

		if ( isset( $to_date ) && $to_date != '' ) {
			$this->db->where( 'DATE_FORMAT(modele_date_creation, "%Y-%m-%d") <=' , $to_date );
			// $this->db->where( 'modele_date_creation <=' , $to_date . ' 23:59:59' );
		}

		$result = $this->db->get()->result_array();

		//echo $this->db->last_query();

		return $result;
	}

#	============================================================================
#	DELETE
}