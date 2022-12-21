<?php // (myquote)
defined('BASEPATH') OR exit('No direct script access allowed');

	class post extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('post_model');
		}

		public function index()
		{		
			// echo'<pre>';print_r($_SESSION);echo'</pre>';
			$this->load->model('post_model');

			
			
			if($_SESSION['new_user_name']){
				
				    $this->load->library('form_validation');
					$user_id = $_SESSION['loggedin_user_id'];
					
					if(isset($_POST['post']))	{
						//  form handling 
						$config['upload_path']          = './upload/';
						$config['allowed_types']        = 'jpeg|jpg|png';
						$config['max_size']             = 100000;

						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						
						$this->form_validation->set_rules('post_title', 'Title', 'trim|required');
					    $this->form_validation->set_rules('post_desc', 'Description', 'trim|required');	
						

							if ($this->form_validation->run() == FALSE){
								$custom_err = array('main_error' => "please fill form correctly");
							}
							if(! $this->upload->do_upload('userfile')){
								$error = array('error' => $this->upload->display_errors());
								// echo $error['error'];
							}
							else{
								$data = array('upload_data' => $this->upload->data());
								$this->post_model->insert_post($data);
								redirect('post');
							}
							
								
					}
					
					$data_1['selected_data'] = $this->post_model->select_post($user_id);  // this will get complete data of post and user 
					$data_1['new_user_data'] = $this->post_model->get_user_data();       // this will get us only users data
					if(isset($error)){
						$data_1['form_error'] = $custom_err['main_error'];
						$data_1['file_error'] = $error['error'];
					}
					
					//print_r($data_1);
					$this->load->view('header_page');
					$this->load->view('post_page', $data_1);
					$this->load->view('footer_page');
					
			}
			else{
				redirect('login');
			}
			if(isset($_POST['comment'])){
				$comment_post_id = $_POST['postId'];
				$comment_desc = $_POST['comment_desc'];
				$commented_by = $_SESSION['loggedin_user_id'];
				$comment_detail = array($comment_desc,$commented_by,$comment_post_id);
				$data_1['insert_comment_key'] = $this->post_model->insert_comment($comment_detail);
				redirect('post');
			}
		}

		public function like_post(){
			$result=$this->post_model->like_post();
			echo json_encode($result);
		}
	}

