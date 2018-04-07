<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<form method="post" action="regprocess2.php" enctype="multipart/form-data">
<table width="300" border="0">
	<tr>
		<td> enrollment number:</td>
		<td><input type="text" name="username" required></td>

	</tr>
	
	<tr>
		<td> First Name</td>
		<td><input type="text" name="fname" required></td>

	</tr>
	<tr>
		<td> Last Name</td>
		<td><input type="text" name="lname" required></td>

	</tr>
	<tr>
		<td> Department</td>
		<td><input type="text" name="department" required></td>

	</tr>
	<tr>
	     <td>date of birth</td>
		<td><input type="date" name="dob" required></td>
	</tr
	<tr>
		<td> email</td>
		<td><input type="email" name="email" required></td>

	</tr>
	<tr>
		<td> Password</td>
		<td><input type="password" name="password" required></td>

	</tr>
	<tr>
		<td> Confirm Password</td>
		<td><input type="password" name="cpassword" required></td>

	</tr>
	
	<p> select:
	<input type="radio" name="genre" value="student" checked="checked" />Student
	<input type="radio" name="genre" value="faculty" />Faculty
	
	
	</p>
	
	<!--<tr> 
         <td width="246">
         <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
         <input name="userfile" type="file" id="userfile"> </td>   
     </tr> -->
	 <div class="g-recaptcha" data-sitekey="6LeDSwoUAAAAAM7ytMu2bxbLqLQNYP6vIfLoCaKT"></div>
	<tr>
	<input type="checkbox" name="conditions" value ="conditions" required /> Agree to the terms of use and privacy policy
		<td> </td>
		<td><input type="submit" name="submit"></td>
		<td><input type="reset" value="Reset"/></td>

	</tr>
</table>
</form>



</body>
</html>