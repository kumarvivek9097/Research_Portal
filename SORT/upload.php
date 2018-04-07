<?php

include ("config.php");

	

$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$message=$_POST['message'];


		
		

 
if(isset($_POST['submit']) )
	 
 {




 

$insert="INSERT into feedback(fname,lname,email,mobile,message) VALUES ('$fname','$lname','$email','$phone','$message')";
 

 
mysqli_query($db,$insert);

echo("submitted");
 }


 
 



 





?>