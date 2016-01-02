<?php

class Calendar_model extends CI_Model {

    protected $_table = 'calendar';

    function __construct() {
        parent::__construct();
    }

    function get_calendar_heading(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
