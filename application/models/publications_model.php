<?php

class Publications_model extends CI_Model {

    protected $_table = 'publications';

    function __construct() {
        parent::__construct();
    }

   function get_publications_heading(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
