<?php

class Terms_model extends CI_Model {

    protected $_table = 'terms';

    function __construct() {
        parent::__construct();
    }

    function get_terms_heading(){
        $query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
