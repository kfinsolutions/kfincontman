<?php 
session_start();
if($_SESSION['login'] == "1"):
?>
<?php include "include/process1.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<center><h3>EDIT</h3></center>
</head>
<body>
<?php 
	$id=$_GET['id'];
	$_SESSION['id']=$id;
	require "include/db_connection.php";
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
		mysqli_free_result($result); //acco
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
				<input type="radio" name="gender" value="male" required <?php if($gender=="male" || $gender=="blank"){echo "checked";} ?>> male<br>
				<input type="radio" name="gender" value="female" required <?php if($gender=="female"){echo "checked";} ?>> female<br>
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
				<input type="text" name="address1" id="address1" value="<?= $address1 ?>" required> <br>
				<label>Address 2:</label>
				<input type="text" name="address2" id="address2" value="<?=  $address2 ?>" > <br>
				<label>city:</label>
				<input type="text" name="city" id="city" value="<?= $city ?>" required> <br>
				<label>Pincode:</label>
				<input type="text" name="pincode" id="pincode" value="<?= $pincode ?>" required> <br>
				<label>Website:</label>
				<input type="text" name="website" value="<?=  $website ?>" required> <br>
				<label>Communication Address:</label><br>
				<textArea name="com_address" id="c_address" required><?= $com_address ?></textarea> <br>
				<input type="checkbox" onclick="copyAdd()"> Same as above<br>
		</td>
		<td><label>Enter your password:</label>
			<input type="password" name="pword" required> <br>
			<label>Conform password</label>
			<input type="password" name="pword2" required><br>
			<button type="submit" name="submit">update</td>
		</form>
	</tr>
</table>
<a href="list.php">Back</a>
<script>
	function copyAdd(){
		address1 = document.getElementById("address1").value;
		address2 = document.getElementById("address2").value;
		city = document.getElementById("city").value;
		pincode = document.getElementById("pincode").value;
		com_address = address1+","+address2+","+city+" - "+pincode;
		alert("Are Sure you want to copy the address from above");
		document.getElementById("c_address").value = com_address;
	}
</script>
</body>
</html>
<?php
else: 
	header("location:index.php");
endif;
?>