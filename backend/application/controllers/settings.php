<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

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
		
		$this->load->view('header', array('title' => "Settings"));
		$this->load->view('settings');
		$this->load->view('footer');
		$this->load->view('close_tags');
		}else{
			redirect(base_url().'login');
		}
	}

	public function chancge_password(){
		//set validation rules
		$this->form_validation->set_rules('newpassword','New password','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('confirmpassword','Confirm password','required|min_length[5]|max_length[250]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'settings');

		}else{
			if($this->input->post('newpassword') != $this->input->post('confirmpassword')){
				$this->session->set_flashdata('errors', "Passwords don't match");
				redirect(base_url().'settings');				
			}else{
				$this->load->model('user', 'userModel');
				$this->userModel->change_password($this->input->post('newpassword'));
				$this->session->set_flashdata('success', "Your password has changed successfully");
				redirect(base_url().'settings');
			}		
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */