<?php

session_start();

if (isset($_POST['login'])) {
	include "db_connection.php";
	$email=$_POST['email'];
	$password=$_POST['password'];
    $result=mysqli_query($conn,'SELECT * from cont_master where email="'.$email.'" and pword="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$login_status=1;
		$_SESSION['login']=$login_status;
		$_SESSION['email']=$email;
		header('Location:list.php');		
}
else
{
	echo "account is INVALID";
}

}
if (isset($_GET['action'])) {
	if($_GET['action']=='logout'){
		unset($_SESSION['email']);
		unset($_SESSION['login']);
	}
}
?>