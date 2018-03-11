 <?php
		
   
            if(isset($_POST['submit']))
            {
				 $uname=$_POST['uname'];
                 $pass=$_POST['pass'];
				 $fileT = file_get_contents("teacher.txt");
				 $fileS = file_get_contents("student.txt");
				   if(strstr($fileT, "$uname,$pass"))
                   {
					    session_start();
                        $_SESSION['uname']=$uname;
			            $_SESSION['pass']=$pass;
                       header("Location: teacher.php");
                       exit();
                           
                   }
				   else if(strstr($fileS, "$uname,$pass"))
				   {
					    session_start();
                        $_SESSION['uname']=$uname;
			            $_SESSION['pass']=$pass;
                       header("Location: student.php");
                       exit();
				   }
		      
				   else
				   {
					  
					  echo "Sorry! You Insert an Invalid Name & Email. Please Use a Valid name & email and Try Again.<br/>";
                      echo '<a href ="index.php">Back to Login page.</a>';
				   }
                        
           }
           
				  

?>

