<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_vehicules_characteristics extends MY_Model {

	function __construct()
	{
		parent::__construct();

        $this->load->model('model_characteristics');

        $this->table			= TABLE_VEHICULES_CHARACTERISTICS;
        $this->column_primary	= 'characteristic_id';
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

        #   2 delete characteristic by id
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

        if ( isset($characteristics_id) && is_array($characteristics_id) && count($characteristics_id) > 0 ){

            foreach ($characteristics_id as $characteristic_id) {

                #	check:	$characteristic_id

                $characteristic_id = intval($characteristic_id);

                //	check if exists $characteristic_id
                $characteristic	= $this->model_characteristics->getById($characteristic_id);

                if ( !$characteristic ) {

                    return array(
                        'status'	=> false,
                        'message'	=> '<p>Thesre is no equiepement with ID = <b>' . $characteristic_id . '</b></p>'
                    );
                }

                //check characteristic description
                if ( isset($characteristics[$characteristic_id]['description']) && !empty($characteristics[$characteristic_id]['description']) ) {

                    $characteristic_description     =   trim($characteristics[$characteristic_id]['description']);

                } else {

                    return array(
                        'status'	=> false,
                        'message'	=> 'Missing characteristic description'
                    );

                }

                $insert = array(
                    'vehicule_id'                   =>  $vehicule_id,
                    'characteristic_id'             =>  $characteristic_id,
                    'characteristic_description'    =>  $characteristic_description
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
        $this->db->select(TABLE_VEHICULE_CHARACTERISTICS . '.*, ' . $this->table.'.characteristic_description');
        $this->db->from($this->table);
        $this->db->join(TABLE_VEHICULE_CHARACTERISTICS, TABLE_VEHICULE_CHARACTERISTICS . '.characteristic_id = ' . $this->table . '.characteristic_id', 'left');
        $this->db->where('vehicule_id', $vehicule_id);

        $result = $this->db->get();

        $rows = ($result->num_rows() > 0) ? $result->result_array() : FALSE;

        if ( $rows ) {

            if ( $ids_only ) {
                $data = array();

                foreach ( $rows as $row ) {

                    $data[] = $row['characteristic_id'];
                    $data['description'][$row['characteristic_id']] = $row['characteristic_description'];
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