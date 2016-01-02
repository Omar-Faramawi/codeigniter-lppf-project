<?php

class Gallery_images_model extends CI_Model {

    protected $_table = 'gallery_images';

    function __construct() {
        parent::__construct();
    }

    function get_all_images(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
