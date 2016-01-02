<?php

class Partners_model extends CI_Model {

    protected $_table = 'partners';

    function __construct() {
        parent::__construct();
    }

    function get_partners_heading(){
       $query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
