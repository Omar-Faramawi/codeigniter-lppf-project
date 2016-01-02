<?php

class Mission_model extends CI_Model {

    protected $_table = 'mission';

    function __construct() {
        parent::__construct();
    }

    function get_mession_heading(){
        $query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
