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

   // public function save_data(){

    	//$drama = $this->input->post("drama");
		//$action = $this->input->post("action");
		//$romance = $this->input->post("romance");
		//$mystery = $this->input->post("mystery");
		//$horror = $this->input->post("horror");
		//$selfhelp = $this->input->post("selfhelp");
		//$children = $this->input->post("children");
		//$historical = $this->input->post("historical");
		//$poetry = $this->input->post("poetry");
		//$religion = $this->input->post("religion");
		//$fables = $this->input->post("fables");
		//$autobiographies = $this->input->post("autobiographies");
		//$biographies = $this->input->post("biographies");
		//$shortstory = $this->input->post("shortstory");
		//$othergenres = $this->input->post("othergenres");
		//$description = $this->input->post("description");

		//$query = "INSERT INTO author_registration(drama, action, romance, mystery, horror, selfhelp, children, historical, poetry, religion, fables, autobiographies, biographies, shortstory, othergenres, description, person_id)
					//VALUES(
					//".$this->db->escape($drama).",
					//".$this->db->escape($action).",
					//".$this->db->escape($romance).",
					//".$this->db->escape($mystery).",
					//".$this->db->escape($horror).",
					//".$this->db->escape($selfhelp).",
					//".$this->db->escape($children).",
					//".$this->db->escape($historical).",
					//".$this->db->escape($poetry).",
					//".$this->db->escape($religion).",
					//".$this->db->escape($fables).",
					//".$this->db->escape($autobiographies).",
					//".$this->db->escape($biographies).",
					//".$this->db->escape($shortstory).",
					//".$this->db->escape($othergenres).",
					//".$this->db->escape($description).",
					//2
					//)";

		//$run = $this->db->query($query);

    }
//}

?>