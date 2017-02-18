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

    public function update_profile($data){
    	$this->db->update('author_registration',$data);
    	return $this->db->insert_id();
    }

     public function save_profiler($data){
    	$this->db->insert('reader_registration',$data);
    	return $this->db->insert_id();
    }


    public function show_profile(){
    	$get_profile ="Select * from author_registration a
         
         INNER JOIN person p

         on 

         a.author_id =p.person_id


    	";
    	$result=$this->db->query($get_profile);
    	return $result->result_array();
    }

     public function show_profiler(){
    	$get_profile ="Select * from reader_registration r
         
         INNER JOIN person p

         on 

         r.reader_id =p.person_id


    	";
    	$result=$this->db->query($get_profile);
    	return $result->result_array();
    }


    public function update_pdf($data,$id){ 	
$this->db->where( 'person_id',$id);
$this->db->update('author_registration',$data); 
    }

     public function update_excerpts(){
     $this->db->insert('books');     

    }


 

    }

?>