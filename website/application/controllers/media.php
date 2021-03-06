<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media extends CI_Controller {

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
		$this->load->model('publications_model', 'publicationsModel');
		$this->load->model('publications_items_model', 'publicationsSectionsModel');

		$this->load->model('media_model', 'mediaModel');
		$this->load->model('media_items_model', 'mediaSectionsModel');
		$row = array();
		$row['heading'] = $this->mediaModel->get_publications_heading();
		$row['items'] = $this->mediaSectionsModel->get_all_items();
		$this->load->view('header', array('title' => "Media"));	
		$this->load->view('media', array('row' => $row));	
		$sidebarArray = array();
		$this->load->model('social_links_model', 'socialLinks');
		$sidebarArray['links'] = $this->socialLinks->getLinks();

		$this->load->model('news_items_model', 'newsItems');
		$sidebarArray['news'] = $this->newsItems->getLastNewsItem();


		$this->load->view('sidebar', array('row' => $sidebarArray));	
		$this->load->view('footer');		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */