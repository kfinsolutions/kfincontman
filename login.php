<?php 
session_start();
echo 'connection'.$_SEESION['email'];
echo '<br><a href="index.php?action=logout">Logout</a>';
 ?>	