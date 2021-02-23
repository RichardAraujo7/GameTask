<?php
 	require "pgif.php";
	include("conexao.php");
	 
      if(isset($_SESSION['nomeDono'])){
		  if(isset($_SESSION['nomed']))
		  {
			  	$txt= $_POST['comment'];
        $codTime= $_SESSION['cod'];
        $codDestinatario= $cod;
        $data= date('d/m/y');
	
	
      $inserir="INSERT INTO Mensagem(codTimes,DataMsg,txtMsg,codDestinatarioTime)
          Values('$codTime','$data','$txt','$codDestinatario')";
		$executar= sqlsrv_query($conn,$inserir);
		  }
		  else{
		$txt= $_POST['com'];
        $codTime= $_SESSION['cod'];
        $codDestinatario= $cod;
        $data= date('d/m/y');
	
	
      $inserir="INSERT INTO Mensagem(codTimes,DataMsg,txtMsg,codDestinatarioJog)
          Values('$codTime','$data','$txt','$codDestinatario')";
		$executar= sqlsrv_query($conn,$inserir);
		  }
	header("Location: pgperfilms.php");
		
		
		}
		else{
	if(isset($_SESSION['nomed']))
		  {
		$txt= $_POST['com'];
        $codJoga= $_SESSION['cod'];
        $codDestinatario=$cod;
        $data= date('d/m/y');
	
	
      $inserir="INSERT INTO Mensagem(codJoga,DataMsg,txtMsg,codDestinatarioTime)
          Values('$codJoga','$data','$txt','$codDestinatario')";
		$executar= sqlsrv_query($conn,$inserir);
		header("Location: pgperfilms.php");
		  }
		  else{
			  	$txt= $_POST['com'];
        $codJoga= $_SESSION['cod'];
        $codDestinatario=$cod;
        $data= date('d/m/y');
	
	
      $inserir="INSERT INTO Mensagem(codJoga,DataMsg,txtMsg,codDestinatarioJog)
          Values('$codJoga','$data','$txt','$codDestinatario')";
		$executar= sqlsrv_query($conn,$inserir);
		header("Location: pgperfilms.php");
		  }
		}
?>