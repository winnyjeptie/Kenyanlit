 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <link href="<?php echo base_url(); ?>public/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet">

    <title>Author Profile</title>

    <style>
    body {
        padding-top: 70px;
        color:white;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .othertop{margin-top:10px;}

    </style>
      <link href="<?php echo base_url(); ?>public/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet">

     <style>
    body {
        padding-top: 70px;
        color:white;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .othertop{margin-top:10px;}

    </style>

</head>

<body style="background-image: url('<?php echo base_url(); ?>grayscale/img/book2.jpg')";>

<!-- Navigation -->
    <nav>
    <a style="color: white; text-transform: uppercase;  font-weight: 300; font-size: 18px; float: right; font-style: italic; " href="<?php echo base_url(); ?>">KENYANLIT: HOME</a>

   <div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend style="color:white">Author Profile form requirement</legend>


  
</div>

<!-- Multiple Checkboxes -->
<div class="form-group" required="required">
  <label class="col-md-4 control-label" for="Languages Known">Please choose prefered Genre(s)</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Languages Known-0">
      <input type="checkbox" name="Languages Known" id="Languages Known-0" value="1">
      Drama
    </label>
    </div>
  <div class="checkbox">
    <label for="Languages Known-1">
      <input type="checkbox" name="Languages Known" id="Languages Known-1" value="2">
      Action and Adventure
    </label>
    </div>
  <div class="checkbox">
    <label for="Languages Known-2">
      <input type="checkbox" name="Languages Known" id="Languages Known-2" value="3">
      Romance
    </label>
    </div>
  <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Mystery
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Horror
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Self help/Motivational
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Children
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Historical 
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Poetry
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Religion/Spirituality
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Fables/Folklore
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Autobiographies
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Biographies
    </label>
    </div>
    <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
      Short story
    </label>
    </div>

<div class="othertop">
    <label for="Languages Known-4">
    
     
  
    </label>

     <input type="input" name="LanguagesKnown" id="Languages Known-4"  placeholder="Other Genres">
    </div>
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Upload sample percept</label>
  <div class="col-md-4">
    <input id="Upload photo" name="Upload photo" class="input-file" type="file" required="required">
  </div>
</div>


</div>








<!-- Multiple Radios -->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="Owns Vehicle">Owns Vehicle?</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Owns Vehicle-0">
      <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-0" value="1">
      4 wheeler
    </label>
    </div>
  <div class="checkbox">
    <label for="Owns Vehicle-1">
      <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-1" value="2">
     Bike
    </label>
    </div>
  <div class="checkbox">
    <label for="Owns Vehicle-2">
      <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-2" value="3">
      Bicycle
    </label>
    </div>
  </div>
</div> -->




<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Overview (max 200 words)">Brief personal description (max 200 words)</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="Overview (max 200 words)" required="required">Overview</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Upload profile picture</label>
  <div class="col-md-4">
    <input id="Upload photo" name="Upload photo" class="input-file" type="file">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
  <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</a>
  <!--<a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a> -->
    
  </div>
</div>

</fieldset>
</form>
</div>
<!--<div class="col-md-2 hidden-xs">
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
  </div> -->


</div>
   </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>

</body>

</html>