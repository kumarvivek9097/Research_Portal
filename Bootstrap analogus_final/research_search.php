<!DOCTYPE html>
<html>
<head>

    <title>Home</title>

     <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Favicon-->
        <link rel="shortcut icon" href="images/duicon.ico" type="image/x-icon" sizes="100x100" />

    <!--Bootstrap 3.3.7-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <link rel="stylesheet" type="text/css" href="carousel.css">

     <link rel="stylesheet" type="text/css" href="signup.css">

     <link rel="stylesheet" type="text/css" href="footer_wrap.css">

     <link rel="stylesheet" type="text/css" href="research_searh.css">
     
    <script src='https://www.google.com/recaptcha/api.js'></script>

 <link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">



</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/ducolorlogonew.png" alt="logo" height="60px" width="60px">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.php" id="jake" class="hvr-underline-from-center"><i class="fa fa-home" aria-hidden="true"></i>  Home
</a>
                    </li>
                    <li>
                        <a href="departments.php" id="jake" class="hvr-underline-from-center"><i class="fa fa-building" aria-hidden="true"></i>  Department 
</a>
                    </li>
                    <li>
                        <a href="#" id="jake" class="hvr-underline-from-center"> <i class="fa fa-book" aria-hidden="true"></i> Research Profile
</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   
        <div class="container">
      <div class="row">
      <div class="col-md-3">
      </div>
        <div class="col-md-6">
        <img src="search.jpg" class="img-responsive">
        <br>
          <div class="form-horizontal">
            <div class="input-group">
           <form action="search_results.php" method="GET">
              <input id="txtkey" name="query" type="text" class="form-control" placeholder="Search here" aria-describedby="ddlsearch">
              
              <span class="input-group-btn">
                <button  class="btn btn-info " type="submit"><i class="fa fa-search fa-fw"></i></button>
              </span>
             </form>
            </div>
          </div>
        </div>
      </div>
      </div>




    <div id="footerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>About</h4>
                    <div class="hline-w"></div>
                    <p>The University of Delhi is the premier university of the country and is known for its high standards in teaching and research and attracts eminent scholars to its faculty.</p>
                </div>
                <div class="col-lg-4">
                    <h4>Social Links</h4>
                    <div class="hline-w"></div>
                    <p>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <h4>Know us more!</h4>
                    <div class="hline-w"></div>
                    <p>
                        <a href="home.php">Home</a>
                        <br>
                        <a href="feedback.php">Feedback</a>
                        <br>
                        <a href="contact.php">Contact</a>
                        </p>
                </div>
            </div>
        </div>
    </div>



<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> 

</body>
</html>