<?php

class Programs_items_model extends CI_Model {

    protected $_table = 'programs_items';

    function __construct() {
        parent::__construct();
    }

    function get_all_sections(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

    function getItem($id){
    	$this->db->where('id', $id);
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

    function getLastNewsItem(){
        $this->db->select("*");
        $this->db->order_by('id', 'desc');
        $this->db->limit(3);
        $query = $this->db->get($this->_table)->result();
        return $query;
    }
}
