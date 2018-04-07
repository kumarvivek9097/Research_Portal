<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.
// $tmp_name=$_FILES['file']['tmp_name'];

//$uploaddir = '‪uploads/';
//$uploadfile = $uploaddir . basename($_FILES['file']['name']);

//echo '<pre>';
if (move_uploaded_file('form.php', 'uploads/form.php')) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "error!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?>