<?php // (myquote)
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_profile extends CI_Controller {

		public function index()
		{		

			$this->load->model('user_profile_model');
			$user_id = $_SESSION['loggedin_user_id'];
			$user_page_data['get_user_post_data'] = $this->user_profile_model->select_user_post($user_id);
			$this->load->view('header_page');
			$this->load->view('user_page',$user_page_data);
			$this->load->view('footer_page');
        }
    
    }