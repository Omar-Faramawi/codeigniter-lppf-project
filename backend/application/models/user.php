<?php

class User extends CI_Model {

    protected $_table = 'users';

    function __construct() {
        parent::__construct();
    }

   public function add_user($row){
   	$this->db->insert($this->_table, $row);
   }

   function login($username, $password)
	 {
	   $this -> db -> select('id, username, password');
	   $this -> db -> from('users');
	   $this -> db -> where('username', $username);
	   $this -> db -> where('password', MD5($password));
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	 }

	 function change_password($password){
	 	$session = $this->session->userdata('logged_in');
	 	$data = array("password" => md5($password));
	 	$this->db->where('id', $session['id']);
	 	$this->db->update($this->_table, $data);
	 }

}
