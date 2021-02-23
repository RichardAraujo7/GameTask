<?php
 session_start();
	if($_SESSION['perfil']=="p1"){
			$nome=$_SESSION['nome'];
			$email=$_SESSION['email'] ;
			$nick=$_SESSION['nick'] ;
			$data=$_SESSION['data'] ;
			$cidade=$_SESSION['cidade'] ;
			$estado=$_SESSION['estado'] ;
			$likes=$_SESSION['likes'] ;
			$desc=$_SESSION['descricao'] ;
			$cod=$_SESSION['cod'] ;
		}
		if($_SESSION['perfil']=="p2")
		{
			if(isset($_SESSION['nomeDono'])){
			$nome=$_SESSION['nomeDono'];
			$email=$_SESSION['emailTime'] ;
			$nick=$_SESSION['nomeTime'] ;
			$likes=	$_SESSION['likesTime'] ;
			$desc=	"" ;
			$cod=$_SESSION['codTime'] ;}
			else{
				$nome=$_SESSION['nomeJogador'];
			$email=$_SESSION['emailJogador'] ;
			$nick=$_SESSION['nickJogador'] ;
			$data=$_SESSION['dataNascJogador'] ;
			$cidade=$_SESSION['cidadeJogador'] ;
			$estado=$_SESSION['estadoJogador'] ;
			$likes=	$_SESSION['likesJogador'] ;
			$desc=	$_SESSION['descJogador'] ;
			$cod=$_SESSION['codJogador'] ;
			}
		}
		?>