<?php

$con = mysqli_connect('localhost', 'root', '','db_connect');

$Email = $_POST['femail'];
$Password = $_POST['fpass'];

$sql = "SELECT * FROM `login` WHERE `Email`='$Email' AND `Password`='$Password'";

$rs = mysqli_query($con, $sql);

if($data = mysqli_fetch_array($rs, MYSQLI_ASSOC)) 
{
    header('Location: Profile.html');
}
else
{
    header('Location: incorrect.html');
}
?>