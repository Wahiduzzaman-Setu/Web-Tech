<!DOCTYPE html>
<html>
    <head>
	   <title>sign in</title>
	</head>
	<body>
<a href="registration.php"><span>Register</span></a> <br />
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit'])) {
	$user =$_POST['username'];
	$pass =$_POST['password'];

	if($user == "" || $pass == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='index.php'>Go back</a>";
	} else {
		 $result=mysqli_query($conn,"SELECT * FROM registration_info WHERE user_name='$user' and password=md5('$pass')");
		 $count=mysqli_num_rows($result);
		 if($count==1){  
			header("location:info.php");
		}
		else { 
              echo "invalid UserName or Password!!<br/>";
			  echo "<a href='index.php'><span>Go Back</span></a> <br />";
			  
		    }
		}
}
else{ 
 ?>  <form action="" method="post">
	   <table align="center" bgcolor="#CCCCCC">
	       <tr>
		      <td>Login:</td>
			  <td></td>
		  </tr>
	      <tr>
		      <td>Username:</td>
			  <td><input type="text" name="username" placeholder="Enter User Name"></td>
		  </tr>
		   <tr>
		      <td>Password:</td>
			  <td><input type="password" name="password" placeholder="Enter User Password"></td>
		  </tr>
		  <tr>
		      <td></td>
			  <td><input type="submit" name="submit"></td>
			  <td></td>		  
		  </tr>	
	   </table>
	 </form>
<?php
}
$conn->close();
?>
</body>
</html>