<?php

session_start(); // Digunakan untuk memulai session

date_default_timezone_set("Asia/Makassar");
//echo date("Y/m/d h:i:a");

$host = "localhost"; // nama host anda
$user = "tppkkbi2_udb"; // usernames dari host anda
$pass = "fdaSFSFSfdf452fdaf"; //password dari host anda
$db   = "tppkkbi2_db"; // nama database yang anda miliki

try {
	$conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}


$sqli = $conn->prepare("SELECT * FROM `m_post` WHERE stat = 7");
$sqli->execute();
$datai = array();
while($datar = $sqli->fetch()) {
    $datai[] = $datar;
}


?>
