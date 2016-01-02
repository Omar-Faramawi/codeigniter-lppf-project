<?php

class Email_model extends CI_Model {

    protected $_table = 'email';

    function __construct() {
        parent::__construct();
    }

    function get_all_messages(){
    	$this->db->order_by('id', 'desc');
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

    function delete($id){
    	$this->db->where("id", $id);
    	$this->db->delete($this->_table);
    }
}
