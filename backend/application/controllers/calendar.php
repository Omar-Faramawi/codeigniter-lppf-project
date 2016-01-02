<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

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
		$this->load->model('calendar_events_model', 'CalendarEventsModel');
		$row = $this->CalendarEventsModel->get_all_events();
		$this->load->view('header', array('title' => "Calendar Section"));
		$this->load->view('calendar', array('row' => $row));
		$this->load->view('footer');
		$this->load->view('calendar_handlers');
		$this->load->view('close_tags');
		}else{
			redirect(base_url().'login');
		}
	}

	public function heading(){
		$this->load->model('calendar_model',"CalendarModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph', 'paragraph', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'calendar');

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
				redirect(base_url().'calendar');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->CalendarModel->update_about_heading($row);
				$this->session->set_flashdata('success', "Heading data updated successfully");
				redirect(base_url().'calendar');
			}
		}
	}

	public function add_new_event(){
		$this->load->model('calendar_events_model', 'CalendarEventsModel');
		//set validation rules
		$this->form_validation->set_rules('date','date','required|min_length[5]');
		$this->form_validation->set_rules('enddate','End date','required|min_length[5]');
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph', 'paragraph', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors-section', validation_errors());
			redirect(base_url().'calendar');

		}else{
			$date = mysql_real_escape_string($this->input->post('date'));
			$date = date('Y-m-d', strtotime(str_replace('-', '/', $date)));

			$enddate = mysql_real_escape_string($this->input->post('enddate'));
			$enddate = date('Y-m-d', strtotime(str_replace('-', '/', $enddate)));

			$row = array(
				'title' => $this->input->post('title'),
				'details' => $this->input->post('paragraph'),
				'date' => $date,
				'enddate' => $enddate
				);
			$this->CalendarEventsModel->add_new_event($row);
			$this->session->set_flashdata('success-section', "Event added successfully");
			redirect(base_url().'calendar');

		}
	}

	public function delete_event($id){
		$this->load->model('calendar_events_model', 'CalendarEventsModel');
		$this->CalendarEventsModel->delete_event($id);
		redirect(base_url().'calendar');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */