<?php

class Reports_items_model extends CI_Model {

    protected $_table = 'reports_items';

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
    	$query = $this->db->select('img')->get($this->_table)->result();
    	$img_name = $query[0]->img;
        $file = $query[0]->file;
    	unlink('uploads/'.$img_name);
        if(file_exists('uploads/reports/'.$file)){
            unlink('uploads/reports/'.$file);
        }
    	//delete section record
    	$this->db->where('id', $id);
    	$this->db->delete($this->_table);
    }
}
