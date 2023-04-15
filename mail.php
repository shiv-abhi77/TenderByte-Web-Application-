<?php
include('smtp/PHPMailerAutoload.php');

$con=mysqli_connect('localhost','root','','dashbip');

if($con->connect_error) {
	die("Connection failed: ".$con->connect_error);
}
date_default_timezone_set('Asia/Kolkata');
$d=date('Y-m-d');
$q="select * from dashdet where DATE_FORMAT(ldate,'%m-%d')=DATE_FORMAT('$d','%m-%d')";
$rs = mysqli_query($con,$q);
while($row = mysqli_fetch_assoc($rs)){
$y=$row["gmail"];
}
$html='We have selected the best option for you. You can check on your dashboard.';
echo smtp_mailer($y,'Best Option Selected',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "tenderbyte.puzzle@gmail.com";
	$mail->Password = "zufidvdwryhjneqh";
	$mail->SetFrom("tenderbyte.puzzle@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;

	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>