<?php

class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
 	if($this->session->userdata('logged_in'))
	{
		redirect(base_url().'home');
	}else{
   $this->load->helper(array('form'));
   $this->load->view('login');
	}
 }
 
}
?>