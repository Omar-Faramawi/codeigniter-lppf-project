<?php

class About_model extends CI_Model {

    protected $_table = 'about';

    function __construct() {
        parent::__construct();
    }

    function get_about_heading(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

}
