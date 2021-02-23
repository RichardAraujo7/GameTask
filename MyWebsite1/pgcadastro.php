

<!doctype html>
<html lang="pt-br">
  <head>
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
                    <h3>Cadastro - Jogador</h3>
                </div>
                <div class="cpalterinfos">
                    <form action="pgcadastro.php" method="post">
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Ex: gametask@hotmail.com" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="pwd">Senha</label>
                        <input type="password" class="form-control" id="pwd" name="senha" required>
                      </div>
                        <div class="form-group">
                            <label for="pwd">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confirmarpwd" name="conf" required>
                      </div>
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" style="width: 30%;" placeholder="Ex: Otavio" name="pnome"required>
                      </div>
                      <div class="form-group" style="position: relative; margin-right: 1%;">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" style="width: 30%;" placeholder="Ex: Silva"name="snome"required>
                      </div>
                        <div class="form-group" style="position: relative; margin-right: 1%;">
                        <label for="dt">Data de Nascimento</label>
                        <input type="date" class="form-control" name="bday" id="dt" style="width: 20%;" required>
                      </div>
                      <div class="form-group" style="position: relative; margin-right: 1%;">
                            <label for="est">Estado</label>
                            <select class="form-control" style="width:22%;" name="estado"required>
                              <option value="estado">Selecione o Estado</option> 
                                <option value="ac">AC</option> 
                                <option value="al">AL</option> 
                                <option value="am">AM</option> 
                                <option value="ap">AP</option> 
                                <option value="ba">BA</option> 
                                <option value="ce">CE</option> 
                                <option value="df">DF</option> 
                                <option value="es">ES</option> 
                                <option value="go">GO</option> 
                                <option value="ma">MA</option> 
                                <option value="mt">MT</option> 
                                <option value="ms">MS</option> 
                                <option value="mg">MG</option> 
                                <option value="pa">PA</option> 
                                <option value="pb">PB</option> 
                                <option value="pr">PR</option> 
                                <option value="pe">PE</option> 
                                <option value="pi">PI</option> 
                                <option value="rj">RJ</option> 
                                <option value="rn">RN</option> 
                                <option value="ro">RO</option> 
                                <option value="rs">RS</option> 
                                <option value="rr">RR</option> 
                                <option value="sc">SC</option> 
                                <option value="se">SE</option> 
                                <option value="sp">SP</option> 
                                <option value="to">TO</option> 
                            </select>
                     </div>
                      <div class="form-group" style="position: relative; margin-right: 1%;">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" style="width: 30%;" placeholder="Ex: Campinas" name="cidade" required>
                      </div>
                      <div class="form-group" style="position: relative; margin-right: 1%;">
                        <label for="gt">Gamer Tag</label>
                        <input type="text" class="form-control" id="gt" style="width: 30%;" placeholder="Ex: evexbr"name="tag" required>
                      </div>
                      <p style="">Ao clicar no botão "Enviar", estarei de acordo com os 
                          <a href="pgtermos.php" target="_blank">Termos de Uso</a> da Game Task.</p>
                        
                        <input type="hidden" name="cad" value="jog">
                        <input type="submit" class="btn btn-block" style="background-color:#87D0FF; color: black;" value="Enviar" >
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
	if($_POST['cad']=="jog"){
		include("conexao.php");
		$nome=$_POST['pnome']." ".$_POST['snome'];
		$email=$_POST['email'];
		$senha1=$_POST['senha'];
		$senha2=$_POST['conf'];
		$tag=$_POST['tag'];
		$cidade=$_POST['cidade'];
		$data=$_POST['bday'];
		$b=0;
		$cidade=$_POST['cidade'];
		$estado=$_POST['estado'];
		if($senha1== $senha2){
		$senha1=md5($senha2);
      $inserir="INSERT INTO Jogador(nomeJogador,nickJogador,dataNascJogador,emailJogador,senhaJogador,cidadeJogador,estadoJogador,bloqJogador)
          Values('$nome','$tag','$data','$email','$senha1','$cidade','$estado','$b')";
		$executar= sqlsrv_query($conn,$inserir);
		}
		
		}
	?>
  </body>
</html>