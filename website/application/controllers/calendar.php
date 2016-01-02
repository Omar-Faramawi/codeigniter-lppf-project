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
		$this->load->model('calendar_model', 'calendarModel');
		$row = array();
		$row['heading'] = $this->calendarModel->get_calendar_heading();

		$this->load->view('header', array('title' => "Calendar"));	
		$this->load->view('calendar', array('row' => $row));
		$this->load->view('footer');
	}

	function get_events(){
		$this->load->model('calendar_events_model', 'CalendarEventsModel');
		$events = $this->CalendarEventsModel->get_all_events();
		$assocEvents = array();
		foreach ($events as $event) {
			$array = array('title' => $event->title, 'start' => $event->date, 'end' => $event->enddate);
			array_push($assocEvents, $array);
		}
		$eventsArray = json_encode($assocEvents);
		echo $eventsArray;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */