<?php

class Email_model extends CI_Model {

    protected $_table = 'email';

    function __construct() {
        parent::__construct();
    }

    function saveMessag($row){
    	$this->db->insert($this->_table, $row);
    }
}
