<?php
session_start();
ob_start();
$id=$_GET['id'];

require_once("config.php");
$sql = "SELECT * FROM info WHERE id='$id'";  
$rs_result = mysqli_query($conn,$sql);
$res=mysqli_fetch_array($rs_result);

$booking_id = $res['booking_id'];
$tour_detail = $res['tour_detail'];
$operator_name = $res['operator_name'];
$money_in = $res['money_in'];
$money_out = $res['money_out'];
$remarks = $res['remarks'];



if (!(isset($_SESSION['un']))){
header("location:index.php");
}
else {
?>
<html>
<head>
	<title>Add Tracking info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  	<script src="js/bootstrap.min.js"></script>
</head>

<body class="container">
<br>
	<a href="admin.php"><span class="btn btn-primary">Dashboard</span></a>
	<a href="search.php?search="><span class="btn btn-success">Search</span></a>
	<a href="logout.php"><span class="btn btn-warning">Logout</span></a>
	<br/><br/>
    <center><h1>Add Tracking Information</h1></center><hr>

	<form action="update.php" method="post" name="form1" enctype="multipart/form-data">
	     <div class="input-group">
      		<span class="input-group-addon">Tour Detail</span>
      		<input id="tour_detail" type="text" class="form-control" name="booking_id" placeholder="Tour Detail" value="<?php echo   $booking_id?>" readonly>
    	</div>
		
        <div class="input-group">
      		<span class="input-group-addon">Tour Detail</span>
      		<input id="tour_detail" type="text" class="form-control" name="tour_detail" placeholder="Tour Detail" value="<?php echo   $tour_detail?>">
    	</div>
        	<div class="input-group">
      		<span class="input-group-addon">Operator Name</span>
      		<input id="operator_name" type="text" class="form-control" name="operator_name" placeholder="Operator Name" value="<?php echo $operator_name?>">
    	</div>
        <div class="input-group">
      		<span class="input-group-addon">Money IN</span>
      		<input id="money_in" type="double" class="form-control" name="money_in" placeholder="Amount Get from the Tour" value="<?php echo $money_in?>" required>
    	</div>
         <div class="input-group">
      		<span class="input-group-addon">Money OUT</span>
      		<input id="money_out" type="double" class="form-control" name="money_out" placeholder="Amount given to Tour Operator" required value="<?php echo $money_out?>">
    	</div>
        <div class="input-group">
      		<span class="input-group-addon">File Upload</span>
      		<input id="file_link" type="file" class="form-control" name="file_link" placeholder="Click Here to upload the pdf/png/jpeg/jpg file" value="<?php echo$tour_detail?>">
    	</div>
         <div class="input-group">
      		<span class="input-group-addon">Remarks</span>
      		<input id="remarks" type="text" class="form-control" name="remarks" placeholder="Remarks" value="<?php echo $remarks?>">
    	</div>
        
        <input type="submit" name="submit" value="Update" class="btn btn-success btn-block btn-lg">
        
        <input type="reset" name="reset" value="Clear Information" class="btn btn-danger  btn-block btn-lg">
        
        
        
        
      
	</form>
    <?php
    }
    ?>
</body>
</html>

