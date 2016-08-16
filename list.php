<?php 
session_start();
if($_SESSION['login'] == "1"):
?>
<a href="add.php">ADD<br>
<a href="index.php?action=logout">Logout</a><br>
<table>
	<tr>
		<th>S/no</th>
		<th>firstname</th>
		<th>lastname</th>
		<th>email</th>
	</tr>
<?php
require "include/db_connection.php";
$sql="SELECT * FROM cont_master";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['firstname']."</td>";
		echo "<td>".$row['lastname']."</td>";
		echo "<td>".$row['email']."</td>";
	echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a>&nbsp;
		<a href='view.php?id=".$row['id']."'>view</a></td>";
		echo "</tr>";
}
mysqli_close($conn);
?>	
</table>
<?php
else: 
	header("location:index.php");
endif;
?>