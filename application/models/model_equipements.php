<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_equipements extends MY_Model {

	function __construct()
	{
		parent::__construct();

		$this->table			= TABLE_VEHICULE_EQUIPEMENTS;
		$this->column_primary	= 'equipement_id';
		$this->column_label		= 'equipement_name';
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

		#	check:	equipement_name
		if ( isset($equipement_name) && !empty($equipement_name) ) {

			$equipement_name	= clean($equipement_name);

			//	check if exists by name
			if ( $this->existsByName($equipement_name) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $equipement_name . '</b> already exist!</p>'
				);
			}

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva equipement_name'
			);

		}

		#	----------------------------
		#	3.	INSERT ...
		$insert = array(
			$this->column_label		=> $equipement_name,
			'equipement_date_creation'	=> date( 'Y-m-d H:i:s' )
		);
		$this->db->insert( $this->table , $insert );

		if ( $this->db->affected_rows() > 0 ) {

			$id				= $this->db->insert_id();

			return array(
				'status'	=> true,
				'message'	=> 'You added a new equipement:  '.$equipement_name,
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

		#	check:	equipement_name
		if ( isset($equipement_name) && !empty($equipement_name) ) {

			$equipement_name	= clean($equipement_name);

			//	check if exists by name
			if ( $this->existsByName($equipement_name,$id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $equipement_name . '</b> already exist!</p>'
				);
			}

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva equipement_name'
			);

		}

		#	----------------------------
		#	3.	U[PDATE ...
		$update = array(
			$this->column_label		=> $equipement_name,
			'equipement_date_creation'	=> date( 'Y-m-d H:i:s' )
		);

		$this->db->update( $this->table , $update , array( $this->column_primary => $id ) );

		return array(
			'status'		=> true,
			'message'		=> 'Update successfull!:  '.$equipement_name
		);
	}

#	============================================================================
#	GET

    public function getAll( )
    {
        $this->db->select( '*' );
        $this->db->from( $this->table );

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

		#	search filters ...
		if( isset( $equipement_name ) && $equipement_name != '' ) {
			$this->db->like( 'equipement_name' , $equipement_name );
		}

		if ( isset( $from_date ) && $from_date != '' ){
			$this->db->where( 'DATE_FORMAT(equipement_date_creation, "%Y-%m-%d") >=' , $from_date );
			// $this->db->where( 'equipement_date_creation >=' , $from_date . ' 00:00:00' );
		}

		if ( isset( $to_date ) && $to_date != '' ) {
			$this->db->where( 'DATE_FORMAT(equipement_date_creation, "%Y-%m-%d") <=' , $to_date );
			// $this->db->where( 'equipement_date_creation <=' , $to_date . ' 23:59:59' );
		}

		$result = $this->db->get()->result_array();

		//echo $this->db->last_query();

		return $result;
	}

#	============================================================================
#	DELETE
}