<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sample_model extends CI_Model{

	public function signup(){

		$fname = $this->input->post("firstname");
		$lname = $this->input->post("lastname");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$pword = $this->input->post("password");
		$yob = $this->input->post("yob");
		$gender = $this->input->post("gender");
		$type = $this->input->post("type");

		$options = [
			"cost" => 12,
			"salt" => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
		];

		$password = password_hash($pword, PASSWORD_BCRYPT, $options);

		$query = "INSERT INTO person(fname, lname, email, username, pword, yob, gender, type)
					VALUES(
					".$this->db->escape($fname).",
					".$this->db->escape($lname).",
					".$this->db->escape($email).",
					".$this->db->escape($username).",
					".$this->db->escape($password).",
					".$this->db->escape($yob).",
					".$this->db->escape($gender).",
					".$this->db->escape($type)."
					)";

		$result = $this->db->query($query);

	}

	public function login(){

		$username = $this->input->post("uname");
		$pword = $this->input->post("psw");

		//$array = array("username" => $username, "pword" => $pword);

		//$query = $this->db->select("fname, lname, email, username")
		//				->where($array)
		//				->get("person");

		$query = $this->db->select("person_id, fname, lname, email, username, type")
						->where("username", $username)
						->get("person");

		if ($query->num_rows() == 1){
			
			$query2 = $this->db->select("pword")
								->where("username", $username)
								->get("person");

			//$stored_password = $query2->result();

			foreach ($query2->result() as $row){

				if (password_verify($pword, $row->pword)){

					return $query->result();

				}
				else{

					return 2;

				}

			}

		}
		else{

			return 2;
		}

	}

	public function get_id($email){

		$query = $this->db->select("person_id")
							->from("person")
							->where("email", $email)->get();

		foreach ($query->result_array() as $row){
			$ret = $row["person_id"];
		}

		#foreach ($query->result() as $key => $id) {
			#$ret[$key] = $id->person_id;
		#}

		return $ret;

	}

	public function get_rid($email){

		$query = $this->db->select("person_id")
							->from("person")
							->where("email", $email)->get();

		foreach ($query->result_array() as $row){
			$ret = $row["person_id"];
		}

		#foreach ($query->result() as $key => $id) {
			#$ret[$key] = $id->person_id;
		#}

		return $ret;

	}

	public function author(){

	}
	public function reader(){
		
	}

}

?>