<?php
	require"pgif.php";
	include_once("conexao.php");
$cod=$_SESSION['cod'];
$d=$_SESSION['d'];
$post=$_POST['p'];

		
if($post=="2" ){
    // deverá ter uma verificação se o post é do jogador ou do time devido ao codigo
   
    
    $descricaoPost= $_POST['desc'];
    $dataP= date('d/m/y');
    //Jogador
	 if($d=="Jogador")
	 {
		$inserir="INSERT INTO Post(txtPost, dataPost, codJogador,bloqPost)
         Values('$descricaoPost','$dataP','$cod,'0';')";
		$executar= sqlsrv_query($conn,$inserir);
	 }
       //Time
    if($d=="Times")
	{
		$inserir="INSERT INTO Post(txtPost, dataPost, codTime,bloqPost)
          Values('$descricaoPost','$dataP','$cod,'0'')";
    $executar= sqlsrv_query($conn,$inserir);
	}
		header("Location: pgprincipal.php");
}
function img(){
    // deverá ter uma verificação se o post é do jogador ou do time devido ao codigo
   
    $descricaoPost= $_POST['desc'];
    $imgPost= $_POST['arquivo'];
    $dataP= date('d/m/y');
     //Jogador
	  if($d=="Jogador")
	 {
    $inserir="INSERT INTO Post(txtPost, imgPost, dataPost, codJogador)
          Values('$descricaoPost','$dataP','$cod;')";
    $executar= sqlsrv_query($conn,$inserir);
	 }
       //Time
     if($d=="Times")
	 {
    $inserir="INSERT INTO Post(txtPost, imgPost, dataPost, codTime)
          Values('$descricaoPost','$imgPost','$dataP','$cod;')";
    $executar= sqlsrv_query($conn,$inserir);
	header("Location: pgprincipal.php");
	 }
}
function video(){
    // deverá ter uma verificação se o post é do jogador ou do time devido ao codigo
   
    $descricaoPost= $_POST['desc'];
    $videoPost= "https://www.youtube.com/embed/". substr( $_POST['vd'], -11);  
    $dataP= date('d/m/y');
     //Jogador
	  if($d=="Jogador")
	 {
		$inserir="INSERT INTO Post(txtPost, vidPost, dataPost, codJogador)
          Values('$descricaoPost','$dataP','$cod;')";
		$executar= sqlsrv_query($conn,$inserir);
	 }
       //Time
     if($d=="Times")
	 {
		$inserir="INSERT INTO Post(txtPost, vidPost, dataPost, codTime)
          Values('$descricaoPost','$videoPost','$dataP','$cod;')";
		$executar= sqlsrv_query($conn,$inserir);
		header("Location: pgprincipal.php");	
	 }
}
?>