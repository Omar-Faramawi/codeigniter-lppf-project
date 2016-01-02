<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Programs extends CI_Controller {

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
			$this->load->model('programs_items_model','ProgramsItemsModel');
			$row['news'] = $this->ProgramsItemsModel->get_all_sections();

			$this->load->view('header', array('title' => "Programs Section"));
			$this->load->view('programs', array('row' => $row));
			$this->load->view('footer');
			$this->load->view('close_tags');
		}else{
			redirect(base_url().'login');
		}
	}

	public function heading(){
		$this->load->model('programs_model',"ProgramsModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph', 'paragraph', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'programs');

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
				redirect(base_url().'programs');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->ProgramsModel->update_about_heading($row);
				$this->session->set_flashdata('success', "Heading data updated successfully");
				redirect(base_url().'programs');
			}
		}
	}

	public function add_program_item(){
		$this->load->model('programs_items_model', 'ProgramsItemsModel');
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph-pro', 'paragraph', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors-section', validation_errors());
			redirect(base_url().'programs');

		}else{
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'sectionimg';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errors-section', $this->upload->display_errors());
				redirect(base_url().'programs');
			}else{
				$file_data = $this->upload->data();
				$row = array(
					'title' => $this->input->post('title'),
					'topic' => $this->input->post('paragraph-pro'),
					'img' => $file_data['file_name'],
					'date' => date('Y-m-d H:i:s')
				);
				$this->ProgramsItemsModel->add_program_section($row);
				$this->session->set_flashdata('success-section', "Section added successfully");
				redirect(base_url().'programs');
			}
		}
	}

	public function delete_section($id){
		$this->load->model('programs_items_model', 'ProgramsItemsModel');
		$this->ProgramsItemsModel->delete_section($id);
		redirect(base_url().'programs');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */