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

		 if($this->session->userdata('logged_in'))
		   {
		     $session_data = $this->session->userdata('logged_in');
		     $data['username'] = $session_data['username'];
		     
		     $this->load->model('home_slider_model', "HomeSliderModel");
		     $this->load->model('research_items_model', 'ResearchItemsModel');
		     $query['researchSections'] = $this->ResearchItemsModel->get_all_sections();
			$query['slider'] = $this->HomeSliderModel->get_all_images();
			$this->load->view('header', array('title' => "Home Section"));
			$this->load->view('home', $query);
			$this->load->view('footer');
			$this->load->view('close_tags');

		   }
		   else
		   {
		     //If no session, redirect to login page
		     redirect(base_url(),'login');
		   }
	
		
		
	}

	public function volunteer(){
		$this->load->model('volunteer_model',"volunteerModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph-vl', 'terms', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errorsvolunteer', validation_errors());
			redirect(base_url().'home');

		}else{
			//row to be inserted
			$row = array(
				'page' => $this->input->post('title'),
				't_small' => $this->input->post('stitle'),
				'paragraph' => $this->input->post('paragraph-vl')
				);
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'aboutimg';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errorsvolunteer', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->volunteerModel->update_terms_heading($row);
				$this->session->set_flashdata('successvolunteer', "terms data updated successfully");
				redirect(base_url().'home');
			}
		}
	}

	public function training(){
		$this->load->model('training_model',"trainingModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph-tra', 'terms', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errorstraining', validation_errors());
			redirect(base_url().'home');

		}else{
			//row to be inserted
			$row = array(
				'page' => $this->input->post('title'),
				't_small' => $this->input->post('stitle'),
				'paragraph' => $this->input->post('paragraph-tra')
				);
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'aboutimg';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errorstraining', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->trainingModel->update_terms_heading($row);
				$this->session->set_flashdata('successtraining', "terms data updated successfully");
				redirect(base_url().'home');
			}
		}
	}
	
	public function partnership(){
		$this->load->model('partnership_model',"partnershipModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph-pra', 'terms', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errorspartnership', validation_errors());
			redirect(base_url().'home');

		}else{
			//row to be inserted
			$row = array(
				'page' => $this->input->post('title'),
				't_small' => $this->input->post('stitle'),
				'paragraph' => $this->input->post('paragraph-pra')
				);
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'aboutimg';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errorspartnership', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->partnershipModel->update_terms_heading($row);
				$this->session->set_flashdata('successpartnership', "terms data updated successfully");
				redirect(base_url().'home');
			}
		}
	}

	public function research(){
		$this->load->model('research_model',"researchModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph-res', 'terms', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errorsresearch', validation_errors());
			redirect(base_url().'home');

		}else{
			//row to be inserted
			$row = array(
				'page' => $this->input->post('title'),
				't_small' => $this->input->post('stitle'),
				'paragraph' => $this->input->post('paragraph-res')
				);
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'aboutimg';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errorsresearch', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->researchModel->update_terms_heading($row);
				$this->session->set_flashdata('successresearch', "terms data updated successfully");
				redirect(base_url().'home');
			}
		}
	}

	public function research_item(){
		$this->load->model('research_items_model', 'ResearchItemsModel');
		$data = array();
			// Upload handling
			$config['upload_path'] = 'uploads/research/';
			$config['allowed_types'] = 'txt|pdf|docx|doc|ppt|pptx';
			$config['max_size']	= '10000';
				
			$this->load->library('upload', $config);

			$field_name = 'research-file';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errorsresearch-item', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				$file_data = $this->upload->data();
				$row = array(
					'title' => $file_data['file_name'],
					'link' => base_url().'uploads/research/'.$file_data['file_name'],
					'desc' => $this->input->post("paragraph-res-item")
				);
				$this->ResearchItemsModel->add_new_section($row);
				$this->session->set_flashdata('successresearch-item', "Section added successfully");
				redirect(base_url().'home');
			}
	}

	public function delete_research($id){
		$this->load->model('research_items_model', 'ResearchItemsModel');
		$this->ResearchItemsModel->delete_section($id);
		redirect(base_url().'home');
	}

	public function terms(){
		$this->load->model('terms_model',"termsModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph-terms', 'terms', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errorsterms', validation_errors());
			redirect(base_url().'home');

		}else{
			//row to be inserted
			$row = array(
				'page' => $this->input->post('title'),
				't_small' => $this->input->post('stitle'),
				'paragraph' => $this->input->post('paragraph-terms')
				);
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'aboutimg';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errorsterms', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->termsModel->update_terms_heading($row);
				$this->session->set_flashdata('successterms', "terms data updated successfully");
				redirect(base_url().'home');
			}
		}
	}

	public function privacy(){
		$this->load->model('privacy_model',"privacyModel");
		$data = array();
		//set validation rules
		$this->form_validation->set_rules('title','title','required|min_length[5]|max_length[250]');
		//$this->form_validation->set_rules('stitle','Small title','required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('paragraph-prv', 'privacy policy', 'required|min_length[5]');

		//run validation
		if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errorsprivacy', validation_errors());
			redirect(base_url().'home');

		}else{
			//row to be inserted
			$row = array(
				'page' => $this->input->post('title'),
				't_small' => $this->input->post('stitle'),
				'paragraph' => $this->input->post('paragraph-prv')
				);
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'aboutimg';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errorsprivacy', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				$file_data = $this->upload->data();
				$row['img'] = $file_data['file_name'];
				$this->privacyModel->update_privacy_heading($row);
				$this->session->set_flashdata('successprivacy', "Privacy policy data updated successfully");
				redirect(base_url().'home');
			}
		}
	}

	function update_facebook(){
		$this->load->model('social_links_model', 'SocialLinksModel');
		$this->form_validation->set_rules('facebook','facebook','required|min_length[5]|max_length[250]');
        if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'home');

		}else{

			$this->SocialLinksModel->update_facebook($this->input->post('facebook'));
			$this->session->set_flashdata('success', "facebook link updated successfully");
			redirect(base_url().'home');

		}
    }

    function update_twitter(){
        $this->load->model('social_links_model', 'SocialLinksModel');
		$this->form_validation->set_rules('twitter','twitter','required|min_length[5]|max_length[250]');
        if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'home');

		}else{

			$this->SocialLinksModel->update_twitter($this->input->post('twitter'));
			$this->session->set_flashdata('success', "twitter link updated successfully");
			redirect(base_url().'home');

		}  
    }

    function update_youtube(){
        $this->load->model('social_links_model', 'SocialLinksModel');
		$this->form_validation->set_rules('youtube','youtube','required|min_length[5]|max_length[250]');
        if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'home');

		}else{

			$this->SocialLinksModel->update_youtube($this->input->post('youtube'));
			$this->session->set_flashdata('success', "youtube link updated successfully");
			redirect(base_url().'home');

		}  
    }

    function update_linkedin(){
        $this->load->model('social_links_model', 'SocialLinksModel');
		$this->form_validation->set_rules('linkedin','linkedin','required|min_length[5]|max_length[250]');
        if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'home');

		}else{

			$this->SocialLinksModel->update_linkedin($this->input->post('linkedin'));
			$this->session->set_flashdata('success', "linkedin link updated successfully");
			redirect(base_url().'home');

		}  
    }
    function update_forum(){
    	$this->load->model('social_links_model', 'SocialLinksModel');
		$this->form_validation->set_rules('forum','forum','required|min_length[5]|max_length[250]');
        if($this->form_validation->run() == FALSE){
			
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url().'home');

		}else{

			$this->SocialLinksModel->update_forum($this->input->post('forum'));
			$this->session->set_flashdata('success', "forum link updated successfully");
			redirect(base_url().'home');

		}  
    }

	public function slider_image_add(){
		$this->load->model('home_slider_model', 'HomeSliderModel');
		$data = array();
			// Upload handling
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
				
			$this->load->library('upload', $config);

			$field_name = 'img';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errors-section', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				$file_data = $this->upload->data();
				$row = array(
					'img' => $file_data['file_name']
				);
				$this->HomeSliderModel->add_new_img($row);
				$this->session->set_flashdata('success-section', "Image added successfully");
				redirect(base_url().'home');
			}
	}

	public function background_image_add(){
			// Upload handling
			$config['upload_path'] = 'uploads/background/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '5000';
			$config['file_name'] = "xxx.jpg";
				
			$this->load->library('upload', $config);

			$field_name = 'img';
			if($this->upload->do_upload($field_name) == FALSE){
				$this->session->set_flashdata('errors-section2', $this->upload->display_errors());
				redirect(base_url().'home');
			}else{
				if(file_exists('uploads/background/background.jpg')){
					unlink('uploads/background/background.jpg');
				}
				rename("uploads/background/xxx.jpg", "uploads/background/background.jpg");
				$this->session->set_flashdata('success-section2', "Image added successfully");
				redirect(base_url().'home');
			}
	}

	public function slider_image_delete($id){
		$this->load->model('home_slider_model', 'HomeSliderModel');
		$this->HomeSliderModel->delete_img($id);
		redirect(base_url().'home');
	}

	public function logout()
	 {
	 	if($this->session->userdata('logged_in'))
		 {
		   $this->session->unset_userdata('logged_in');
		 }
		redirect(base_url().'home');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */