<?php

class Polls_choice_model extends CI_Model {

    protected $_table = 'polls_choice';

    function __construct() {
        parent::__construct();
    }

    function add_question_choice($row){
        foreach ($row as $choice) {
            $this->db->insert($this->_table, $choice);
        }
    }

     function delete_choice($id){
        $this->db->where('question_id', $id);
        $this->db->delete($this->_table);
    }



}
