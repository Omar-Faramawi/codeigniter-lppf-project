<?php

class Media_model extends CI_Model {

    protected $_table = 'media';

    function __construct() {
        parent::__construct();
    }

   function get_publications_heading(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
