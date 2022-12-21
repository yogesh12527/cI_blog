<?php

class User_profile_model extends CI_Model {
    public function select_user_post ( $user_id )
            { 
                $this->db->select('*');
                $this->db->from('post');
                $this->db->where('post_user_id', $user_id );
                $query = $this->db->get();

                if ( $query->num_rows() > 0 )
                {
                    $get_data = $query->result_array();
                    return $get_data;   
                }
            }            
}


?>