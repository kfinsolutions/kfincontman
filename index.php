<!DOCTYPE html>
<?php
session_start();
if (isset($_POST['login'])) {
	include "include/db_connection.php";
	$email=$_POST['email'];
	$password=$_POST['password'];
    $result=mysqli_query($conn,'SELECT * from cont_master where email="'.$email.'" and pword="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$login_status=1;
		$_SESSION['login']=$login_status;
		$_SESSION['email']=$email;
		header('Location:list.php');		
<<<<<<< HEAD
}
else
{
	echo "account is INVALID";
}
=======
}
else
{
	echo "account is INVALID";
}
>>>>>>> ganesh

}
if (isset($_GET['action'])) {
	if($_GET['action']=='logout'){
		unset($_SESSION['email']);
		unset($_SESSION['login']);
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
<<<<<<< HEAD
<<<<<<< HEAD
</html>
=======
</html>
<?endif?>
</html>
<a href="forgot.php">forgot_password</a>
>>>>>>> ganesh
=======
</html>
<?endif?>
=======
</html>
>>>>>>> 83d01d43c09a3c00915d5dea7a7a23b703b4828a
>>>>>>> master
