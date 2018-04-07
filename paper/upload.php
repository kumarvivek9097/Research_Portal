<?php
include ("config.php");

$item_type=$_POST['item_type'];
$topic=$_POST['topic'];
$title=$_POST['title'];
$author=$_POST['author'];
$pdate=$_POST['pdate'];
$citation=$_POST['citation'];

if(isset($_POST['submit']) && $_FILES['userfile']['size'] > 0)
 { 
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);


if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

$insert="INSERT into paper(item_type,title,author,topic,date_of_publish,citation,name,type,size,content) VALUES ('$item_type','$title','$author','$topic','$pdate','$citation','$fileName','$fileType','$fileSize','$content')";
mysqli_query($db,$insert);
 echo ("submitted!!!");
}
?>