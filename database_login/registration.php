<!DOCTYPE html>
<html>
 <head>
 <title>Registration From</title>
 </head>
 <body>
 <a href="index.php"><span>Home</span></a> <br />
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$emai = $_POST['email'];

	if($user == "" || $pass == "" || $email="") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='registration.php'>Go back</a>";
	} else {
		 $result=mysqli_query($conn,"SELECT * FROM registration_info WHERE user_name='$user' and password=md5('$pass')");
		 $count=mysqli_num_rows($result);
		 if($count==1){  
			  echo "This UserName and Password already used.<br/> Please use another UserName and Password <br/>";
			  echo "<a href='registration.php'><span>Go Back</span></a><br />";
		}
		else { 
             	mysqli_query($conn,"INSERT INTO registration_info(user_name,password,email) VALUES('$user', md5('$pass'),'$emai')")
			    or die("Could not execute the insert query.");
			
				echo "<hr><h4>Registration successfully done. Click Home for login Now</h4>";
				echo "<br/><hr>";
			  
		    }
		}
		
}
else{ 
 ?>  <form action="" method="post">
	   <table align="center" bgcolor="#CCCCCC">
	       <tr>
		      <td>Registration:</td>
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
		      <td>Email:</td>
			  <td><input type="text" name="email" placeholder="Enter User Email"></td>
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