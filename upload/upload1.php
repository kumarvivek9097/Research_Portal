<?php
$name = $_FILES['file']['name'];
echo $tmp_name=$_FILES['file']['tmp_name'];

die();
if (isset($name))
{
	if (!empty($name))
	{
		$location='uploads/';
		
	if(move_uploaded_file($tmp_name,$location.$name))
	{
		echo 'uploaded';
	}		
	else {
		echo 'please choose a file';
	}
	}
}
?>