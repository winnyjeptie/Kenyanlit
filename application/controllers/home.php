<?php  

defined ('BASEPATH')OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model();
		# $this->load->helper('url');
	}

	public function index(){
		 $this->load->view('home/home_view');
	}

	public function sign_up(){
		 $this->load->view('home/signup_view');

	}

	public function register(){
		
		$this->load->model("sample");
		$this->sample->signup();

		$type = $this->input->post("type");

		if ($type == 1){

			redirect("home/author_profile");

		}
		elseif ($type == 2){

			redirect("home/reader_profile");

		}

	}

	public function login(){

		$this->load->model("sample");
		$result = $this->sample->login();

		if ($result != 2){

			#redirect("/");
			echo "Valid credentials.";

		}
		else if ($result == 2){

			echo "Invalid credentials.";

		}

	}

    public function author_profile(){
		 $this->load->view('home/authorprofile_view');

	}

	public function reader_profile(){
		 $this->load->view('home/readerprofile_view');

	}


}