<?php

class Partnership_model extends CI_Model {

    protected $_table = 'partnership';

    function __construct() {
        parent::__construct();
    }

    function update_terms_heading($row){
        $this->db->where('id', 1);
        $this->db->update($this->_table, $row);
    }
}
