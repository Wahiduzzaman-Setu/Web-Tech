<?php
   
      
   if(isset($_POST['submit']))
   {
	   $uname=$_POST['uname'];
	   $pass=$_POST['pass'];
	   $rpass=$_POST['rpass'];
	   $email=$_POST['email'];
	   $phone=$_POST['phone'];
	   $fname=$_POST['fname'];
	   $Occupation=$_POST['Occupation'];
	   $fileT = file_get_contents("teacher.txt");
	   $fileS = file_get_contents("student.txt");
       $string = "$uname,$pass,$rpass,$email,$phone,$fname,$Occupation ";
	   
	   if($_POST['Occupation']=="Teacher")
	   {
		   if(!strstr($fileT, "$string"))
         {
               $myFile = fopen("teacher.txt", 'a+') or die("can't open file");
               $stringData = "$uname,$pass,$rpass,$email,$phone,$fname,$Occupation\n";
               fwrite($myFile, $stringData);
               echo "your Registration Information Successfully Inserted.";
			    session_start();
		     $_SESSION['uname']=$uname;
			 $_SESSION['pass']=$pass;
			 $_SESSION['rpass']=$rpass;
			 $_SESSION['email']=$email;
			 $_SESSION['phone']=$phone;
			 $_SESSION['fname']=$fname;
			 $_SESSION['Occupation']=$Occupation;
			   header("Location:index.php");
               fclose($myFile);
         }
         else
         {
             echo "Sorry the name: $uname and email: $email is already in Registered. please use different name & email.<br/>";
			 echo '<a href ="register.php">Back to Login page.</a>';
         }
	   }
	   else
	   {
		    if(!strstr($fileS, "$string"))
         {
               $myFile = fopen("student.txt", 'a+') or die("can't open file");
               $stringData = "$uname,$pass,$rpass,$email,$phone,$fname,$Occupation\n";
               fwrite($myFile, $stringData);
               echo "your Registration Information Successfully Inserted.";
			    session_start();
		     $_SESSION['uname']=$uname;
			 $_SESSION['pass']=$pass;
			 $_SESSION['rpass']=$rpass;
			 $_SESSION['email']=$email;
			 $_SESSION['phone']=$phone;
			 $_SESSION['fname']=$fname;
			 $_SESSION['Occupation']=$Occupation;
			   header("Location:index.php");
               fclose($myFile);
         }
         else
         {
             echo "Sorry the name: $uname and email: $email is already in Registered. please use different name & email.<br/>";
			 echo '<a href ="register.php">Back to Login page.</a>';
         }
	   }
	    
   
   
	}

?>