<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_marques extends MY_Model {

	function __construct()
	{
		parent::__construct();

		$this->table			= TABLE_VEHICULE_MARQUES;
		$this->column_primary	= 'marque_id';
		$this->column_label		= 'marque_name';
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

		#	check:	marque_name
		if ( isset($marque_name) && !empty($marque_name) ) {

			$marque_name	= clean($marque_name);

			//	check if exists by name
			if ( $this->existsByName($marque_name) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $marque_name . '</b> already exist!</p>'
				);
			}

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva marque_name'
			);

		}

		#	check:	marque_slogan
		if ( isset($marque_slogan) && !empty($marque_slogan) ) {

			$marque_slogan  = clean($marque_slogan);

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva marque_slogan'
			);
		}

		#	----------------------------
		#	3.	INSERT ...
		$insert = array(
			$this->column_label		=> $marque_name,
			'marque_slogan'			=> $marque_slogan,
			'marque_date_creation'	=> date( 'Y-m-d H:i:s' )
		);
		$this->db->insert( $this->table , $insert );

		if ( $this->db->affected_rows() > 0 ) {

			$id				= $this->db->insert_id();

			return array(
				'status'	=> true,
				'message'	=> 'Vmyknahte nova marka:  '.$marque_name,
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

		#	check:	marque_name
		if ( isset($marque_name) && !empty($marque_name) ) {

			$marque_name	= clean($marque_name);

			//	check if exists by name
			if ( $this->existsByName($marque_name,$id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $marque_name . '</b> already exist!</p>'
				);
			}

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva marque_name'
			);

		}

		#	check:	marque_slogan
		if ( isset($marque_slogan) && !empty($marque_slogan) ) {

			$marque_slogan  = clean($marque_slogan);

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva marque_slogan'
			);
		}

		#	----------------------------
		#	3.	U[PDATE ...
		$update = array(
			$this->column_label		=> $marque_name,
			'marque_slogan'			=> $marque_slogan,
			'marque_date_creation'	=> date( 'Y-m-d H:i:s' )
		);

		$this->db->update( $this->table , $update , array( $this->column_primary => $id ) );

		return array(
			'status'		=> true,
			'message'		=> 'Update successfull!:  '.$marque_name
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
		if( isset( $marque_name ) && $marque_name != '' ) {
			$this->db->like( 'marque_name' , $marque_name );
		}
		if( isset( $marque_slogan ) && $marque_slogan != '' ) {
			$this->db->like( 'marque_slogan' , $marque_slogan );
		}

		if ( isset( $from_date ) && $from_date != '' ){
			$this->db->where( 'DATE_FORMAT(marque_date_creation, "%Y-%m-%d") >=' , $from_date );
			// $this->db->where( 'marque_date_creation >=' , $from_date . ' 00:00:00' );
		}

		if ( isset( $to_date ) && $to_date != '' ) {
			$this->db->where( 'DATE_FORMAT(marque_date_creation, "%Y-%m-%d") <=' , $to_date );
			// $this->db->where( 'marque_date_creation <=' , $to_date . ' 23:59:59' );
		}

		$result = $this->db->get()->result_array();

		//echo $this->db->last_query();

		return $result;
	}

#	============================================================================
#	DELETE
}