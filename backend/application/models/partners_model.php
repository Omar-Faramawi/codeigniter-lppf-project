<?php

class Partners_model extends CI_Model {

    protected $_table = 'partners';

    function __construct() {
        parent::__construct();
    }

    function update_about_heading($row){
        $this->db->where('id', 1);
        $this->db->update($this->_table, $row);
    }
}
