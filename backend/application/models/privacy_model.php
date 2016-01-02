<?php

class Privacy_model extends CI_Model {

    protected $_table = 'privacy';

    function __construct() {
        parent::__construct();
    }

    function update_privacy_heading($row){
        $this->db->where('id', 1);
        $this->db->update($this->_table, $row);
    }
}
