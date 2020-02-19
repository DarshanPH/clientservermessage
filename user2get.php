<?php
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Hey</title>
</head>
<body>


        <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="">Send It</a>
<form method="POST">
<input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Delete All" name="delete"></form>
</nav>


<form action="user2.php" method="POST">
<div class="card text-center">
  <div class="card-header">
    My Smart Client Server Message Application
  </div>
  <div class="card-body">
    <h5 class="card-title">Enter The Message Below</h5>
    <p class="card-text"></p><input type="text" name="message" value="" required placeholder="Enter Your Message">
    <input type="submit" name="send" value="Send" class="btn btn-success"></a>
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</form>



<center>

<?php
if($_POST['send'])
{
 $name = "Admin:";
$message = $_POST['message'];
	if($name!="" && $message!="")
	{
	$query = "INSERT INTO `users` VALUES ('$name','$message')";
		$data = mysqli_query($conn,$query);
			if($data){
		echo "data inserted";
}
	}
	else
	{
		echo "please enter your message";
	}
}
 
?>

<?php
	include("connection.php");
error_reporting(0);

$query = "SELECT * FROM `users`";
$con = mysqli_query($conn, $query);
$total = mysqli_num_rows($con);



if($total != 0){

	while ($result = mysqli_fetch_assoc($con)) {
		echo "<b>"."<p style='color:green'>".$result['name'].$result['message']."<br/>";
	}
}else{
	echo "no record found";
}

// header("location: user1.php");
?>

<?php
if($_POST['delete'])
{
$delete = $GET['delete'];

$query = "DELETE FROM `users`";
$data = mysqli_query($conn,$query);

if($data){
	echo "All Datas are Deleted";
}else {
	echo "something went wrong";
}
}else{

}
?>
</center>
</body>
</html>

