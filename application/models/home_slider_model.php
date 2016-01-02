<?php

class Home_slider_model extends CI_Model {

    protected $_table = 'home_slider';

    function __construct() {
        parent::__construct();
    }

    function get_all_images(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

    function add_new_img($row){
    	$this->db->insert($this->_table, $row);
    }

    function delete_img($id){
    	//remove section img
    	$this->db->where('id', $id);
    	$query = $this->db->select('img')->get($this->_table)->result();
    	$file_name = $query[0]->img;
    	unlink('uploads/'.$file_name);
    	//delete section record
    	$this->db->where('id', $id);
    	$this->db->delete($this->_table);
    }
}
