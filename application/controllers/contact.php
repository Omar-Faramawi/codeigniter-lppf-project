<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$this->load->model('contact_model', 'contactModel');
		$row = array();
		$row['heading'] = $this->contactModel->get_contact_heading();
		$this->load->view('header', array('title' => "Contact us"));	
		$this->load->view('contact-us', array('row' => $row));	
		$this->load->view('footer');	
		
	}

	function send_message(){
		$this->load->model('email_model',"EmailModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('name','name','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('email','email','required|min_length[5]|max_length[250]|valid_email');
		$this->form_validation->set_rules('subject', 'subject', 'required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('message', 'message', 'required|min_length[5]');

		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'contact');

		}else{
			//row to be inserted
			$row = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message'),
				'date' => date('Y-m-d H:i:s')
				);
			
			$this->EmailModel->saveMessag($row);
			$this->session->set_flashdata('success', "Message sent successfully !");
			redirect(base_url().'contact');
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */