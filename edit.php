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
			include "update.php";	

		}
	}	
}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<center><h3>EDIT</h3></center>
</head>
<body>
<?php 
	$id=$_GET['id'];
	session_start();
	$_SESSION['id']=$id;
	require "db_connection.php";
	$sql="SELECT * FROM cont_master WHERE id=$id";
	if($result=mysqli_query($conn,$sql))
	{
		while ($row=mysqli_fetch_row($result)) 
		{
			$firstname=$row[1];
			$lastname=$row[2];
			$nickname=$row[3];
			$gender=$row[4];
			$mobile=$row[5];
			$phone=$row[6];
			$email=$row[7];
			$company_name=$row[8];
			$designation=$row[9];
			$address1=$row[10];
			$address2=$row[11];
			$city=$row[12];
			$pincode=$row[13];
			$website=$row[14];
			$com_address=$row[15];
			$pword=$row[16];
			
		}
		mysqli_free_result($result);
	}
	mysqli_close($conn);
	?>
<table style="width:100%" >
	<tr><form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		
		<td>
			<h2>personal info</h2>
				<label>First name:</label>
				<input type="text" name="firstname" value="<?=  $firstname ?>" required> <br>
				<label>Last name:</label>
				<input type="text" name="lastname" value="<?= $lastname ?>" required> <br>
				<label>Nick name:</label>
				<input type="text" name="nickname" value="<?= $nickname ?>" required> <br>
				<label>Gender:</label><br>
				<input type="radio" name="gender" value="<?=  $gender ?>" required> male<br>
				<input type="radio" name="gender" value="<?=  $gender ?>" required> female<br>
				<label>Mobile number:</label>
				<input type="text" name="mobile" value="<?= $mobile ?>" required> <br>
				<label>Phone number:</label>
				<input type="text" name="phone" value="<?=  $phone ?>" required> <br>
				<label>Email:</label>
				<input type="text" name="email" value="<?= $email ?>" required> <br>	
		</td>
		<td>
			<h2>company info</h2>
				<label>Company name:</label>
				<input type="text" name="company_name" value="<?=  $company_name ?>" required> <br>
				<label>Destignation:</label>
				<input type="text" name="designation" value="<?= $designation ?>" required> <br>
				<label>Address 1:</label>
				<input type="text" name="address1" value="<?= $address1 ?>" required> <br>
				<label>Address 2:</label>
				<input type="text" name="address2" value="<?=  $address2 ?>" required> <br>
				<label>city:</label>
				<input type="text" name="city" value="<?= $city ?>" required> <br>
				<label>Pincode:</label>
				<input type="text" name="pincode" value="<?= $pincode ?>" required> <br>
				<label>Website:</label>
				<input type="text" name="website" value="<?=  $website ?>" required> <br>
				<label>Communication Address:</label>
				<input type="text" name="com_address" value="<?= $com_address ?>" required> <br>
		</td>
		<td><label>Enter your password:</label>
			<input type="password" name="pword" required> <br>
			<button type="submit" name="submit">update</td>
		
		</form>
	</tr>
</table>
</body>
</html>