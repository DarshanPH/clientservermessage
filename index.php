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
<form action="" method="POST">
	<input type="text" name="message" value="Rajesh" required>
	<input type="submit" name="send" value="Send">
</form>


<?php
$name = "darshan";
$message = $_POST['message'];


$data = $query = "INSERT INTO `USERS` VALUES ('$name','$message')";
mysqli_query($conn,$query);

if($data){
echo "data inserted";
}
?>


	<?php
	
$query = "SELECT * FROM `users`";
$con = mysqli_query($conn, $query);
$total = mysqli_num_rows($con);



if($total != 0){

	while ($result = mysqli_fetch_assoc($con)) {
		echo $name.":".$result['message']."<br/>";
	}
}else{
	echo "no record found";
}



?>

</body>
</html>