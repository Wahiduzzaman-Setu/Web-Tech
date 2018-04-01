<!DOCTYPE html>
<html>
    <head>
	   <title>Main Page</title>
	</head>
	<body>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>


<center><h1>Registration Information</h1></center><hr>

	   <table align="center" bgcolor="#CCCCCC">
	       <tr>
		      <td colspan="4"></td>
		  </tr>
	      <tr>
			<th>ID</th>
			<th>User Name</th>
			<th>User Password</th>
			<th>Email</th>
			
         </tr>
		<?php
		 $sql = "SELECT * FROM registration_info";  
		 $rs_result = mysqli_query($conn,$sql);
		  
			   while($res=mysqli_fetch_array($rs_result)) {
				echo "<tr>";
				echo "<td>".$res['id']."</td>";
				echo "<td>".$res['user_name']."</td>";
				echo "<td>".$res['password']."</td>";
				echo "<td>".$res['email']."</td>";
				echo "</tr>";
			   }
		 ?>
	   </table>

<?php
$conn->close();
?>
</body>
</html>