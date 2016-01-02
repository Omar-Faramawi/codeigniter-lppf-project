<?php

class Publications_items_model extends CI_Model {

    protected $_table = 'publications_items';

    function __construct() {
        parent::__construct();
    }

    function get_all_sections(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

    function add_new_section($row){
    	$this->db->insert($this->_table, $row);
    }

    function delete_section($id){
    	//remove section img
    	$this->db->where('id', $id);
    	$query = $this->db->select('title')->get($this->_table)->result();
    	$file_name = $query[0]->title;
        if(file_exists('uploads/publications/'.$file_name)){
            unlink('uploads/publications/'.$file_name);
        }
    	//delete section record
    	$this->db->where('id', $id);
    	$this->db->delete($this->_table);
    }
}
