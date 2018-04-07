<?php
include ("config.php");

$dname=$_POST['dname'];
$number=$_POST['number'];
if(isset($_POST['submit']))
{
	$insert= "INSERT into department(name,number_of_publications) VALUES ('$dname','$number')";
	mysqli_query($db,$insert);
	 echo ("submitted!!!");
}
?>