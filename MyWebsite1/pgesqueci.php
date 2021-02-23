

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="stylecadastro.css" rel="stylesheet" type="text/css">

    <link href="styleprincipal.css" rel="stylesheet" type="text/css">
    <title>Game Task</title>
  </head>
  <body>
    <div class="tudopr">
        
			<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #87D0FF;">
                <div class="container-fluid">
                   <a class="navbar-brand" href="index2.php"> <img src="LogoTCC.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Game Task </a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span></button>
                </div>   
            </nav>                  
      
			
			
			<div class="conteudocd"> <!-- O que foi selecionado na barra opções -->
                <div class="alterinfo">
                    <h3>Esqueci Minha Senha</h3>
                </div>
                <div class="cpalterinfos">
                     <div class="form-group">
                        <label for="email">A Game Task enviará uma nova senha. Para isto, digite seu e-mail:</label>
						  <form action="pgesqueci.php" method="post">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ex: gametask@hotmail.com" required>
                      </div>
						<?php if (isset($_GET['erro'])){
			 echo "<div class='erroPHP'>".$_GET['erro']."</div>";}?>
               
                    <input type="submit" class="btn btn-block" style="background-color:#87D0FF; color: black;" name="OK" value="Enviar">
</form>
                    
                </div>
				
			
            </div>
      </div>
      <?php
	  if(isset($_POST['email'])){
                    include_once("conexao.php");

                 
            
	
         $email=$_POST['email'];
		 echo $email;
	$inserir="insert into esqueciMinhaSenha(email)values('$email')";
			$exec=sqlsrv_query($conn,$inserir);
		header("Location: pgesqueci.php?erro=um email será enviado");
	  die();}
      ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>