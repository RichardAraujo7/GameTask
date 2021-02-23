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
					<li class="l-navigation"><a class="active" href="pgranking.php">Ranking</a></li>
					
				    <li class="l-navigation"><a  href="pgmensagens.php">Mensagens</a></li>

					<li class="l-navigation"><a  href="pgamigos.php">Seguidores</a></li>
                    <li class="l-navigation"><a   href="pgamigos2.php">Seguindo</a></li>
					<li class="l-navigation"><a href="pgfotos.php">Fotos</a></li>
				</ul>
             </div>
			</div>
			<div class="conteudopr"> <!-- O que foi selecionado na barra opções -->
				<div class="container">
                      
                      <table class="table table-dark table-hover mt-3" style="margin-top: 1%; font-family: 'Montserrat', sans-serif;">
                        <thead style="color: black; background-color: #87D0FF; width: 100%;">
						
						<th style="width: 100%; background-color: #1a1a1a; color: white;" colspan="2">
                            <form class="form-inline" enctype="multipart/form-data" method="get" action="pgrankingtbb.php" st>				
                                Digite o nick do jogador no League of Legends 
                                <input type="text" class="form-control ml-3" style="width:50%;" name="summonerName" id="summonerName">
                                <input type="submit" class="form-control btn btn-dark ml-2" value="OK">

                            </form>
                        </th>
                          <tr>
                            <th>Dados do Jogador</th>
                            <th>Resultados</th>							
                        <?php
                            $region = "br1";
                            $summonerName = $_GET['summonerName'];
                            $summonerName = str_replace(" ","",$summonerName);
                            $apiKey = "RGAPI-000cbead-c7ec-4a13-a849-72bb9fa25ad4";

                            $summonerURL = "https://". $region . ".api.riotgames.com/lol/summoner/v3/summoners/by-name/". $summonerName ."?api_key=". $apiKey;
                            $summonerResult = file_get_contents($summonerURL);
                            $summonerDecoded = json_decode($summonerResult, true);

                            $summonerId = $summonerDecoded['id'];
                            $summonerLevel = $summonerDecoded['summonerLevel'];

                            $rankInfoURL = "https://". $region . ".api.riotgames.com/lol/league/v3/positions/by-summoner/". $summonerId ."?api_key=". $apiKey;
                            $rankInfoResult = file_get_contents($rankInfoURL);
                            $rankInfoDecoded = json_decode($rankInfoResult, true);

                            $tier = $rankInfoDecoded[0]['tier'];
                            $rank = $rankInfoDecoded[0]['rank'];
                            $wins = $rankInfoDecoded[0]['wins'];
                            $losses = $rankInfoDecoded[0]['losses'];
                            $leaguePoints = $rankInfoDecoded[0]['leaguePoints'];
                            $winrate = ($wins / ($wins + $losses)) * 100 ;
                            $partidas = $wins + $losses;
                            ?>
                        
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Nome de invocador</td>
                            <td><?php print $summonerName ?></td>                           
                          </tr>
                          <tr>
                            <td>Ícone</td>
                            <td><image height="64" width="64" src="http://avatar.leagueoflegends.com/br/<?php print $summonerName; ?>.png" valign="middle"/></td>
                            
                          </tr>
                          <tr>
                            <td>Nível</td>
                            <td><?php print $summonerLevel?></td>
                           
                          </tr>
                          <tr>
                            <td>Elo</td>
                            <td><?php print $tier." "; print $rank." "; print $leaguePoints." "; ?> Pontos</td>
                           
                          </tr>
                          <tr>
                            <td>Vitórias</td>
                            <td><?php print $wins?></td>
                           
                          </tr>
                          <tr>
                            <td>Derrotas</td>
                            <td><?php print $losses?></td>                     
                          </tr>
						  <tr>
                            <td>Taxa de vitória</td>
                            <td><?php print $winrate?> %</td>
							 <tr>
                            <td>Partidas jogadas</td>
                            <td><?php print $partidas?></td>
                        </tbody>
                      </table>
                    </div>
			
            </div>
      </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>