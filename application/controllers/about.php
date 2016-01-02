<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->model('about_model', 'aboutModel');
		$this->load->model('about_section_model', 'aboutSectionsModel');
		$row = array();
		$row['heading'] = $this->aboutModel->get_about_heading();
		$row['sections'] = $this->aboutSectionsModel->get_all_sections();
		$this->load->view('header', array('title' => "About LPPF"));	
		$this->load->view('about', array('row' => $row));	
		$this->load->view('footer');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */