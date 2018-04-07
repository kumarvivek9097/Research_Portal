<!DOCTYPE html>
<html>
<head>
	<title>paper upload</title>
</head>
<body>
<form method="post" action="upload.php" enctype="multipart/form-data">
<p>item type</p>
<select name="item_type">
	<option value="book">book</option>
	<option value="article">article</option>
</select>
<p>topic</p>
	<select name="topic">
		<option value="maths">Mathematics</option>
		<option value="cse">Computer Science</option>
		<option value="chemistry">Chemistry</option>
	</select>
<table width="300" border="0">
	<tr>
		<td>title</td>
		<td><input type="text" name="title"></td>

	</tr>
	<tr>
		<td>author</td>
		<td><input type="text" name="author"></td>
	</tr>
	
	<tr>
	     <td>date of publication</td>
		<td><input type="date" name="pdate"></td>
	</tr>
	<tr>
		<td>citation</td>
		<td><input type="text" name="citation"></td>
	</tr>
	<tr> 
         <td width="246">
         <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
         <input name="userfile" type="file" id="userfile"> </td>   
     </tr>
     <tr>
		<td> </td>
		<td><input type="submit" name="submit"></td>

	</tr>
</table>
</form>
</body>
</html>