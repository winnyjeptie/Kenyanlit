<!DOCTYPE html>
<html lang="en">
<body>
    <head>
        <title>KenyanLit: Successful</title>
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
    <br>
 
  <p> Information saved successfully!!<br> click the link below to proceed to your account!</p>
<ul>
If you are an author, click here to proceed: <br>
 <li><a href="<?=site_url('home/reader_user_view')?>">My author Account</a></li> <br>
 If you are a reader, click here to proceed: <br> 
 <li><a href="<?=site_url('home/author_user_profile')?>">My reader Account</a></li>
</ul>
</body>
</html>

