<?php
   include('config.php');
   include ('login.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   if ($genre== student){
   $ses_sql = mysqli_query($db,"select * from student where sid = '$user_check' ");
   }
   else
   {
	 $ses_sql = mysqli_query($db,"select * from teacher where tid = '$user_check' ");  
   }
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['sid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>