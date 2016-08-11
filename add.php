<?php 
function test_input($str)
{
	$str=trim($str);
	$str=stripslashes($str);
	$str=htmlspecialchars($str);
	return $str;
}
$email=$pword="";
$emailerr=$pworderr="";
if($_SERVER["REQUEST_METHOD"] == 'POST')
{
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$nickname=$_POST['nickname'];
			$gender=$_POST['gender'];
			$mobile=$_POST['mobile'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$company_name=$_POST['company_name'];
			$designation=$_POST['designation'];
			$address1=$_POST['address1'];
			$address2=$_POST['address2'];
			$city=$_POST['city'];
			$pincode=$_POST['pincode'];
			$website=$_POST['website'];
			$com_address=$_POST['com_address'];
			$pword=$_POST['pword'];
	if($email!="" && $pword!="")
	{
	$email = test_input($_POST['email']);
	$pword = test_input($_POST['pword']);	
		if(!preg_match("/^[0-9 a-z A-Z]*$/",$pword))
		{
			$pworderr="Enter the correct password";
		}
		if ($emailerr=="" && $pworderr=="") 
		{
			include "insert.php";	
		}
	}	
}	
?>
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
			<button type="submit" name="submit">Add</td>
		
		</form>
	</tr>
</table><br>
<a href="list.php">Cancel</a>
</body>
</html>