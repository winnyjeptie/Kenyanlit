
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Kenyanlit|Home</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url(); ?>wattpad/css/useraccount.css">

  
</head>

<body style="background-image: url('<?php echo base_url(); ?>grayscale/img/book2.jpg');">


    <?php

      $sql = $this->db->select("*")->where("person_id", $this->encrypt->decode($this->session->userdata("id")))->get("reader_registration");

      $data = $sql->result();

    ?>

    <?php

      foreach ($data as $key):

    ?>

   <?php

      $sql = $this->db->select("*")->where("person_id", $this->encrypt->decode($this->session->userdata("id")))->get("person");

      $userdata = $sql->result();

    ?>

    <?php

      foreach ($userdata as $userkey):

    ?>


     <nav style="color:black" >
     <div style="color:black" class="container-fluid">
       <div style="color:black" class="navbar-header">
       
                          <a style="color: white; text-transform: uppercase;  font-weight: 300; font-size: 18px; float: right; font-style: italic;"  href="<?=site_url('home/index')?>"> KENYANLIT </a>
                    
       </div>
    <input type="text" class="form-inline" placeholder="Search genres" style="color:black; padding-top:5px"/>
      <span><a href="#"><i class="glyphicon glyphicon-search"></i></a></span>
       <ul class="nav navbar-nav navbar-right">
       <li><a style="color:white"; href = "<?php echo base_url(); ?>home/logout"> Logout </a></li>
         </ul>
      </div>
     </nav>
  <div style="color:black">
    <div class="container text-center">
      <img src="<?php echo $key->picture_url; ?>" class="img-circle user" width="130">
    <h3 style="color:white"> <?php echo $this->session->userdata("fname")." ".$this->session->userdata("lname"); ?> </h3>
</div>
    </div>
<nav class="container-fluid text-center" style="padding-left:0px; padding-right:0px">
    <ul class="nav nav-tabs">
    <?php
    if($userkey->Type == 1):
     ?>
      <li><a href="<?=site_url('home/excerpt')?>">Upload Excerpts</a></li>
     <?php
      endif;
       ?>
      <li><a href="<?=site_url('home/show_authors')?>" target = "_blank">Show authors</a></li>
  </ul>
  </nav>
  <div class="container">
  <div class="row">
  <div class="col-md-7 col-sm-7 col-xs-7 reading-list">
    
    <h3>Personal Description</h3>
    

    <p> <?php echo $key->description ?> </p>

    <h3>Preferred Genres</h3>

    <p> <?php echo $key->drama ?> </p>
    <p> <?php echo $key->action_adventure ?> </p>
    <p> <?php echo $key->romance ?> </p>
    <p> <?php echo $key->mystery ?> </p>
    <p> <?php echo $key->horror ?> </p>
    <p> <?php echo $key->selfhelp ?> </p>
    <p> <?php echo $key->children ?> </p>
    <p> <?php echo $key->historical ?> </p>
    <p> <?php echo $key->poetry ?> </p>
    <p> <?php echo $key->religion ?> </p>
    <p> <?php echo $key->fables ?> </p>
    <p> <?php echo $key->autobiographies ?> </p>
    <p> <?php echo $key->biographies ?> </p>
    <p> <?php echo $key->shortstory ?> </p>
    <p> <?php echo $key->othergenres ?> </p>
    

  
    </div>
    <div class="col-md-7 col-sm-7 col-xs-7 reading-list">
      <div class="row">
        <div class="col-sm-4">
          <img src="<?php echo base_url() ?>pdf_images/pdf3.jpg"  style="padding-top:15px">
      </div>
        <div class="col-sm-8">
          <h2><strong>Suggestions</strong></h2>
                    
          <a href = target = "_blank"> Read </a> 
        </div>
    </div>
      <hr>
  <div class="row">
    <div class="col-sm-3">
      <a href="#" class="thumbnail" style="border:none">
      <img src="<?php echo base_url() ?>pdf_images/pdf3.jpg" width="150" height="300">
      <p style="font-size: 13px">lorem ipsum dolor sit amet</p></a>
      </div>
        <div class="col-sm-3">
      <a href="#" class="thumbnail" style="border:none">
      <img src="<?php echo base_url() ?>pdf_images/pdf3.jpg" width="150" height="300">
      <p style="font-size: 13px">lorem ipsum dolor sit amet</p></a>
      </div>
        <div class="col-sm-3">
      <a href="#" class="thumbnail" style="border:none">
      <img src="<?php echo base_url() ?>pdf_images/pdf3.jpg"  width="150" height="300">
      <p style="font-size: 13px">lorem ipsum dolor sit amet</p></a>
      </div>
        <div class="col-sm-3">
      <a href="#" class="thumbnail" style="border:none">
      <img src="<?php echo base_url() ?>pdf_images/pdf3.jpg"  width="150" height="300">
      <p style="font-size: 13px">lorem ipsum dolor sit amet</p></a>
      </div>
    </div>
      
        </div>

   <footer>
        <div class="container text-center">
            <p style="color:white">Copyright &copy; KenyanLit 2017</p>
        </div>
    </footer>
  
  


  <?php

    endforeach;

  ?>
  <?php

    endforeach;

  ?>
  
  
</body>
</html>
