

<!doctype html>
<html lang="pt-br">
  <head>
     <?php
	session_start();

		
      ?>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="stylecadastro.css" rel="stylesheet" type="text/css">
	 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 

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
                    <h3>Mudança de Senha</h3>
                </div>
                <div class="cpalterinfos">
                    <form action="pgcadastro.php" method="post">
                     <div class="form-group">
                        <label for="cod">Código</label>
                        <input type="text" class="form-control" id="nome" style="width: 30%;" placeholder="Ex: 0123" name="codigo" required>
                      </div>
                         <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" style="width: 40%;"  name="email" required>
                      </div>
                        
                      <div class="form-group">
                        <label for="pwd">Senha</label>
                        <input type="password" class="form-control" id="pwd" name="senha" style="width: 30%;" required>
                      </div>
                        <div class="form-group">
                            <label for="pwd">Confirmar Senha</label>
                            <input type="password" class="form-control" id="conf" style="width: 30%;">
                      </div>
					  <?phpif(isset ($_GET['erro'])){
			 echo "<div class='erroPHP'>".$_GET['erro']."</div>";}?>    
                      <input type="submit" class="btn btn-block" style="background-color:#87D0FF; color: black;" value="Enviar">
                    </form> 
                    
                </div>
				
			
            </div>
      </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<?php
	if(isset($_POST['email'])){//
		include("conexao.php");
		if($senha1==$senha2){
	    $cod= $_POST['codigo'];
	    $email= $_POST['email'];

		$senha1=$_POST['senha'];
        $senha2=$_POST['conf'];
		$select="select * from Jogador where emailJogador='$email'";
		$result= sqlsrv_query($conn,$select);
		$select2="select * from esqueciMinhaSenha where codigo='$cod'";
		$result2= sqlsrv_query($conn,$select2);
		
		if ($row=sqlsrv_fetch_array($result)){
        if(($row2=sqlsrv_fetch_array($result2);){
            $senha1= md5($senha2);
            // provalvemente, terá que frazer uma verificação pra saber se é da tabela time ou jogador
			$update="update Jogador set senhaJogador='$senha1' where emailJogador='$email'";
			$update= sqlsrv_query($conn,udpate);
			header("Location: index2.php?erro=sua senha foi alterada"
			die();
		}
		}
		else{
			$select="select * from Times where emailTime='$email'";
			$result=sqlsrv_query($conn,$select);
			if(sqlsrv_fetch_array($result)){
				$select2="select * from esqueciMinhaSenha where codigo='$cod'";
				$result2= sqlsrv_query($conn,$select2);
				if(sqlsrv_fetch_array($result)){
				$update="update Times set senhaTime='$senha1' where emailTime='$email'";
				$update= sqlsrv_query($conn,udpate);}
				header("Location: index2.php?erro=sua senha foi alterada"
				die();
			}
			else{header("Location: index2.php?erro=dados não encontrados"}
			die();
		}
    }
	else{
		header("Location: index2.php?erro=digite a mesma senha para os dois campos"
		die();
	}
	?>
  </body>
</html>