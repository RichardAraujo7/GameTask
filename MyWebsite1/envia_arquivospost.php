<html>

<body>

<?php
session_start();
 include("conexao.php");
     /* Insira aqui a pasta que deseja salvar o arquivo. Ex: imagens */
	$uploaddir = 'post/';
  
     $uploadfile ="post/".$_FILES['userfile']['tmp_name'].".jpg";
  
     if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
  
     echo "Arquivo Enviado";
	 $imagem= $_FILES["arquivo"]["tmp_name"];
	 }
  
     else {
         echo "Houve um problema no upload do arquivo."
             ;}
			 
	$cod=$_SESSION['cod'];
	$d=$_SESSION['d'];
    $descricaoPost= $_POST['descricao'];
    $dataP= date('d/m/y');
     //Jogador
	  if($d==true)
	 {
		$inserir="INSERT INTO Post(txtPost, imgPost, dataPost, codJogador,bloqPost)
          Values('$descricaoPost','$imagem','$dataP','$cod','0')";
		$executar= sqlsrv_query($conn,$inserir);
	 }
       //Time
     if($d==false)
	 {
		$inserir="INSERT INTO Post(txtPost, imgPost, dataPost, codTime,bloqPost)
          Values('$descricaoPost','$imagem','$dataP','$cod','0')";
		$executar= sqlsrv_query($conn,$inserir);
	 }
	// header("Location: pgprincipal.php");
				die();
?>

</body>

</html>
