<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Hello extends CI_Controller {  
      
    public function getusername(){
        if(isset($_POST['login'])){
            $username = $_POST['username'];		
        }
       
    }
    public function index($username)  
    {  
        $this->load->view('hello_world');  
    }  
}  
?>  