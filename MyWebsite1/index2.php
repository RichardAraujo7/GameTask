

<!doctype html>
<html lang="pt-br">
  <head>
  
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">  

    <link href="styleprincipal.css" rel="stylesheet" type="text/css">
    <title>Game Task</title>
  </head>
  <body>
  

    <div class="tudopr">
        
			<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #87D0FF;">
                <div class="container-fluid">
                    <a class="navbar-brand" href=""> <img src="LogoTCC.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Game Task </a>                      
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"  id="navbarSite">
                        <div style="margin-left:32%;">
                           <form class="form-inline" action="login.php" method="post">
                                    <input class="form-control " id="drt" type="text" placeholder="E-mail" name="email">
                                    <input class="form-control ml-1" id="drt"type="password" placeholder="Senha"  name="senha">
                                    <button class="btn btn-dark ml-1 mr-5  " id="drt" type="Submit"> OK </button>
                                    
                            </form>
                            
                            
                        </div>
                        
                        <a style="font-size:10px;  color: #1a1a1a;" href="pgesqueci.php">
                            Esqueci minha senha</a>

                         

                    </div>
                </div>
            </nav>
             <?php 
			 if (isset($_GET['erro'])){
			 echo "<div class='erroPHP'>".$_GET['erro']."</div>";}
			 
			?>
            <div class="corpo">
				<div class="cadastro" align="center">
					<div class="tcadastro">
						<h4> Vire um cyber atleta! </h4>
						<p> Comece agora, é de graça! </p>
					</div>
					<div class="bcadastro">
						<form class="cadastrando" action="pgcadastro.php">
                            <input type="submit" class="buttonscadastros" value="Cadastre-se como Jogador">
						</form>
                        <form class="cadastrando" action="pgcadastrotime.php">
				           <input type="submit" class="buttonscadastros mt-4" value="Cadastre-se como Time"> 
                            
						</form>
					</div>
				
				</div>
			</div>
			<div class="rodape">
			</div>
      
			
      </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>