<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function existsByName( $label , $id = 0 )
	{
        if ( !isset($label) || empty( $label ) ) {
            return FALSE;
        }

		$this->db->select( '*' );
		$this->db->from( $this->table );
        $this->db->where( $this->table.'.'.$this->column_label , $label );

		if ( isset($id) || $id > 0 ) {
			$this->db->where( $this->table.'.'.$this->column_primary.' !=' , $id );
        }

		$this->db->limit( 1 );
		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->row_array() : FALSE;
	}

	public function getById( $id )
	{
		if ( empty( $id ) ) {
			return FALSE;
		}

		$this->db->select( '*' );
		$this->db->from( $this->table );
		$this->db->where( $this->table.'.'.$this->column_primary , $id );
		$this->db->limit( 1 );
		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->row_array() : FALSE;
	}

}