	
<?php include "include/process2.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<center><h3>ADD</h3></center>
</head>
<body>
<table style="width:100%" >
	<tr><form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		
		<td>
			<h2>personal info</h2>
				<label>First name:</label>
				<input type="text" name="firstname"  required> <br>
				<label>Last name:</label>
				<input type="text" name="lastname"  required> <br>
				<label>Nick name:</label>
				<input type="text" name="nickname"  required> <br>
				<label>Gender:</label><br>
				<input type="radio" name="gender"  required> male<br>
				<input type="radio" name="gender"  required> female<br>
				<label>Mobile number:</label>
				<input type="text" name="mobile"  required> <br>
				<label>Phone number:</label>
				<input type="text" name="phone"  required> <br>
				<label>Email:</label>
				<input type="text" name="email"  required> <br>	
		</td>
		<td>
			<h2>company info</h2>
				<label>Company name:</label>
				<input type="text" name="company_name"  required> <br>
				<label>Destignation:</label>
				<input type="text" name="designation"  required> <br>
				<label>Address 1:</label>
				<input type="text" name="address1"  required> <br>
				<label>Address 2:</label>
				<input type="text" name="address2"  required> <br>
				<label>city:</label>
				<input type="text" name="city" required> <br>
				<label>Pincode:</label>
				<input type="text" name="pincode" required> <br>
				<label>Website:</label>
				<input type="text" name="website" required> <br>
				<label>Communication Address:</label>
				<input type="text" name="com_address" required> <br>
		</td>
		<td><label>Password</label>
			<input type="password" name="pword" required> <br>
			<label>Conform password</label>
			<input type="password" name="pword2" required><br>
			<button type="submit" name="submit">Add</td>
		
		</form>
	</tr>
</table>
<a href="list.php">Back</a>
</body>
</html>