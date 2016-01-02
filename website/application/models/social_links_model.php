<?php

class Social_links_model extends CI_Model {

    protected $_table = 'social_links';

    function __construct() {
        parent::__construct();
    }

    function update_facebook($value){
        $row = array('facebook'=> $value);
        $this->db->where('id', 1);
        $this->db->update($this->_table, $row);
    }

    function update_twitter($value){
        $row = array('twitter'=> $value);
        $this->db->where('id', 1);
        $this->db->update($this->_table, $row);   
    }

    function update_youtube($value){
        $row = array('youtube'=> $value);
        $this->db->where('id', 1);
        $this->db->update($this->_table, $row);
    }

    function update_linkedin($value){
        $row = array('linkedin' => $value);
        $this->db->where('id', 1);
        $this->db->update($this->_table, $row);
    }

    function getLinks(){
        $this->db->where('id', 1);
        $query = $this->db->get($this->_table)->result();
        return $query;
    }
}
