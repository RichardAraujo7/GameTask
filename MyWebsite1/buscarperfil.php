<?php
session_start();
include_once("conexao.php");
$nick=$_POST['nick'];
$select=" select * from Jogador where  nickJogador='$nick'";
$return=sqlsrv_query($conn,$select);
echo sqlsrv_has_rows($return);
if(sqlsrv_has_rows($return) !=1){
	echo "ola";
	$select=" select * from Times where  nomeTime='$nick'";
	$return=sqlsrv_query($conn,$select);
	if(sqlsrv_has_rows($return) !=1){
	header("Location: pgprincipal.php?erro=perfil não encontrado");
		die();}
	else 
	{
	
	$array= sqlsrv_fetch_array($return);
	$_SESSION['p2'] = $array;
	$_SESSION['perfil'] = "p2";
$_SESSION['codTime']= $array['codTime'] ;
$_SESSION['nomeTime']= $array['nomeTime'] ;
$_SESSION['emailTime']= $array['emailTime'] ;
$_SESSION['likesTime']= $array['likesTime'] ;
$_SESSION['likesTime']= $array['likesTime'] ;
$_SESSION['FotodePerfilT']= $array['FotodePerfilT'] ;
$_SESSION['FotodeCapaT']= $array[' FotodeCapaT'] ;
$_SESSION['nomeDono']= $array['nomeDono'] ;

	header("Location: pgperfil.php");
	die();

	}
}
else
{
	$array= sqlsrv_fetch_array($return);
			$_SESSION['nomeJogador']=$array['nomeJogador'];
			$_SESSION['emailJogador'] =$array['emailJogador'];
			$_SESSION['nickJogador'] =$array['nickJogador'];
			$_SESSION['dataNascJogador'] =$array['dataNascJogador'];
			$_SESSION['cidadeJogador'] =$array['cidadeJogador'];
			$_SESSION['estadoJogador'] =$array['estadoJogador'];
			$_SESSION['likesJogador'] =$array['likesJogador'];
			$_SESSION['descJogador'] =$array['descJogador'];
			$_SESSION['codJogador'] =$array['codJogador'];
		$_SESSION['perfil'] = "p2";
	header("Location: pgperfil.php");
	(die);
}
?>