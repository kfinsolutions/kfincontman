<!doctype html>
<html>
<head>
	<title>view</title>
</head>
<body>
<table style="width:100%">	
<?php
require "db_connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM cont_master where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
	echo "<td>";
	echo "<h1>All personal info</h1>";
	echo "<br>";
		echo "<tr>";
		echo "<td>first_name</td>";
		echo "<td>".$row['firstname']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>last_name</td>";
		echo "<td>".$row['lastname']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>nickname</td>";
		echo "<td>".$row['nickname']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>gender</td>";
		echo "<td>".$row['gender']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>mobile</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>phone</td>";
		echo "<td>".$row['phone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>email</td>";
		echo "<td>".$row['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>address1</td>";
		echo "<td>".$row['address1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>address2</td>";
		echo "<td>".$row['address2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>city</td>";
		echo "<td>".$row['city']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>pincode</td>";
		echo "<td>".$row['pincode']."</td>";
		echo "</tr>";
		echo "</td>";
		echo "<td>";
		echo "<h1>Company info</h1>";
	echo "<tr>";
		echo "<td>company name</td>";
		echo "<td>".$row['company name']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>designation</td>";
		echo "<td>".$row['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>com_address</td>";
		echo "<td>".$row['com_address']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>website</td>";
		echo "<td>".$row['website']."</td>";
		echo "</tr>";
		echo "</tr>";
mysqli_close($conn);
?>
		
	</table>
</body>
</html>