<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_vehicules_equipements extends MY_Model {

	function __construct()
	{
		parent::__construct();

        $this->load->model('model_equipements');

        $this->table			= TABLE_VEHICULES_EQUIPEMENTS;
        $this->column_primary	= 'equipement_id';
	}

#	============================================================================
#	CREATE



#	============================================================================
#	UPDATE

	public function update( $post = array() , $vehicule_id )
	{
	    #   1 proverka na veh id
        if ( !isset($vehicule_id) || empty($vehicule_id) ) {
            return array(
                'status'		=> false,
                'message'		=> 'Missing post vehicule id'
            );
        }

        #   2 delete equp.. by id
        $this->db->delete( $this->table, array( 'vehicule_id' => $vehicule_id ) );

        #	3.	Convert POST array to variables:
        if ( !isset($post) || empty($post) ) {
            return array(
                'status'		=> true,
                'message'		=>  'Update successfull!'
            );
        }

        extract($post);

        #	----------------------------
        #	2.	CHECKS

        if ( isset($equipements_id) && is_array($equipements_id) && count($equipements_id) > 0 ){

            foreach ($equipements_id as $equipement_id) {

                #	check:	$equipement_id

                $equipement_id = intval($equipement_id);

                //	check if exists $equipement_id
                $equipement	= $this->model_equipements->getById($equipement_id);

                if ( !$equipement ) {

                    return array(
                        'status'	=> false,
                        'message'	=> '<p>Thesre is no equiepement with ID = <b>' . $equipement_id . '</b></p>'
                    );
                }

                $insert = array(
                    'vehicule_id'   => $vehicule_id,
                    'equipement_id' => $equipement_id
                );

                $this->db->insert($this->table, $insert);
            }

        }

        return array(
            'status'		=> true,
            'message'		=> 'Update successfull!'
        );

	}

#	============================================================================
#	GET

    public function getByVehiculeId( $vehicule_id = 0  , $ids_only = false )
    {
        $this->db->select(TABLE_VEHICULE_EQUIPEMENTS . '.*');
        $this->db->from($this->table);
        $this->db->join(TABLE_VEHICULE_EQUIPEMENTS, TABLE_VEHICULE_EQUIPEMENTS . '.equipement_id = ' . $this->table . '.equipement_id', 'left');
        $this->db->where('vehicule_id', $vehicule_id);

        $result = $this->db->get();

        $rows = ($result->num_rows() > 0) ? $result->result_array() : FALSE;

        if ( $rows ) {

            if ( $ids_only ) {
                $data = array();

                foreach ( $rows as $row ) {

                    $data[] = $row['equipement_id'];
                }

                return $data;
            }
        }

        return $rows;
    }

#	============================================================================
#	SEARCH


#	============================================================================
#	DELETE
}