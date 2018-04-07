<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from student where sid = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['sid'];
   $fname=$row['fname'];
   $lnmae=$row['lname'];
   $dob= $row['dob'];
   $email=$row['email'];
   $username=$row['sid'];
   $department=$row['department'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>