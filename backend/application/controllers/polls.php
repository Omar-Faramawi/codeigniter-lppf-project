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
		 if($this->session->userdata('logged_in'))
		 {
		$this->load->model("polls_questions_model", "PollsQuestionsModel");
		$this->load->model('polls_choice_model', "PollsChoiceModel");
		$data = $this->PollsQuestionsModel->get_all_polls();
		//print_r($data);
		//die();
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
		//print_r($row);die();
		$this->load->view('header', array('title' => "Polls Section"));
		$this->load->view('polls', array('row' => $row));
		$this->load->view('footer');
		$this->load->view('close_tags');
		}else{
			redirect(base_url().'login');
		}
	}

	public function heading(){
		$this->load->model('polls_model',"PollsModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph', 'paragraph', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'polls');

		}else{
			//row to be inserted
			$row = array(
				'page' => $this->input->post('title'),
				't_small' => $this->input->post('stitle'),
				'paragraph' => $this->input->post('paragraph')
				);
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'aboutimg';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errors', $this->upload->display_errors());
				redirect(base_url().'polls');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->PollsModel->update_about_heading($row);
				$this->session->set_flashdata('success', "Heading data updated successfully");
				redirect(base_url().'polls');
			}
		}
	}

	public function add_new_poll(){
		$this->load->model("polls_questions_model", "PollsQuestionsModel");
		$this->load->model("polls_choice_model", "PollsChoiceModel");
		$data = array();

		$this->form_validation->set_rules('question','question','required|min_length[5]');
		$this->form_validation->set_rules('choice1', 'choice1', 'required|min_length[5]');
		$this->form_validation->set_rules('choice2', 'choice2', 'required|min_length[5]');
		$this->form_validation->set_rules('choice3', 'choice3', 'required|min_length[5]');
		$this->form_validation->set_rules('choice4', 'choice4', 'required|min_length[5]');

		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors-section', validation_errors());
			redirect(base_url().'polls');

		}else{
			$row = array(
				'question' => $this->input->post('question'),
				'date' => date('Y-m-d H:i:s')
				);

			$inserted_id = $this->PollsQuestionsModel->add_new_question($row);

			$choice_row = array(
				'choice1' => array(
					'question_id' => $inserted_id,
					'choice' => $this->input->post('choice1'),
					'counter' => 0
					),
				'choice2' => array(
					'question_id' => $inserted_id,
					'choice' => $this->input->post('choice2'),
					'counter' => 0
					),
				'choice3' => array(
					'question_id' => $inserted_id,
					'choice' => $this->input->post('choice3'),
					'counter' => 0
					),
				'choice4' => array(
					'question_id' => $inserted_id,
					'choice' => $this->input->post('choice4'),
					'counter' => 0
					),
				);
			$this->PollsChoiceModel->add_question_choice($choice_row);
			$this->session->set_flashdata('success-section', "Question added successfully");
			redirect(base_url().'polls');
		}
	}

	public function delete_poll($id){
		$this->load->model('polls_questions_model', 'PollsQuestionsModel');
		$this->load->model('polls_choice_model', 'PollsChoiceModel');
		$this->PollsQuestionsModel->delete_poll($id);
		$this->PollsChoiceModel->delete_choice($id);
		redirect(base_url().'polls');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */