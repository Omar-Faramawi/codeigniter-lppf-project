<?php

class Training_model extends CI_Model {

    protected $_table = 'training';

    function __construct() {
        parent::__construct();
    }

    function update_terms_heading($row){
        $this->db->where('id', 1);
        $this->db->update($this->_table, $row);
    }
}
