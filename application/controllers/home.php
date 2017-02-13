<?php     
error_reporting(E_ALL);
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

		 $this->load->library('form_validation');

	}

	public function register(){
		
		$this->load->model("sample_model");
		$this->sample_model->signup();

		$type = $this->input->post("type");

		if ($type == 1){

			$data["email"] = $this->input->post("email");

			#$this->load->model("sample_model");
			#$data["id"] = $this->sample_model->get_id($email);

			#redirect("home/author_profile", $data);

			$this->load->view('home/authorprofile_view', $data);

		}
		elseif ($type == 2){

			$data["email"] = $this->input->post("email");

			#redirect("home/reader_profile", $data);
			$this->load->view('home/readerprofile_view', $data);

		}

	}

	public function author_registration(){

		$this->load->model("user_model");
		//$this->user_model->save_data();

		echo "Information Uploaded Successfully.";

	}

	public function reader_registration(){

		$this->load->model("user_model");
		//$this->reader_model->save_reader_data();

		echo "Information Uploaded Successfully.";

	}




	public function show_authors(){
      $data['information'] =$this->user_model->show_profile();

      //var_dump($data);die();
		$this->load->view('include/header_view');
		$this->load->view('include/authors_view',$data);
		$this->load->view('include/footer_view');


	}


	public function show_readers(){
      $data['information'] =$this->user_model->show_profiler();

      //var_dump($data);die();
		$this->load->view('include/header_view');
		$this->load->view('include/authors_view',$data);
		$this->load->view('include/footer_view');


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
                
                if($this->upload->do_upload('file_name'))
                  {
                 //$file_data = array('upload_data' => $this->upload->data());
                  $file_data =$this->upload->data();
                   //echo " We are here"; die();

                 $data['img']=base_url().'/images/'.$file_data['file_name'];

                  
                $email_address = $this->input->post("author_email");

                $this->load->model("sample_model");
				$details = $this->sample_model->get_id($email_address);

				#foreach ($details as $key) {
				#	$person_id = $key;
				#}

				$person_id = $details;

				$encrypted_id = $this->encrypt->encode($person_id);

				

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
		#$person_id=$this->input->post("person_id");
        $path=base_url().'images/'.$file_data['file_name'];
                

                  $this->user_model->save_profile([
'drama'=>$drama,
 'action'=>$action,
  'romance'=>$romance,
   'mystery'=>$mystery,
   'horror'=>$horror,
    'selfhelp'=>$selfhelp,
     'children'=>$children,
      'historical'=>$historical,
      'poetry'=>$poetry,
       'religion'=>$religion,
        'fables'=>$fables,
         'autobiographies' =>$autobiographies,
         'biographies'=>$biographies,
          'shortstory'=>$shortstory,
           'othergenres'=>$othergenres,
           'description'=>$description,
          'person_id'=>$person_id,
           'picture_url'=>$path

                    ]);
	                

 redirect('home/show_author_pic/'.$encrypted_id);
                  }
                  else
                 {
                  $error = array('error' => $this->upload->display_errors());
                 $this->load->view('index', $error);

                 // redirect('upload/upload');
                 } 
 
		//end upload item
      

	}
	
	

	public function upload_pdf(){

		$encrypted = $this->input->post("encryption");
		$id = $this->encrypt->decode($encrypted);
    
		// upload item
      $filename='file_name';


           $config = array(
             'upload_path' => "./pdf/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                 'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                 'max_height' => "3768",
               'max_width' => "4096"
                  );
                 $this->load->library('upload', $config);
                
                if($this->upload->do_upload('file_name'))
                  {
                 //$file_data = array('upload_data' => $this->upload->data());
                  $file_data =$this->upload->data();
                   //echo " We are here"; die();

                 $data['pdf_url']=base_url().'/pdf/'.$file_data['file_name'];

                  
                  

       
        $path=base_url().'pdf/'.$file_data['file_name'];
                

               $data = array(
               'pdf_url' => $path
            );
               //$id=2
 //$this->user_model->update_pdf($id,$data);
	                
//$post_id = print_r($id);
/*foreach ($id as $key){
	$this->db->where('person_id', $key);
	$this->db->update('author_registration', $data); 
	$this->user_model->update_pdf($key,$data);
}*/

$query = "UPDATE author_registration SET pdf_url = '".$path."' WHERE person_id = '".$id."'";
$run = $this->db->query($query);


 redirect('home/success');
//echo "uploaded successfully";
                  }
                  else
                 {
                  $error = array('error' => $this->upload->display_errors());
                 $this->load->view('index', $error);

                 // redirect('upload/upload');
                 } 
 
		//end upload item
      

	}




	public function upload_pic(){

    
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
                
                if($this->upload->do_upload('file_name'))
                  {
                 //$file_data = array('upload_data' => $this->upload->data());
                  $file_data =$this->upload->data();
                   //echo " We are here"; die();

                 $data['img']=base_url().'/images/'.$file_data['file_name'];

                 $email_address = $this->input->post("reader_email");

                $this->load->model("sample_model");
				$details = $this->sample_model->get_rid($email_address); 
                $email_address = $this->input->post("reader_email");

				$person_id = $details;

				
				

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
		#$person_id=$this->input->post("person_id");
        $path=base_url().'images/'.$file_data['file_name'];
                

                  $this->user_model->save_profiler([
'drama'=>$drama,
 'action_adventure'=>$action,
  'romance'=>$romance,
   'mystery'=>$mystery,
   'horror'=>$horror,
    'selfhelp'=>$selfhelp,
     'children'=>$children,
      'historical'=>$historical,
      'poetry'=>$poetry,
       'religion'=>$religion,
        'fables'=>$fables,
         'autobiographies' =>$autobiographies,
         'biographies'=>$biographies,
          'shortstory'=>$shortstory,
           'othergenres'=>$othergenres,
           'description'=>$description,
          'person_id'=>$person_id,
           'picture_url'=>$path

                    ]);
	                

 redirect('home/success');
                  }
                  else
                 {
                  $error = array('error' => $this->upload->display_errors());
                 $this->load->view('index', $error);

                 // redirect('upload/upload');
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

    public function author_profile($data){
		 $this->load->view('home/authorprofile_view');

	}


	public function show_author_pic($encrypted_id){

		$data["id"] = $encrypted_id;

		 $this->load->view('home/authorpicture_view', $data);

	}

	public function reader_profile($data){
		 $this->load->view('home/readerprofile_view');

	}


	public function excerpt(){
		 $this->load->view('home/uploads_view');

	}

	public function reader_user_profile(){
		 $data['information'] =$this->user_model->show_profiler();

		 $this->load->view('profile/readerinfo_view');

	}

	public function reader_user_view(){
		 $data['information'] =$this->user_model->show_profiler();

		 $this->load->view('profile/readeruser_view');

	}

	public function success(){


		 $this->load->view('home/successful_view');

	}









}