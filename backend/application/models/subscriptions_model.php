<?php

class Subscriptions_model extends CI_Model {

    protected $_table = 'subscriptions';

    function __construct() {
        parent::__construct();
    }

    function get_all_subs(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

}
