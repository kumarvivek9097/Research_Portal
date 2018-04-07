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
 if(isset($_POST['g-recaptcha-response'])){
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
        } 
		
		
		
/* $result= mysql_query( SELECT * FROM `id` WHERE enrollment_number = $_POST['username'])
 
 
 
 if ($enroll == $result) 
	 
    echo "sign up possible"; */
 
if(isset($_POST['submit']) )
	 
 {
/*$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp); */


// $sql="SELECT * FROM id WHERE  NOT EXISTS (SELECT 1 FROM  WHERE  A.ID = B.ID)";


// $result = mysqli_query($db,"SELECT COUNT(*) FROM id where id.enrollment_number= username;");

// $query= mysqli_query($db,"Select enrollment_number from id where name= '$fname'");
// $result=mysqli_fetch_array($query);
// if ($result == $username) {
	//{
	
	if($genre == 'student')
{
$insert="INSERT into student(sid,fname,lname,department,dob,email,password) VALUES ('$username', '$fname','$lname','$department','$dob','$email','$password')";
} 

else {
$insert="INSERT into teacher(tid,fname,lname,department,dob,email,password) VALUES ('$username', '$fname','$lname','$department','$dob','$email','$password')";
} 
mysqli_query($db,$insert);

echo("Acoount created successfully");
 }

header('Location: login.php');
 }
 
// else 
	//  echo "not a valid member";


 }

/* function SignUp()
{
	include("config.php");
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysqli_query($db,"SELECT * FROM visitor WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysqli_error($db));

	if(!$row = mysqli_fetch_array($query) or die(mysqli_error($db)))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
} */



?>