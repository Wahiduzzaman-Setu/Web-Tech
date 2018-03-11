<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


 <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
	   <title>teacher</title>
	</head>
	<body>
	<h1 align="center">Teacher</h1>
	<hr/>
	<form method="get" action="logout.php">
       <button type="submit">Logout</button>    
    </form><br/><br/>
	
 <?php	
       session_start(); 
	   echo "Welcome ".$_SESSION['uname']; 
?>	
	<hr/>
	<form method="get" action="student.txt">
       <button type="submit">Student Information</button>    
    </form><br/><br/>
	<form>
        <input type="button" value="Questions For quiz" onclick="window.location.href='question.php'" />
    </form>
	</body>
</html>