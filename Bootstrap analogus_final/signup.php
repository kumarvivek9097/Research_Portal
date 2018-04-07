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
	
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<link rel="stylesheet" type="text/css" href="css/carousel.css">

  <link rel="stylesheet" type="text/css" href="css/signup.css">

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
<form method="post" action="regprocess2.php" enctype="multipart/form-data">
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
                        <a href="#" id="jake" class="hvr-underline-from-center"><i class="fa fa-home" aria-hidden="true"></i>  Home
</a>
                    </li>
                    <li>
                        <a href="#" id="jake" class="hvr-underline-from-center"><i class="fa fa-building" aria-hidden="true"></i>  Department 
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

  <div class="container" id="signup">
    <div class="row">
    <div class="col-md-4">
    </div>
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm ">
            <legend class="text-center" style="   font-family: 'Slabo 27px', serif;font-size: 1.5em;"><a href="#"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
            <form action="#" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="fname" placeholder="First Name" type="text" required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="lname" placeholder="Last Name" type="text" required />
                </div>
            </div>
            <input class="form-control" name="email" placeholder="Your Email" type="email" />
            <input class="form-control" name="password" placeholder="New Password" type="password" required/>
            <label for="">
                Birth Date</label>
            <input class="form-control" name="dob" placeholder="Date of birth" type="date" required />
            <label class="radio-inline">
                <input type="radio" name="genre" id="inlineCheckbox1" value="student"  />
                Student
            </label>
            <label class="radio-inline">
                <input type="radio" name="genre" id="inlineCheckbox2" value="teacher" />
                Faculty
            </label>
            <br>
            <br>
                        <div class="row">
                <div class="col-xs-6 col-md-6">
            <input class="form-control" name="username" placeholder="Enrollment Number" type="text" required />
                </div>
                <div class="col-xs-6 col-md-6">
                            <input class="form-control" name="department" placeholder="Department" type="text" required />

                </div>
				
            </div>
            <br />
<input type="checkbox" name="conditions" value ="conditions" required /> Agree to the terms of use and privacy policy <br>
<br>
             <div class="g-recaptcha" data-sitekey="6LeDSwoUAAAAAM7ytMu2bxbLqLQNYP6vIfLoCaKT"></div>
             <br>

            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                Sign up</button>
            </form>
        </div>
    </div>
</div>





<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	
</form>
</body>
</html>