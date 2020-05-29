<?php
include_once 'dbconnection.php';
if(isset($_GET['editid']))
{
$rowid=intval($_GET['editid']);
	$Updatename=$_POST['name1'];
	$Updateemail=$_POST['email1'];
	$Updatemobile=$_POST['mobile1'];
	$UpdateDOB=$_POST['DOB1'];
	$sql="UPDATE phonebook SET name='$Updatename' , Email='$Updateemail', MobileNumber='$Updatemobile' , DOB='$UpdateDOB' WHERE ID='$rowid'";
	if(mysqli_query($con,$sql)){
		echo "<script>alert('Phone Number Updated');</script>";
	} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
mysqli_close($con);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EditPhoneNumber</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div style="height: 600px;width:800px;outline: 3px solid grey;margin-left: 250px; background-color: #DFEBED" >
		<div style="text-align: center;background-color: #0E9FB4;height: 80px;">
			<h1>RM-PHONEBOOK</h1>
		</div>
		<form role="form" method="post" action="">
		
		<div style="background-color: white;height: 450px;width: 500px;margin-left: 150px;margin-top: 40px;">
			<h3><i class="fa fa-arrow-left"></i> Edit contact</h3>
			<div style="margin-left: 50px;">
				<h3>Name</h3>
				<input type="text" name="name1" placeholder="Name" style="height: 35px;width:400px; ">
				<h3>Email</h3>
				<input type="text" name="email1" style="height: 35px;width:350px;" > <br><br>
				<h3>Mobile Number</h3>
				<input type="text" name="mobile1" style="height: 35px;width:350px;">
				<h3>DOB</h3>
				<input type="date" name="DOB1" style="height: 35px;width:400px;" >
				<button style="background-color: #6AC578;margin-left: 350px;color:white; padding: 5px 25px;border-radius: 20px;" name="submit" type="submit" href="HomePage.php">Update</button>
			</div>
		</div>
	</form>
	</div>
</body>
</html>