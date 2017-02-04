<!DOCTYPE html>
<html lang="en">
<body>
    <head>
        <title>KenyanLit: Sign Up</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>grayscale/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="grayscale/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>grayscale/css/grayscale.css" rel="stylesheet">


        <link href="<?php echo base_url(); ?>public/css/signup.css" rel="stylesheet">



    </head>


    <body style="background-image: url('<?php echo base_url(); ?>grayscale/img/book2.jpg')"; id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload='document.form1.text1.focus()'>

  <!-- Navigation -->
    <nav>
    <a style="color: white; text-transform: uppercase;  font-weight: 300; font-size: 18px; float: right; font-style: italic; " href="<?php echo base_url(); ?>">KENYANLIT: HOME</a>
             
    </nav>
 
  <!--form -->
  <div  class="container">
  <div   class="login">
    <h2 class="login-heading">Upload New excerpt</h2>
      <form action = "<?php echo base_url(); ?>home/upload_excerpt" method="post">
        <input type="text" name="booktitle" placeholder="Book Title" required="required" class="input-txt" />
          <input type="text" name="author" placeholder="Author Name" required="required" class="input-txt" />
           <input type="text" name="genre" placeholder="Genre" required="required" class="input-txt" />
          <br>
        <!-- File Button --> 
          <div class="form-group">
            <label class="col-md-4 control-label" for="upload_excerpt">Upload your pdf excerpt: </label> 
            <div class="col-md-4">
           <input id="Upload_excerpt" name="file_name" class="input-file" type="file" required="required">
           </div>

           <br>

   
            <button style="font-weight " type="submit"> Submit</button>
    
          </div>
      </form>
  </div>
</div>
  

</body>
</html>

