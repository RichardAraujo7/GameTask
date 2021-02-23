<html>

<body>

<?php
     /* Insira aqui a pasta que deseja salvar o arquivo. Ex: imagens */
  
     $uploaddir = 'imagens/';
  
     $uploadfile = ="imagens/".$_SESSION['email'].".jpg";
  
     if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
  
     echo "Arquivo Enviado";}
  
     else {
         echo "Houve um problema no upload do arquivo."
             ;}
  
?>

</body>

</html>


