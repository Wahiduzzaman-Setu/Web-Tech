<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


 <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
	   <title>Student</title>
	</head>
	<body>
	<h1 align="center">Student</h1>
	<hr/>
	<form method="get" action="logout.php">
       <button type="submit">Logout</button>    
    </form><br/><br/>
<?php	
       session_start(); 
	   echo "Welcome ".$_SESSION['uname']; 
      echo"<hr/><br/>";
	  echo $_SESSION['uname'];
      echo " You Have a Quiz  !!!<br/>";
	  echo "It's a Multiple type Questions.<br/>";
	  echo"Each Question 1 Point..<br/>";
	  echo"Best Of Luck..<br/>";
?>
    <br/><form>
        <input type="button" value="Start quiz now" onclick="window.location.href='question.php'" />
    </form>	
	
	</body>
</html>