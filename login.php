<?php 
session_start();
echo 'connection'.$_SESSION['email'];
echo '<br><a href="index.php?action=logout">Logout</a>';
 ?>	