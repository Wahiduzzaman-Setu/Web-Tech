 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
 <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	   <title>Uinfo</title>
	</head>
	<body>
	<h1 align="center">Result</h1>
	<hr/>
     <form method="get" action="logout.php">
       <button type="submit">Logout</button>    
    </form>
	</body>
</html>
<?php

 if(isset($_POST['submit']))
    {
		$score=0;
		$total=5;
		
		function processQ1($q)
		{	
		        global $score;
				 if('b'==$_POST['q1'] )
				{
                    $score++;					 
				}			
		}
		function processQ2($q)
		{
		       global $score;
				 if('d'==$_POST['q2'])
				{
					 $score++;
				}			
		}
		function processQ3($q)
		{
		       global $score;
				 if('b'==$_POST['q3'])
				{
					 $score++;
				}			
		}
		function processQ4($q)
		{
		       global $score;
				 if('b'==$_POST['q4'])
				{
					 $score++;
				}			
		}
		function processQ5($q)
		{
		       global $score;
				 if('a'==$_POST['q5'])
				{
					 $score++;
				}			
		}
		

		
		processQ1($_POST['q1']);
		processQ2($_POST['q2']);
		processQ3($_POST['q3']);
		processQ4($_POST['q4']);
		processQ5($_POST['q5']);
		
		echo "<h4>Your Score $score Out of $total.</h4>";
		echo '<a href="question.php"/>Try again..????';
		
		
		
		
	}
?>