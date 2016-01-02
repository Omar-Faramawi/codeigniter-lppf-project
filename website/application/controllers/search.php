<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

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
		$row = array();

		$query = "";
		$results = array();

		if(isset($_GET['q'])){
			$query = $_GET['q'];
			$querySql = "(SELECT id, title, link, 'publications' as type FROM publications_items WHERE title LIKE '%".$query."%') 
	           UNION
	           (SELECT id, topic, title, 'news' as type FROM news_items WHERE title LIKE '%".$query."%' OR topic LIKE '%".$query."%') 
	           UNION
	           (SELECT id, question, date, 'polls' as type FROM polls_questions WHERE question LIKE '%".$query."%')";

	        $row = mysql_query($querySql);
	        if(mysql_num_rows($row) >= 1){
	        	while($result = mysql_fetch_object($row)){
	        		array_push($results, $result);
	        	}
	        }
		}

		

		$this->load->view('header', array('title' => "Search"));	
		$this->load->view('search', array('row' => $results));

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