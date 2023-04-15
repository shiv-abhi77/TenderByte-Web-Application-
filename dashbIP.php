<?php

$con = mysqli_connect('localhost', 'root', '','dashbip');

$tendername = $_POST['tname'];
$collegename = $_POST['cname'];
$ldate = $_POST['ldate'];
$lname = $_POST['userfile'];

$sql = "INSERT INTO `dashdet` (`tendername`, `collegename`, `ldate`,`tdetails`) VALUES ('$tendername','$collegename', '$ldate','$lname')";

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
<!-- <input type='text'  name='cisname'  value=\"".$collegename."\" disabled>"; -->
<center>
	<h1 style="margin-top:250px;">Your tender was created succesfully<h1>
	<h3>To back go to Dashboard <a href="dashb.php">Click here</a></h3>
</center>
	

</body>
</html>