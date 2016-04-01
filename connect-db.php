<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'Databaas';

$mysqli = new mysqli($server, $user, $pass, $db);

//
//
//
// 						Niet online zetten 
//
//
//
mysqli_report(MYSQLI_REPORT_ERROR);

?>