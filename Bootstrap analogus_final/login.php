<?php
   include("config.php");
   session_start();
   $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $genre=$_POST['genre'];
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = md5(mysqli_real_escape_string($db,$_POST['password'])); 
      
	  if($genre== 'student'){
      $sql = "SELECT id FROM student WHERE sid = '$myusername' and password = '$mypassword'";}
	  else 
	  {
		   $sql = "SELECT id FROM teacher WHERE tid = '$myusername' and password = '$mypassword'";}
	  
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: student_profile.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>