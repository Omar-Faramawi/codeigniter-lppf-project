<?php

class Subscriptions_model extends CI_Model {

    protected $_table = 'subscriptions';
    protected $_news_letter = 'newsletter_users';

    function __construct() {
        parent::__construct();
    }

    function add_subscriptions($row){
    	$this->db->insert($this->_table, $row);
    }

    function add_to_newsletter_table($row){
    	$this->db->insert($this->_news_letter, $row);
    }
}
