<?php

/**
 * The base controller which is used by the Front and the Admin controllers
 */
class Base_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	function view($view, $vars = array(), $string=false)
	{
		echo 'string='.$string;
		if($string)
		{
			$result	 = $this->load->view('header_page', $vars, true);
			$result	.= $this->load->view($view, $vars, true);
			$result	.= $this->load->view('footer_page', $vars, true);
			
			return $result;
		}
		else
		{
			$this->load->view('header_page', $vars);
			$this->load->view($view, $vars);
			$this->load->view('footer_page', $vars);
		}
	}
	
}//end Base_Controller

