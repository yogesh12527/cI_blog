<?php

class Registeration extends CI_Controller {

	    public function index()
        {		
            $this->load->library('form_validation');
            $this->form_validation->set_rules('reg_f_name', 'Firstname', 'trim|required|alpha',
            array('alpha' => 'Only alphabetical characters.'));
            $this->form_validation->set_rules('reg_l_name', 'Lastname', 'trim|required|alpha',
            array('alpha' => 'Only alphabetical characters.'));
            $this->form_validation->set_rules('reg_user_email', 'E-mail', 'trim|required|valid_email');
            $this->form_validation->set_rules('new_username', 'username', 'trim|required|is_unique[users.new_user_name]',array('is_unique' => 'Username already exist'));
            $this->form_validation->set_rules('new_user_password', 'Password', 'required');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[new_user_password]');
           

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('header_page');
                $this->load->view('signup_page');
                $this->load->view('footer_page');
            }
            else
            {	
                $this->load->model('register_model');
               
                if(isset($_POST['register'])){
                    $this->register_model->insert_user();
                    redirect('login');
                }
               
            }

           
        }

}