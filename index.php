<!DOCTYPE html>
<?php
session_start();
if (isset($_POST['login'])) {
	$conn=mysqli_connect('localhost','cont_user','KSWhJycmWzQHCjBW','kfincontman');
	$email=$_POST['email'];
	$password=$_POST['password'];
    $result=mysqli_query($conn,'SELECT * from cont_master where email="'.$email.'" and pword="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$_SESSION['email']=$email;
		header('Location:login.php');
	}
else
	echo "account's INVALID";
}
if (isset($_GET['action'])) {
	if($_GET['action']=='logout'){

unset($_SESSION['email']);
}
	
}
?>
<html>
<body>
<form method="post" action ="index.php">
email:<br/>
<input type="email" name="email"><br/>
password:<br/>
<input type="password" name="password"><br/>
<input type="submit" name="login" value="submit">
</form>
</body>
</html>