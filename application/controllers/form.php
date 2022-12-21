<?php // (myquote)
//defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index()
	{
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');

            ///echo $this->form_validation->run();
			       
			if ($this->form_validation->run() == FALSE)
			{
					$this->load->view('myform');
			}
			else
			{
					$this->load->view('formsuccess');
			}
	}
}
