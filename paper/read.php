<?php
$dir = "C:\xampp\htdocs\dashboard\final";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if($file == $_POST['query']){
                echo('<a href="'.$dir . $file.'">'. $file .'</a>'."\n");
            }
        }
        closedir($dh);
    }
}
?>