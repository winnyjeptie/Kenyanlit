<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model
{
    //initialization
    function __construct() 
    {
        parent::__construct();
        
    }



    public function save_profile($data){
    	$this->db->insert('author_registration',$data);
    	return $this->db->insert_id();
    }
}

?>