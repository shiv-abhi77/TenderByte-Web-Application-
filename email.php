<?php

$con = mysqli_connect('localhost', 'root', '','db_connect');

$Username = $_POST['fname'];
$Email = $_POST['femail'];
$Password = $_POST['fpass'];
// session_start();
// $_SESSION['user']=$Username;
$sql = "INSERT INTO `login` (`Username`, `Email`, `Password`) VALUES ('$Username','$Email', '$Password')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	header('Location: dashb.php');  //here change dashb.php to login.php
}
?>
