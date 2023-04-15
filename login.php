<?php
session_start();
$con = mysqli_connect('localhost', 'root', '','db_connect');

$Email = $_POST['femail'];
$Password = $_POST['fpass'];
$_SESSION['cisname']=$Email;
$sql = "SELECT * FROM `login` WHERE `Username`='$Email' AND `Password`='$Password'";

$rs = mysqli_query($con, $sql);

if($data = mysqli_fetch_array($rs, MYSQLI_ASSOC))   
{     
    header('Location: dashb.php');
}
else
{
    header('Location: incorrect.html');
}
?>