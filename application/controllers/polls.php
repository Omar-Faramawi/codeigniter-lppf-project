<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Polls extends CI_Controller {

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
		$this->load->model('polls_model', 'pollsModel');
		$this->load->model("polls_questions_model", "PollsQuestionsModel");
		$this->load->model('polls_choice_model', "PollsChoiceModel");
		$data = $this->PollsQuestionsModel->get_all_polls();

		$row = array();
		$temp = array();
		$qCounter = -1;
		$counter=0;
		foreach ($data as $q) {
			if(in_array($q->question, $temp) == FALSE){
				$counter = 0;
				$sum = $this->PollsQuestionsModel->get_question_total_choices($q->question_id);
			
				
				if($sum != 0){
					$percentage = $q->counter / $sum *100;
				}else{
					$percentage = 0;
				}
				array_push($temp, $q->question);
				$row['question'.++$qCounter] = array(
													'question_value' => $q->question,
													'question_id' => $q->question_id,
													'question_choices' =>  array(
															$counter => array(
															'choice1' => $q->choice,
															'hits' => $q->counter,
															'percentage' => round($percentage, 1)
														)
													)
												); 
				$counter++;
			}else{
				$sum1 = $this->PollsQuestionsModel->get_question_total_choices($q->question_id);
				//echo $sum;
				
				if($sum1 != 0){
					$percentage = $q->counter / $sum1 *100;
				}else{
					$percentage = 0;
				}

				$counterx = array(
													'choice1' => $q->choice,
													'hits' => $q->counter,
													'percentage' => round($percentage, 1)

													);
			 	array_push($row['question'.$qCounter]['question_choices'], $counterx);
			 	$counter++; 
			}
		}

		$row['heading'] = $this->pollsModel->get_polls_heading();
		$this->load->view('header', array('title' => "Polls"));	
		$this->load->view('polls', array('row' => $row));	
		$sidebarArray = array();
		$this->load->model('social_links_model', 'socialLinks');
		$sidebarArray['links'] = $this->socialLinks->getLinks();

		$this->load->model('news_items_model', 'newsItems');
		$sidebarArray['news'] = $this->newsItems->getLastNewsItem();


		$this->load->view('sidebar', array('row' => $sidebarArray));	
		$this->load->view('footer');			
	}

	public function choose(){
		$qId = $this->input->post('qId');
		$cText = trim($this->input->post('cText'));
		$query = mysql_query("SELECT counter FROM polls_choice WHERE question_id=$qId AND choice='$cText'");
		$row = mysql_fetch_object($query);
		$newCounter = $row->counter + 1;
		mysql_query("UPDATE polls_choice SET counter = $newCounter WHERE question_id=$qId AND choice='$cText'");
		echo "Done";
	}

	public function getAnswers(){
		$this->load->model('polls_choice_model', "PollsChoiceModel");
		$answers = $this->PollsChoiceModel->getAnswers($this->input->post('qId'));
		$jsonAnswers = json_encode($answers);
		echo $jsonAnswers;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */