<?php
include("config.php")
?>
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

     <link rel="stylesheet" type="text/css" href="search_results.css">

    <script src='https://www.google.com/recaptcha/api.js'></script>

 <link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">



</head>
<body>
<?php
    $query = $_GET['query']; 
    $min_length = 3;
    
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
         
        $query = mysqli_real_escape_string($db,$query);
        
        $raw_results = mysqli_query($db,"SELECT * FROM paper
            WHERE (`title` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%') OR ('name' LIKE '%".$query."%')") or die(mysql_error());
             
        $count = mysqli_num_rows($raw_results);
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             $results = mysqli_fetch_array($raw_results);
			 $title=$results['title']  ;
			 $publish= $results['date_of_publish'];
			 $author= $results['author'];
			 $address= $results['address'];
			 
            while($results = mysqli_fetch_array($raw_results)){
          //      echo "<p>".$results['title']. " " .$results['author']."   </p>";
                
		//	echo "<a href='".$results['address']."'> link </a> ";
		//		echo "<a href='http://www.google.com'> link </a> ";
		//		echo"<a href='cat.html'>link </a>";
		
		
				
            }
             }
        else{ 
            echo "No results";
        } 
         }
    else{  
        echo ('"Minimum length for searching is ".$min_length.');
    }
	?>
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