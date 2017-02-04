 
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

<body style="background-image: url('<?php echo base_url(); ?>grayscale/img/book2.jpg');">

<!-- Navigation -->
    <nav>
    <a style="color: white; text-transform: uppercase;  font-weight: 300; font-size: 18px; float: right; font-style: italic; " href="<?php echo base_url(); ?>">KENYANLIT: HOME</a>
    </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-10 ">
        <form enctype="multipart/form-data" class="form-horizontal" method ="POST" action="<?=site_url('home/upload_items')?>"  >
          <fieldset>

<!-- Form Name -->
          <legend style="color:white">Author Profile form requirement</legend>

<!-- Multiple Checkboxes -->
          <h4 style = "font-weight: 300">Please choose prefered Genre(s)</h4>
          <div class="col-md-6">
            <div class="checkbox">
              <label for="drama">
                <input type="checkbox" name="drama" id="drama" value="Drama">
                Drama
              </label>
            </div>
            <div class="checkbox">
              <label for="action">
                <input type="checkbox" name="action" id="action" value="Action/Adventure">
                Action/Adventure
              </label>
            </div>
            <div class="checkbox">
              <label for="romance">
                <input type="checkbox" name="romance" id="romance" value=" Romance">
                Romance
              </label>
            </div>
            <div class="checkbox">
              <label for="mystery">
                <input type="checkbox" name="mystery" id="mystery" value="Mystery">
                Mystery
              </label>
            </div>
            <div class="checkbox">
              <label for="horror">
                <input type="checkbox" name="horror" id="horror" value="Horror">
                Horror
              </label>
            </div>
            <div class="checkbox">
              <label for="selfhelp">
                <input type="checkbox" name="selfhelp" id="selfhelp" value="Self help/Motivational">
                Self help/Motivational
              </label>
            </div>
            <div class="checkbox">
              <label for="children">
                <input type="checkbox" name="children" id="children" value="Children">
                Children
              </label>
            </div>
            <div class="checkbox">
              <label for="historical">
                <input type="checkbox" name="historical" id="historical" value="Historical ">
                Historical 
              </label>
            </div>
            <div class="checkbox">
              <label for="poetry">
                <input type="checkbox" name="poetry" id="poetry" value="Poetry">
                Poetry
              </label>
            </div>
            <div class="checkbox">
              <label for="religion">
                <input type="checkbox" name="religion" id="religion" value="Religion/Spirituality">
                Religion/Spirituality
              </label>
            </div>
            <div class="checkbox">
              <label for="fables">
                <input type="checkbox" name="fables" id="fables" value="Fables/Folklore">
                Fables/Folklore
              </label>
            </div>
            <div class="checkbox">
              <label for="autobiographies">
                <input type="checkbox" name="autobiographies" id="autobiographies" value="Autobiographies">
                Autobiographies
              </label>
            </div>
            <div class="checkbox">
              <label for="biographies">
                <input type="checkbox" name="biographies" id="biographies" value="Biographies">
                Biographies
              </label>
            </div>
            <div class="checkbox">
              <label for="shortstory">
                <input type="checkbox" name="shortstory" id="shortstory" value="ShortStory">
                Short story
              </label>
            </div>

            <input type="hidden" class = "form-control" name="author_email" id="author_email"  placeholder="" value = "<?php echo $email; ?>">

            <div class="othertop form-group">
              <label for="othergenres"> Other Genres </label>
              <input type="input" class = "form-control" name="othergenres" id="othergenres"  placeholder="Other Genres">
            </div>

            <br>

            <!-- File Button --> 
          <div class="form-group">
            <label class="col-md-4 control-label" for="upload_picture">Upload your profile picture: </label> 
            <div class="col-md-4">
           <input id="Upload_picture" name="file_name" class="input-file" type="file" required="required">
           </div>

           <br>


            <!-- Textarea -->
            <div class="form-group">
              <label for="overview">Brief personal description (max 200 words)</label>
              <textarea class="form-control" rows = "10"  id="description" name="description" placeholder="Description (Max 200 words)" required="required">  </textarea>
            </div>

            <br>
            <!-- File Button --> 
        <!--  <div class="form-group">
            <label class="col-md-4 control-label" for="upload_photo">Upload profile picture</label>
           <div class="col-md-4">
             <input id="Upload photo" name="upload_photo" class="input-file" type="file">
           </div>
         </div> -->

           <br>
           
            <div class = "form-group">

              <input id="submit" name="submit" type="submit" value="Save" class="btn btn-success" style = "width: 25%;">

            </div>
    
          </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>



    <!-- jQuery Version 1.11.1 -->
    <script src="<?php echo base_url(); ?>public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $("#description").val("");
    </script>

</body>

</html>