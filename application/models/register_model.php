<?php

class Register_model extends CI_Model {

    public function insert_user(){
      
        $data = array('firstname' => $this->input->post('reg_f_name'),
            'lastname' => $this->input->post('reg_l_name'),
            'new_user_email' => $this->input->post('reg_user_email'),
            'new_user_name' => $this->input->post('new_username'),
            'new_user_password' => $this->input->post('new_user_password')
            
        );
        // echo'<pre>';print_r($data);echo'</pre>';
        $this->db->insert('users', $data);

    }
   
}


?>