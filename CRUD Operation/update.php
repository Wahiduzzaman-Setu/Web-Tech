<?php
session_start();
ob_start();
if (!(isset($_SESSION['un']))){
    header("location:index.php");
	}
else {
require_once("config.php");
			if (isset($_POST["submit"])){

			$booking_id = $_POST['booking_id'];
			$tour_detail = $_POST['tour_detail'];
			$operator_name = $_POST['operator_name'];
			$money_in = $_POST['money_in'];
			$money_out = $_POST['money_out'];
			$remarks =$_POST['remarks'];



			//deleting the row from table // actually not deleting it just unlinking from the result
				$result = mysqli_query($conn,"UPDATE info SET tour_detail='$tour_detail',operator_name='$operator_name',money_in='$money_in',money_out='$money_out',remarks='$remarks' WHERE booking_id='$booking_id'");

				//
				//echo "$booking_id";
				
				header("Location:admin.php");
}
}
?>

