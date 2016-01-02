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

     function addAnswer($cText, $qId){
        $this->db->where(array("choice" => trim($cText), "question_id" => $qId));
        $this->db->update($this->_table, array("counter" => 'counter+1'));
    }

    function getAnswers($qId){
        $this->db->where("question_id", $qId);
        $answers = $this->db->get($this->_table)->result();
        return $answers;
    }

    function getLastQuestionChoices($id){
        $this->db->where('question_id', $id);
        $query = $this->db->get($this->_table)->result();
        return $query;
    }
}
