<?php

class Gallery_model extends CI_Model {

    protected $_table = 'gallery';

    function __construct() {
        parent::__construct();
    }

      function get_gallery_heading(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
