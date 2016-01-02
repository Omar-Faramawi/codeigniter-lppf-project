<?php 
class my404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        
        $this->load->view('header', array('title' => "Page Not Found"));    
        $this->load->view('404');   
        $this->load->view('footer');
    } 
} 
?> 