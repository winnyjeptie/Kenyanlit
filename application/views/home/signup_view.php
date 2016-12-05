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


	<body style="background-image: url('<?php echo base_url(); ?>grayscale/img/book2.jpg')"; id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Navigation -->
    <nav>
    <a style="color: white; text-transform: uppercase;  font-weight: 300; font-size: 18px; float: right; font-style: italic; " href="<?php echo base_url(); ?>">KENYANLIT: HOME</a>
             
    </nav>
 
  <!--form -->
  <div  class="container">
  <div   class="login">
  	<h2 class="login-heading">Sign Up...It's free!</h2>
      <form action = "<?php echo base_url(); ?>home/register" method="post">
        <input type="text" name="firstname" placeholder="First Name" required="required" class="input-txt" />
          <input type="text" name="lastname" placeholder="Last Name" required="required" class="input-txt" />
          <input type="text" name="email" placeholder="Email" required="required" class="input-txt" />
          <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <input type="password" name="confirmpassword" placeholder="Confirm Password" required="required" class="input-txt"/><br>
        
<br />
<br />
<p style="font-size: 1em;"> Select Year of Birth:<br>


<select style="color: black; font-style:" name='yob' required="required" '>

<?php

  $max = date("Y") - 18;

  $year = date("Y") - 70;

  while ($year < $max):

    $year++;

?>

  <option value = "<?php echo $year ?>"> <?php echo $year ?> </option>

<?php

  endwhile;

?>


</select>
          <p style="font-size: 1em;"> Choose Gender: <br><input type="radio" name="gender" required="required" value="Male" checked> Male<br>
          <input type="radio" name="gender" required="required" value="Female"> Female<br></p>


          <p style="font-size: 1em;"> I am: <br><input type="radio" name="type" required="required" value="1" checked> An author<br>
          <input type="radio" name="type" required="required" value="2"> A reader<br>

          <div class="login-footer">
   
            <button style="font-weight " type="submit">Submit</button>
    
          </div>
      </form>
  </div>
</div>
  
   
	
</body>
</html>