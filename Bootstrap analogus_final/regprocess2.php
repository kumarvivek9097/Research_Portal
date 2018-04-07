<?php

include ("config.php");

	
$username=$_POST['username'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$genre=$_POST['genre'];
$password=md5($_POST['password']);
$department=$_POST['department'];
$captcha;
/* if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=YOUR SECRET KEY&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }  */
		
		
		

 
if(isset($_POST['submit']) )
	 
 {




 $query= mysqli_query($db,"Select id from id where enrollment_number='$username' AND fname= '$fname' AND lname='$lname'");
 $result=mysqli_fetch_array($query, MYSQLI_ASSOC);
 $active=$result['active'];
 $count = mysqli_num_rows($query);
 if($count==1)
 {
 {

	
	if($genre == 'student')
{
$insert="INSERT into student(sid,fname,lname,department,dob,email,password) VALUES ('$username', '$fname','$lname','$department','$dob','$email','$password')";
} 

else {
$insert="INSERT into teacher(tid,fname,lname,department,dob,email,password) VALUES ('$username', '$fname','$lname','$department','$dob','$email','$password')";
} 
// mysqli_query($db,$insert);

//echo("Acoount created successfully");
if(mysqli_query($db,$insert)) {
	echo "<script>alert('You are Successfully Registered')</script>";
	echo "<script>window.open('home.php','_self')</script>";
       
}

else {
	echo "<script>alert('The Username Is Already Exsit!!') </script> <br> <script>alert('Please Select Another Username!!')</script>";
	
	echo "<script>window.open('signup.php','_self')</script>";
}

 }

// header('Location: home.php');
 }
 
 
 else 
	 echo "not a valid member";


 }





?>