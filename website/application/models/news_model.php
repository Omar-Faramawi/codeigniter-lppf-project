<?php

class News_model extends CI_Model {

    protected $_table = 'news';

    function __construct() {
        parent::__construct();
    }

    function get_news_heading(){
       $query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
