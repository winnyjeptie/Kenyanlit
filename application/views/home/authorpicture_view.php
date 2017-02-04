<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
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

</head>

<body   style="background-image: url('<?php echo base_url(); ?>grayscale/img/book2.jpg');">

 <h4 style = "font-weight: 300">Information uploaded successfully!!</h4>
 <br>
  <h5 style = "font-weight: 300">One last step:<br></h5>
  <br>
  <form enctype="multipart/form-data" class="form-horizontal" method ="POST" action="<?=site_url('home/upload_pdf')?>"  >
  <!-- File Button --> 
         <div class="form-group">
            <label class="col-md-4 control-label" for="upload_pdf">Upload pdf excerpt:<br> </label>
           <div class="col-md-4">
             <input id="upload_pdf" name="file_name" class="input-file" type="file">
             <input value = "<?php echo $id ?>" name = "encryption" type="hidden"> 
           </div>
         </div>
         <br>

         <div class = "form-group">

              <input id="submit" name="submit" type="submit" value="Save" class="btn btn-success" style = "width: 10%;">

            </div>
    </form>
</body>