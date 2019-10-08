<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_engines extends MY_Model {

	function __construct()
	{
		parent::__construct();

		$this->table			= TABLE_VEHICULE_ENGINES;
		$this->column_primary	= 'engine_id';
		$this->column_label		= 'engine_name';
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

		#	check:	engine_name
		if ( isset($engine_name) && !empty($engine_name) ) {

			$engine_name	= clean($engine_name);

			//	check if exists by name
			if ( $this->existsByName($engine_name) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $engine_name . '</b> already exist!</p>'
				);
			}

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva engine_name'
			);

		}

		#	----------------------------
		#	3.	INSERT ...
		$insert = array(
			$this->column_label		=> $engine_name,
			'engine_date_creation'	=> date( 'Y-m-d H:i:s' )
		);
		$this->db->insert( $this->table , $insert );

		if ( $this->db->affected_rows() > 0 ) {

			$id				= $this->db->insert_id();

			return array(
				'status'	=> true,
				'message'	=> 'You added a new engine:  '.$engine_name,
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

		#	check:	engine_name
		if ( isset($engine_name) && !empty($engine_name) ) {

			$engine_name	= clean($engine_name);

			//	check if exists by name
			if ( $this->existsByName($engine_name,$id) ) {
				return array(
					'status'	=> false,
					'message'	=> '<p><b>' . $engine_name . '</b> already exist!</p>'
				);
			}

		} else {

			return array(
				'status'	=> false,
				'message'	=> 'Lipsva engine_name'
			);

		}

		#	----------------------------
		#	3.	U[PDATE ...
		$update = array(
			$this->column_label		=> $engine_name,
			'engine_date_creation'	=> date( 'Y-m-d H:i:s' )
		);

		$this->db->update( $this->table , $update , array( $this->column_primary => $id ) );

		return array(
			'status'		=> true,
			'message'		=> 'Update successfull!:  '.$engine_name
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
		if( isset( $engine_name ) && $engine_name != '' ) {
			$this->db->like( 'engine_name' , $engine_name );
		}

		if ( isset( $from_date ) && $from_date != '' ){
			$this->db->where( 'DATE_FORMAT(engine_date_creation, "%Y-%m-%d") >=' , $from_date );
			// $this->db->where( 'engine_date_creation >=' , $from_date . ' 00:00:00' );
		}

		if ( isset( $to_date ) && $to_date != '' ) {
			$this->db->where( 'DATE_FORMAT(engine_date_creation, "%Y-%m-%d") <=' , $to_date );
			// $this->db->where( 'engine_date_creation <=' , $to_date . ' 23:59:59' );
		}

		$result = $this->db->get()->result_array();

		//echo $this->db->last_query();

		return $result;
	}

#	============================================================================
#	DELETE
}