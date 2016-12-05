<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Model{

	public function signup(){

		$fname = $this->input->post("firstname");
		$lname = $this->input->post("lastname");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$pword = $this->input->post("password");
		$yob = $this->input->post("yob");
		$gender = $this->input->post("gender");
		$type = $this->input->post("type");

		$query = "INSERT INTO person(fname, lname, email, username, pword, yob, gender, type)
					VALUES(
					".$this->db->escape($fname).",
					".$this->db->escape($lname).",
					".$this->db->escape($email).",
					".$this->db->escape($username).",
					".$this->db->escape($pword).",
					".$this->db->escape($yob).",
					".$this->db->escape($gender).",
					".$this->db->escape($type)."
					)";

		$result = $this->db->query($query);

	}

	public function login(){

		$username = $this->input->post("uname");
		$pword = $this->input->post("psw");

		$array = array("username" => $username, "pword" => $pword);

		$query = $this->db->select("fname, lname, email, username")
						->where($array)
						->get("person");

		if ($query->num_rows() == 1){
			return $query->result();
		}
		else{
			return 2;
		}

	}

}

?>