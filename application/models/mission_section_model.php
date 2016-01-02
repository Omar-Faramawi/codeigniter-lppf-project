<?php

class Mission_section_model extends CI_Model {

    protected $_table = 'mission_section';

    function __construct() {
        parent::__construct();
    }

     function get_all_sections(){
        $query = $this->db->get($this->_table)->result();
        return $query;
    }

    function getLastMissionSection(){
    	$this->db->select("*");
    	$this->db->order_by('id', 'desc');
    	$this->db->limit(1);
    	$query = $this->db->get($this->_table)->result();
    	return $query;	
    }
}
