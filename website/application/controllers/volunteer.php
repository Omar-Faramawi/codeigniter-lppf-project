<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer extends CI_Controller {

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
	public function index()
	{
		$this->load->model('volunteer_model', 'volunteerModel');
		$row = array();
		$row['heading'] = $this->volunteerModel->get_privacy_heading();

		$sidebarArray = array();
		$this->load->model('social_links_model', 'socialLinks');
		$sidebarArray['links'] = $this->socialLinks->getLinks();

		$this->load->model('news_items_model', 'newsItems');
		$sidebarArray['news'] = $this->newsItems->getLastNewsItem();

		$this->load->view('header', array('title' => "Volunteer"));	
		$this->load->view('volunteer', array('row' => $row));


		$this->load->view('sidebar', array('row' => $sidebarArray));	
		$this->load->view('footer');		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */