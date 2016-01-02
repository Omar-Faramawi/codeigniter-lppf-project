<?php

class Contact_model extends CI_Model {

    protected $_table = 'contactus';

    function __construct() {
        parent::__construct();
    }

   function get_contact_heading(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }
}
