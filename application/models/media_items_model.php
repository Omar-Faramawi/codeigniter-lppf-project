<?php

class Media_items_model extends CI_Model {

    protected $_table = 'media_items';

    function __construct() {
        parent::__construct();
    }

    function get_all_items(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
