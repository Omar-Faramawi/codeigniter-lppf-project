<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

		$this->load->model('home_slider_model', 'homeSlide');
		$row['images'] = $this->homeSlide->get_all_images();
		$this->load->model('social_links_model', 'socialLinks');
		$row['links'] = $this->socialLinks->getLinks();
		$this->load->model('about_section_model', 'aboutSections');
		$row['about'] = $this->aboutSections->getLastAboutSection();
		$this->load->model('mission_section_model', 'missiontSections');
		$row['mission'] = $this->missiontSections->getLastMissionSection();
		$this->load->model('polls_questions_model', 'polls');
		$row['poll'] = $this->polls->getLastPoll();
		$this->load->model('polls_choice_model', 'pollsChoice');
		$row['choice'] = $this->pollsChoice->getLastQuestionChoices($row['poll'][0]->id);
		$this->load->model('news_items_model', 'newsItems');
		$row['news'] = $this->newsItems->getLastNewsItem();

		$this->load->view('header', array('title' => "Libyan Public Policy Forum"));	
		$this->load->view('index',  array('row' => $row));	
		$this->load->view('footer');	
	}



	public function subscribe(){
		$email = $this->input->post('email');
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  echo "Invalid email format"; 
		}else{
			$this->load->model('subscriptions_model', 'subModel');
			$row = array('email' => $email);
			$this->subModel->add_subscriptions($row);

			$type_com = substr($email, strpos($email, "@")+1);
			$type = substr($type_com, 0, -4);
			$row = array('email' => $email, 'email_type' => $type, 'time'=> time());
			$this->subModel->add_to_newsletter_table($row);

			$this->load->library('email');

			$this->email->from($email, $email);
			$this->email->to('info@lppf.org'); 

			$this->email->subject('New Subscription');
			$message = "This email '$email' has Subcriped to the LPPF newsletter.";
			$this->email->message($message);	

			$this->email->send();

			echo "subscribed Successfully !";
		

		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */