<?php
include ('config.php');
$sql = "SELECT id FROM paper ORDER BY Id ASC"; 
$result = mysqli_query($db,$sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB file</TITLE>

</HEAD>
<BODY>
<?php
while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
?>
<img src="image.php?id=<?php echo $row["id"]; ?>" /><br/>
<?php		
}

?>
</BODY>
</HTML>