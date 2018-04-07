<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("‪...\bi.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("hi.txt"));
fclose($myfile);
?>

</body>
</html>