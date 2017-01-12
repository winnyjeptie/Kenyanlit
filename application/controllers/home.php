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
		echo "string";die();
		$this->load->model("sample_model");
		$this->sample->signup();

		$type = $this->input->post("type");

		if ($type == 1){

			redirect("home/author_profile");

		}
		elseif ($type == 2){

			redirect("home/reader_profile");

		}

	}

	public function author_registration(){

		$drama = $this->input->post("drama");
		$action = $this->input->post("action");
		$romance = $this->input->post("romance");
		$mystery = $this->input->post("mystery");
		$horror = $this->input->post("horror");
		$selfhelp = $this->input->post("selfhelp");
		$children = $this->input->post("children");
		$historical = $this->input->post("historical");
		$poetry = $this->input->post("poetry");
		$religion = $this->input->post("religion");
		$fables = $this->input->post("fables");
		$autobiographies = $this->input->post("autobiographies");
		$biographies = $this->input->post("biographies");
		$shortstory = $this->input->post("shortstory");
		$othergenres = $this->input->post("othergenres");
		$description = $this->input->post("description");
	}

	public function upload_items(){

     
		// upload item
      $filename='file_name';
     $config = array(
             'upload_path' => "./images/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                 'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                 'max_height' => "3768",
               'max_width' => "4096"
                  );
                 $this->load->library('upload', $config);
                 //$this->upload->initialize($config);
                if($this->upload->do_upload('file_name'))
                  {
                 //$file_data = array('upload_data' => $this->upload->data());
                  $file_data =$this->upload->data();

                 $data['img']=base_url().'/images/'.$file_data['file_name'];

                  
                  

                  
					$drama = $this->input->post("drama");
					$action = $this->input->post("action");
					$romance = $this->input->post("romance");
					$mystery = $this->input->post("mystery");
					$horror = $this->input->post("horror");
					$selfhelp = $this->input->post("selfhelp");
					$children = $this->input->post("children");
					$historical = $this->input->post("historical");
					$poetry = $this->input->post("poetry");
					$religion = $this->input->post("religion");
					$fables = $this->input->post("fables");
					$autobiographies = $this->input->post("autobiographies");
					$biographies = $this->input->post("biographies");
					$shortstory = $this->input->post("shortstory");
					$othergenres = $this->input->post("othergenres");
					$description = $this->input->post("description");

                  $path=base_url().'images/'.$file_data['file_name'];
                

                  $this->user_model->save_profile([

                    'drama'  =>$drama,
                    'action'=>$action,
                    'romance'=>$romance,
                    'mystery'=>$mystery,
                    'horror'=>$horror,
                    'selfhelp'=>$selfhelp,
                    'children'=>$children,
                    'historical'=>$historical,
                    'poetry' =>$poetry,
                    'religion'=>$religion,
                    'fables'=>$fables,
                    'autobiographies'=>$autobiographies,
                    'biographies'=>$biographies,
                    'shortstory'=>$shortstory,
                    'othergenres'=>$othergenres,
                    'description'=>$description,
                    ]);
	                


                                  redirect('home/upload_items');
                  }
                  else
                 {
                  $error = array('error' => $this->upload->display_errors());
                 $this->load->view('index', $error);

                  redirect('home/upload_items');
                 } 
 
		//end upload item
      

	}
	

	public function login(){

		$this->load->model("sample_model");
		$result = $this->sample_model->login();

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

	public function user_account(){
		 $this->load->view('home/useraccount_view');


	}


}