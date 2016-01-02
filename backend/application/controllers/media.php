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
		if($this->session->userdata('logged_in'))
		{
			$this->load->model('media_items_model','MediaItemsModel');
			$row = $this->MediaItemsModel->get_all_sections();
			$this->load->view('header', array('title' => "Media Section"));
			$this->load->view('media', array('row' => $row));
			$this->load->view('footer');
			$this->load->view('close_tags');
		}else{
			redirect(base_url().'login');
		}
	}

	public function heading(){
		$this->load->model('media_model',"MediaModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph', 'paragraph', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'media');

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
				redirect(base_url().'media');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->MediaModel->update_about_heading($row);
				$this->session->set_flashdata('success', "Heading data updated successfully");
				redirect(base_url().'media');
			}
		}
	}

	public function add_new_publication(){
		$this->load->model('media_items_model', 'MediaItemsModel');
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('name','Name','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('desc','Description','required|min_length[5]');
		$this->form_validation->set_rules('url','URL','required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors-section', validation_errors());
			redirect(base_url().'media');

		}else{
			$row = array(
				'title' => $this->input->post('name'),
				'link' => $this->input->post('url'),
				'desc' => $this->input->post('desc'),
				'date' => date('Y-m-d H:i:s'),
				'downloads' => 0
				);

				$this->MediaItemsModel->add_new_section($row);
				$this->session->set_flashdata('success-section', "Section added successfully");
				redirect(base_url().'media');
		}
		
	}

	public function delete_publication($id){
		$this->load->model('media_items_model', 'MediaItemsModel');
		$this->MediaItemsModel->delete_section($id);
		redirect(base_url().'media');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */