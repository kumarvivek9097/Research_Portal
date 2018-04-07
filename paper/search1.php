<?php
   include ("config.php");
    
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
    $query = $_GET['query']; 
    $min_length = 3;
    
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
         
        $query = mysqli_real_escape_string($db,$query);
        
        $raw_results = mysqli_query($db,"SELECT * FROM paper
            WHERE (`title` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%') OR ('name' LIKE '%".$query."%')") or die(mysql_error());
             
        
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
               echo "<p>".$results['title']. " " .$results['author']."   </p>";
                
				echo "<a href='".$results['address']."'> link </a> ";
				echo "<a href='http://www.google.com'> link </a> ";
				echo"<a href='cat.html'>link </a>";
				
            }
             }
        else{ 
            echo "No results";
        }
         }
    else{  
        echo ('"Minimum length for searching is ".$min_length.');
    }
	

	
?>

</body>
</html>