<?php

class Privacy_model extends CI_Model {

    protected $_table = 'privacy';

    function __construct() {
        parent::__construct();
    }

    function get_privacy_heading(){
        $query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
