<?php

$con = mysqli_connect('localhost', 'root', '','db_seller');

$Username = $_POST['fname'];
$Email = $_POST['femail'];
$ShopId = $_POST['fcid'];
$ShopPin = $_POST['fpin'];
$Price = $_POST['fprice'];
$tdname=$_POST['tdname'];
$Estper=$_POST['dcom'];
$dist=$_POST['fdist'];
$ndrive=$_POST['ndrive'];

$sql = "INSERT INTO `details` (`Username`, `Email`, `ShopId`,`ShopPin`,`Price`,`tendername`,`Estper`,`dist`,`ndrive`) VALUES ('$Username','$Email', '$ShopId','$ShopPin','$Price','$tdname','$Estper','$dist','$ndrive')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo ".";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 style="margin-left:350px; margin-top:250px;">Your Application has been Submitted succesfully<h1>
		<h3 style="margin-left:550px;">To back go to home page&nbsp;&nbsp;<a href="index.php">Click Here</a></h3>
</body>
</html>