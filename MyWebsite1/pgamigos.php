

<!doctype html>
<html lang="pt-br">
  <head>
     <?php
	session_start();
	require "verificar.php"; 
		
      ?>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- fonte MontSerrat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link href="styleprincipal.css" rel="stylesheet" type="text/css">
    <title>Game Task</title>
  </head>
  <body>
    <div class="tudopr">
        
			<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #87D0FF;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="pgprincipal.php"> <img src="LogoTCC.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Game Task </a>                      
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSite">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"> Opções </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="pgperfil.php"> Meu Perfil </a>
									<a class="dropdown-item" href="pgprincipal.php"> Feed </a>
                                    
                                    
                                    <a class="dropdown-item" href="pgopcoes.php"> Opções </a>
                                <a class="dropdown-item"  href="sair.php"> Sair </a>
                                </div>
                            </li>
                        </ul>
                    
                 <form class="form-inline" method="post"  action="buscarperfil.php">

                            <input class="form-control ml-5 mr-2" type="text" placeholder="Buscar" name="nick" >
                            <button class="btn btn-dark mr-4" type="Submit"> OK </button>
							
                        </form>
                </div>
                </div>
            </nav>                  
      
			<div class="infopr"><!-- Região do perfil -->
			 	<center>
					<img src="foto_de_perfil.jpg" class="perfil" />
					<br />
				<?php
			

				echo $_SESSION['nick'];?>
                    <p style="font-size: 12px;"><?php 	
					echo $_SESSION['descricao'];
			
					?></p>
					
				</center>
                
              <div style="mt-1">
                <ul class="navigation">
					<li class="l-navigation"><a  href="pgprincipal.php">Feed</a></li>
					<li class="l-navigation"><a href="pgranking.php">Ranking</a></li>
					
				    <li class="l-navigation"><a  href="pgmensagens.php">Mensagens</a></li>

					<li class="l-navigation"><a class="active " href="pgamigos.php">Seguidores</a></li>
                    <li class="l-navigation"><a  href="pgamigos2.php">Seguindo</a></li>
					<li class="l-navigation"><a href="pgfotos.php">Fotos</a></li>
				</ul>
             </div>
			</div>
			
			<div class="conteudopr"> <!-- O que foi selecionado na barra opções -->
				<div class="eachfriend2">
                    <img src="foto_de_perfil.jpg" style="width: 40%; height: 100%;"/>
                    <div style="color: white; float: right; height: 100%; width: 60%; padding:6%;">
                        <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome </a>
                        <p style="text-decoration: none;  font-size: 12px; margin-top: 5px;">100 amigos </p> 
                    </div>		
				</div>
				<div class="eachfriend2">
                    <img src="foto_de_perfil.jpg" style="width: 40%; height: 100%;"/>
                    <div style="color: white; float: right; height: 100%; width: 60%; padding:6%;">
                        <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome </a>
                        <p style="text-decoration: none;  font-size: 12px; margin-top: 5px;">100 amigos </p> 
                    </div>		
				</div>
				<div class="eachfriend2">
                    <img src="foto_de_perfil.jpg" style="width: 40%; height: 100%;"/>
                    <div style="color: white; float: right; height: 100%; width: 60%; padding:6%;">
                        <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome </a>
                        <p style="text-decoration: none;  font-size: 12px; margin-top: 5px;">100 amigos </p> 
                    </div>		
				</div>
                <div class="eachfriend2">
                    <img src="foto_de_perfil.jpg" style="width: 40%; height: 100%;"/>
                    <div style="color: white; float: right; height: 100%; width: 60%; padding:6%;">
                        <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome </a>
                        <p style="text-decoration: none;  font-size: 12px; margin-top: 5px;">100 amigos </p> 
                    </div>		
				</div>
			
            </div>
      </div>
  <?php
include(conexao.php);
				
				
			/*	$query= mysqli_query( $conexao, "SELECT *
                FROM Jogador
                INNER JOIN seguidores ON seguidores.Seguidores= Jogador.codJogador");
				
				while($retorno=@mysqli_fetch_array($query)){
                    
                   echo "<div class='eachfriend2'>";
                    echo "<img src='".$retorno['FotodePerfil']."' style='width: 40%; height: 100%;'/>
                    <div style='color: white; float: right; height: 100%; width: 60%; padding:6%;'>
                        <a href='' style='text-decoration: none; color: #87D0FF; font-size: 18px;'> $retorno['nomeJogador'] </a>
                        
                    </div>		
				</div>";
                    
                }
      
            $query= mysqli_query( $conexao, "SELECT *
                FROM Times
                INNER JOIN seguidores ON seguidores.Seguidores= Times.codTime");
				
				while($retorno=@mysqli_fetch_array($query)){
                    
                   echo "<div class='eachfriend2'>";
                    echo "<img src='".$retorno['FotodePerfilT']."' style='width: 40%; height: 100%;'/>
                    <div style='color: white; float: right; height: 100%; width: 60%; padding:6%;'>
                        <a href='' style='text-decoration: none; color: #87D0FF; font-size: 18px;'> $retorno['nomeTime'] </a>
                        
                    </div>		
				</div>";
                    
                }*/
                    ?>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>