
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KenyanLit</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>grayscale/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="grayscale/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>grayscale/css/grayscale.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-image: url(grayscale/img/book2.jpg)"; id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Kenyan</span> Literature
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Login</a>
                    </li>
                    
                    <li>
                          <a href="<?php echo base_url(); ?>home/sign_up">Sign Up</a>

                    </li>
                    </div>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header style="background-image: url(grayscale/img/book2.jpg)"; class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">KenyanLit</h1>
                        <p class="intro-text">An interactive website ,for authors and readers,
                            <br>that promotes Kenyan Literature.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section style=" margin: 0px auto 0 auto;" id="about" class="container content-section text-center">
        <div>
            
                <h2>About KenyanLit</h2>
                <p>KenyanLit is a free website that gives authors an opportunity to show snippets of their books, exchange ideas and interact with their readers. Readers aslo get an array of books to explore their reading.
                </p>
                <p>It is also an interactive platform where both authors and readers can communicate regarding any topic or issues relating to the authors' works.
                </p>
                <p>KenyanLit is a community of authors and readers, joining hands and minds to promote Kenyan Literature and improve the Kenyan reading culture.</p>
        
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <h2>Welcome!!<br>LogIn</h2>
        
                     <form action="<?php echo base_url(); ?>home/login" method = "post">

  <div style="width: 300px; margin: 0px auto 0 auto;">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required style = "background-color: rgba(0, 0, 0, 0)">

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required style = "background-color: rgba(0, 0, 0, 0)">

    <button type="submit">Login</button>
    
  </div>
</form>
            
        
       
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; KenyanLit 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>grayscale/vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>grayscale/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url(); ?>grayscale/js/grayscale.min.js"></script>

</body>

</html>
