<?php
include_once 'dbconnection.php';
	if(isset($_GET['delid']))
{
$rowid=intval($_GET['delid']);
$query=mysqli_query($con,"delete from phonebook where ID='$rowid'");
if($query){
echo "<script>alert('Record successfully deleted');</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AddPhoneNumber</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<div style="height: 600px;width:800px;outline: 3px solid grey;margin-left: 250px; background-color: #DFEBED">
		<div style="text-align: center;background-color: #0E9FB4;height: 80px;">
			<h1>RM-PHONEBOOK</h1>
		</div>
			<div style="text-align: center ">

				<form action="" method="POST">
					<input type="text" name="search" style="height:40px;width: 450px;margin-top: 30px;" placeholder="SearchBar" id="myInput">
					<button type="submit" onCLick="myFunction()"><i class="fa fa-search" style="font-size: 20px;"></i></button><br><br><br>
				</form>
			</div>
			<div>
				<form role="form" method="post" action="">
					<?php
					$sql="SELECT * FROM phonebook";
					$result=mysqli_query($con,$sql);
					if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_assoc($result)){

					?>
      			<div class="dropdown" style="margin-left: 150px;">
      				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="height:40px;width: 450px;" id="srch"><?php echo $row['name'];?>
      			<i class="fa fa-caret-down" style="margin-left: 300px;">
				</i></button><br><br>
		<div class="dropdown-menu">
				<ul class="list-group">
					<ul class="list-group-item">
					<div style="width: 420px;">
						<b id='abc'><?php echo $row['name'];?></b><br>
						<b><p><?php echo $row['DOB'];?></b>
						<button style="margin-left: 200px;"type="button" class="btn btn-info btn-sm">
							<a  style="color:white;text-decoration: none" href="EditPhoneNumber.php?editid=<?php echo $row['ID'];?>">Edit</a></button>
						<button type="button" class="btn btn-danger btn-sm"><a   style="color:white;text-decoration: none" href="HomePage.php?delid=<?php echo $row['ID'];?>">Remove</a></button></p><br>
						<b><i class="fa fa-envelope-square" style="font-size: 20px;"></i><?php echo $row['Email'];?></b><i></i><br><br>
						<b><i class="fa fa-envelope-square" style="font-size: 20px;"></i><?php echo $row['Email2'];?></b><i></i><br><br>
						<b><i class="fa fa-phone" style="font-size: 20px;"></i><?php echo $row['MobileNumber'];?></b>
						<b><i class="fa fa-phone" style="font-size: 20px;"></i><?php echo $row['MobileNumber2'];?></b>
					<div>
				</ul><br>
				</ul>
			</div></div>
				<?php }}
				mysqli_close($con);?>
			</form>
		</div>
		<div style="position: absolute;left: 880px;top: 550px;">
			<a href="addPhoneNumber.php"><button><b>ADD</b><i class="fa fa-plus-circle" style="margin-left: 20px; color: #0E9FB4;font-size: 30px;"></i></button></a>
		</div>
	</div>
</body>
</html>
