<?php
include ('config.php');
 
$sql = "SELECT content FROM paper where author='kumar' ";
$result = mysqli_query($db,"$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// header("Content-type: " . $row["type"]);
echo $row["content"];


?>