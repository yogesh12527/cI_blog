<?php

class Login extends CI_Controller {
	public function index()
        {		
			
                $this->load->library('form_validation');
				// set rules
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				

				
				// $this->session->sess_destroy();
                if ($this->form_validation->run() == FALSE)
                {
						$this->load->view('header_page');
						$this->load->view('login_page');
						$this->load->view('footer_page');
                }
                else{
					$username = $this->input->post('username');
					$password = $this->input->post('password');

					$user = $this->db->get_where('users',['new_user_name' => $username])->row();
					$password = $this->db->get_where('users',['new_user_password' => $password])->row();
					if(!$user) {
						$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
						redirect(uri_string());
					}
					if(!$password) {
						$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
						redirect(uri_string());
					}
					$data = array(
						'loggedin_user_id' => $user->id,
						'firstname' => $user->firstname,
						'lastname' => $user->lastname,
						'new_user_email' => $user->new_user_email,
						'new_user_name' => $user->new_user_name,
						'new_user_password' => $user->new_user_password
						);
						$this->session->set_userdata($data);
						// echo '<pre>';print_r($_SESSION);echo '</pre>';
						redirect('post');
				}
				
        }
		public function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}

}

