<!DOCTYPE html>
<html>
<head>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<title>Home</title>

	<!-- Favicon-->
        <link rel="shortcut icon" href="images/duicon.ico" type="image/x-icon" sizes="60x60" />

	<!--Bootstrap 3.3.7-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<link rel="stylesheet" type="text/css" href="css/carousel.css">

    <link rel="stylesheet" type="text/css" href="css/footer_wrap.css">

	</style>

</head>
<body>
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
                    <img src="images/ducolorlogonew.png" alt="logo" height="60px" width="60px" padding="1px 1px 1px 1px" >
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
                        <a href="researchprofile.php" id="jake" class="hvr-underline-from-center"> <i class="fa fa-book" aria-hidden="true"></i> Research Profile
</a>
                <li>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="jake"> Login/Signup </button>
                 
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
	</nav>

<!---Login Popup-->
 <form action = "login.php" method = "post">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="font-family: 'Slabo 27px', serif; font-size: 1.5em; font-style: bold;"> <i class="fa fa-sign-in" aria-hidden="true"></i>
  Log in </h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" id="uLogin" name="username" placeholder="Enrollment Number">
                            <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
                        </div>
                    </div> <!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="uPassword" name="password" placeholder="Password">
                            <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
							 <p> select:
	<input type="radio" name="genre" value="student" id="inlineCheckbox1" checked="checked" />Student
	<input type="radio" name="genre" id="inlineCheckbox2" value="faculty" />Faculty
	
	
	</p>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.form-group -->


                </form>

            </div> <!-- /.modal-body -->

            <div class="modal-footer">
                <button class="form-control btn-primary btn-lg btn-block" id="jake">Submit</button>
                <br>
                <a href="signup.php">New user? Register Here</a>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
                        <span class="sr-only">progress</span>
                    </div>
                </div>
            </div> <!-- /.modal-footer -->

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>


<!--Carousel-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="3.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="4.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="5.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--.carousel-->




    <div style="background-color:#911F27; padding:30px">

        <div>
            <h1 style="color: white; text-align: center;font-family: 'Playfair Display', serif;margin-bottom: 20px; font-size:50px;">Recent Research</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="jumbotron">
                        <h4>Find the sequence of Prime Number</h4>
                        <img style="width:250px; height:180px" src="1.jpg" alt="">
                        <hr class="my-2">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Read More...</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jumbotron">
                        <h4>Find the sequence of Prime Number</h4>
                        <img style="width:250px; height:180px" src="2.jpg" alt="">
                        <hr class="my-2">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Read More...</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jumbotron">
                        <h4>Find the sequence of Prime Number</h4>
                        <img style="width:250px; height:180px" src="3.jpg" alt="">
                        <hr class="my-2">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Read More...</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>


<!--Social Media-->

    <div style="background-color:#383A56; padding:30px">
        <div>
            <h1 style="color: white; text-align: center;font-family: 'Playfair Display', serif;
 margin-bottom: 20px; font-size:50px;">Social Media</h1>
        </div>
        <div class="container">


            <div class="row">
                <div class="col-lg-4">
                    <div class="jumbotron">
                        <h4 style="text-align:center"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Twitter</h4>
                        <h5 style="text-align:center">November 4, 2016</h5>
                        <hr class="my-2">
                        <p style="text-align:center; font-family: 'Taviraj', serif;">#DelhiUniversity | FMS Delhi Admission 2017: CAT 2016 Shortlisting Criteria changed to increase women &… http://dlvr.it/Mbg4gR </p>
                        <p style="text-align:center" class="lead">
                            <a class="btn btn-primary btn-lg" href="https://twitter.com/AllDUNews/status/794837198705037312" role="button"> View this tweet</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jumbotron">
                        <h4 style="text-align:center"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Twitter</h4>
                        <h5 style="text-align:center">November 4, 2016</h5>
                        <hr class="my-2">
                        <p style="text-align:center; font-family: 'Taviraj', serif;">#DelhiUniversity | Delhi High Court Issues Historic Decision for Access to Knowledge and Education http://dlvr.it/Mbd3wb </p>
                        <p style="text-align:center" class="lead">
                            <a class="btn btn-primary btn-lg" href="https://twitter.com/AllDUNews/status/794791624899297280" role="button"> View this tweet</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jumbotron">
                        <h4 style="text-align:center"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;  Twitter</h4>
                        <h5 style="text-align:center">November 4, 2016</h5>
                        <hr class="my-2">
                        <p style="text-align:center; font-family: 'Taviraj', serif;">#DelhiUniversity | FMS Delhi admissions 2017: Application process for MBA and Ph D course to end before CAT 2016 </p>
                        <p style="text-align:center" class="lead">
                            <a class="btn btn-primary btn-lg" href="https://twitter.com/AllDUNews/status/794745571613413377" role="button"> View this tweet</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--.Social Media-->

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
                        <p>
                </div>
            </div>
        </div>
    </div>




















<script>
$(document).ready(function(){
    $('.modal-footer button').click(function(){
        var button = $(this);

        if ( button.attr("data-dismiss") != "modal" ){
            var inputs = $('form input');
            var title = $('.modal-title');
            var progress = $('.progress');
            var progressBar = $('.progress-bar');

            inputs.attr("disabled", "disabled");

            button.hide();

            progress.show();

            progressBar.animate({width : "100%"}, 100);

            progress.delay(1000)
                    .fadeOut(600);

            button.text("Close")
                    .removeClass("btn-primary")
                    .addClass("btn-success")
                    .blur()
                    .delay(1600)
                    .fadeIn(function(){
                        title.text("Log in is successful");
                        button.attr("data-dismiss", "modal");
                    });
        }
    });

    $('#myModal').on('hidden.bs.modal', function (e) {
        var inputs = $('form input');
        var title = $('.modal-title');
        var progressBar = $('.progress-bar');
        var button = $('.modal-footer button');

        inputs.removeAttr("disabled");

        title.text("Log in");

        progressBar.css({ "width" : "0%" });

        button.removeClass("btn-success")
                .addClass("btn-primary")
                .text("Ok")
                .removeAttr("data-dismiss");
                
    });
});
</script>

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	

</body>
</html>