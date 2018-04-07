


<form action=" mysql-order-by-clause.php" method= "post" onsubmit="return validate_form(this);" >
<p>sort by:</p>
<select name="sort">
<option value="fname" >first name</option>
<option value="lname" >last name</option>
<option value="username" >username</option>
<option value="email">email id</option>
</select>
<select name="order">
	<option value="asc">Ascending</option>
	<option value="desc">Descending</option>

</select>
<input type="submit" name="submit">
</form>