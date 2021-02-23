<?php
session_start();
include ();
$login = $_POST['email'];
$senha = $_POST['senha'];
$consulta1="SELECT * FROM `Jogador` WHERE `emailJogador` = '$login' AND `senhaJogador`= '$senha'";
$consulta2="SELECT * FROM `Times` WHERE `emailTime` = '$login' AND `senhaTime`= '$senha'";

$result1=sqlsrv_query($conn,$consulta1);
$result2=sqlsrv_query($conn,$consulta2);
if 
?>