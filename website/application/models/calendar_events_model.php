<?php

class Calendar_events_model extends CI_Model {

    protected $_table = 'calendar_events';

    function __construct() {
        parent::__construct();
    }

    function get_all_events(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

    function add_new_event($row){
    	$this->db->insert($this->_table, $row);
    }

    function delete_event($id){
    	//delete section record
    	$this->db->where('id', $id);
    	$this->db->delete($this->_table);
    }
}
