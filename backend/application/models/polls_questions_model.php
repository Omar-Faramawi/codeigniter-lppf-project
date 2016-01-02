<?php

class Polls_questions_model extends CI_Model {

    protected $_table = 'polls_questions';

    function __construct() {
        parent::__construct();
    }

    function get_all_polls(){
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('polls_choice', $this->_table.'.id = polls_choice.question_id', 'left');
        $query = $this->db->get()->result();
        return $query;
    }

    function add_new_question($row){
        $this->db->insert($this->_table, $row);
        $inserted_id = $this->db->insert_id();
        return $inserted_id;
    }


    function delete_poll($id){
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

    function get_question_total_choices($id){
        $this->db->select_sum('polls_choice.counter');
        $this->db->where('polls_questions.id', $id);
        $this->db->from($this->_table);
        $this->db->join('polls_choice', $this->_table.'.id = polls_choice.question_id', 'left');
        $query = $this->db->get()->result();
        return $query[0]->counter;
    }

    /*function get_all_sections(){
    	$query = $this->db->get($this->_table)->result();
    	return $query;
    }

    function add_new_section($row){
    	$this->db->insert($this->_table, $row);
    }

    function delete_section($id){
    	//remove section img
    	$this->db->where('id', $id);
    	$query = $this->db->select('img')->get($this->_table)->result();
    	$img_name = $query[0]->img;
    	unlink('uploads/'.$img_name);
    	//delete section record
    	$this->db->where('id', $id);
    	$this->db->delete($this->_table);
    }*/
}
