

<!doctype html>
<html lang="pt-br">
  <head>
     <?php
	session_start();
	require "verificar.php"; 
		include_once("conexao.php");
      ?>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="stylemensagens.css" rel="stylesheet" type="text/css">
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
					
				    <li class="l-navigation"><a  class="active" href="pgmensagens.php">Mensagens</a></li>

					<li class="l-navigation"><a  href="pgamigos.php">Seguidores</a></li>
                    <li class="l-navigation"><a   href="pgamigos2.php">Seguindo</a></li>
					<li class="l-navigation"><a href="pgfotos.php">Fotos</a></li>
				</ul>
             </div>
			</div>
			
			<div class="conteudopr"> <!-- O que foi selecionado na barra opções -->
                <div class="supms">
                   
				    <div class="postagemms"> <!-- cada post -->
                        <div style="float:left; padding: 0.5%;  height: 65px; width: 10%; border: none;"><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 75%; height: 100%;"/>
                            
					   </div>
                        <div style=" margin-left: 10%; margin-top:1.5%;  width: auto; height: 65px; color: white; border: none; "><!--parte do nome e data-->
                            <button type="button" class="close mr-2" data-dismiss="modal" style="background-color: red;">&times;</button>
                            <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome </a>
                            <p style="text-decoration: none;  font-size: 12px; margin-top: 3px;">Data </p> 
                            
                        </div>
                        <div class="descricaoMensagem"><!-- descricao do post-->
                            
                                Olhei suas estatísticas e gostei muito do que vi! Se estiver interessado em entrar no nosso time, responda o 
                            e-mail mandado e nós marcaremos um jogo teste para você!
                            
                        </div>
                        
                    </div>
                    <div class="postagemms"> <!-- cada post -->
                        <div style="float:left; padding: 0.5%;  height: 65px; width: 10%; border: none;"><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 75%; height: 100%;"/>
                            
					   </div>
                        <div style=" margin-left: 10%; margin-top:2%;  width: auto; height: 65px; color: white; border: none; "><!--parte do nome e data-->
                            <button type="button" class="close mr-2" data-dismiss="modal" style="background-color: red;">&times;</button>
                            <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome </a>
                            <p style="text-decoration: none;  font-size: 12px; margin-top: 3px;">Data </p> 
                            
                        </div>
                        <div class="descricaoMensagem"><!-- descricao do post-->
                            
                                Foi muito legal jogar com você! Quando quiser vir pra call de novo, é só me chamar.
                            
                        </div>
                        
                    </div>
					<?php
					include_once("conexao.php");
						$cod=$_SESSION['cod'];
					if(isset($_SESSION['nomet'])){
						$select="select * from Mensagem where codDestinarioTime=$cod order by DataMsg";
						$exec=sqlsrv_query($conn,$select);
						while($row = sqlsrv_fetch_array($exec)){
							$data=$row['DataMsg '];
							$txt=$row['txtMsg'];
							if(isset ($row['codTimes'])){
								$cod=$row['codTimes'];
								$select2="select * from Times where codTime=$cod";
								$exec=sqlsrv_query($conn,$select2);
								$row2= sqlsrv_fetch_array($exec);
								$nome=$row2['nomeTime'];
							}
							else{
									$cod=$row['codJoga'];
								$select2="select * from Jogador where codJogador=$cod";
								$exec=sqlsrv_query($conn,$select2);
								$row2= sqlsrv_fetch_array($exec);
								$nome=$row2['nickJogador'];
						
							}
								echo "<div class='postagemms'> 
                        <div style='float:left; padding: 0.5%;  height: 65px; width: 10%; border: none;'>
                            <img src='foto_de_perfil.jpg' class= 'rounded-circle' style='width: 75%; height: 100%;'/>
					   </div>";//retorno no nome da imagem
                        echo "<div style=' margin-left: 10%; margin-top:1.5%;  width: auto; height: 65px; color: white; border: none; '>
                            <button type='button' class='close mr-2' data-dismiss='modal' style='background-color: red;'>&times;</button>
                            <a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome ."</a>
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>".$data ."</p> 
                            
                        </div>
                        <div class='descricaoMensagem'>";
                            
                echo $txt;
                            
                            
               echo "     </div>
                        
                    </div>";
						}
					}
					else{
							$select="select * from Mensagem where codDestinatarioJog=$cod order by DataMsg";
						$exec=sqlsrv_query($conn,$select);
						while($row = sqlsrv_fetch_array($exec)){
							
							
							$data=$row['DataMsg'];
							$txt=$row['txtMsg'];
							if(isset( $row['codTimes'])){
								$cod=$row['codTimes'];
								$select2="select * from Times where codTime=$cod";
								$exec=sqlsrv_query($conn,$select2);
								$row2= sqlsrv_fetch_array($exec);
								$nome=$row2['nomeTime'];
							}
							else{
									$cod=$row['codJoga'];
								$select2="select * from Jogador where codJogador=$cod";
								$executar=sqlsrv_query($conn,$select2);
								$row2= sqlsrv_fetch_array($executar);
								$nome=$row2['nickJogador'];
						
							}
								echo "<div class='postagemms'> 
                        <div style='float:left; padding: 0.5%;  height: 65px; width: 10%; border: none;'>
                            <img src='foto_de_perfil.jpg' class= 'rounded-circle' style='width: 75%; height: 100%;'/>
					   </div>";//retorno no nome da imagem
                        echo "<div style=' margin-left: 10%; margin-top:1.5%;  width: auto; height: 65px; color: white; border: none; '>
                            <button type='button' class='close mr-2' data-dismiss='modal' style='background-color: red;'>&times;</button>
                            <a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome ."</a>
                          
                            
                        </div>
                        <div class='descricaoMensagem'>";
                            
                echo $txt;
                            
                            
               echo "     </div>
                        
                    </div>";
						}
						
						
					}
					
					?>
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


      <?php
        /*
				   include(conexao.php);
				
				
				$query= sqlsrv_query( $conn, "select * from Mensagem where codDestinatarioJog=$cod ORDER BY DataMsg");
                
				
					while($retorno=sqlsrv_fetch_array($query)){
                        $foto= sqlsrv_query( $conn, "SELECT FotodePerfil FROM Jogador INNER JOIN Mensagem 
                        ON Jogadores.codJogador = Mensagem.codJog ");
                        $nome= sqlsrv_query( $conn, "SELECT nomeJogador FROM Jogador INNER JOIN Mensagem 
                        ON Jogadores.codJogador = Mensagem.codJog ");
                        
                        
						echo "<div class='postagemms'> 
                        <div style='float:left; padding: 0.5%;  height: 65px; width: 10%; border: none;'>
                            <img src='".$foto."' class= 'rounded-circle' style='width: 75%; height: 100%;'/>
					   </div>";//retorno no nome da imagem
                        echo "<div style=' margin-left: 10%; margin-top:1.5%;  width: auto; height: 65px; color: white; border: none; '>
                            <button type='button' class='close mr-2' data-dismiss='modal' style='background-color: red;'>&times;</button>
                            <a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome ."</a>
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>".$retorno['DataMsg'] ."</p> 
                            
                        </div>
                        <div class='descricaoMensagem'>";
                            
                $retorno['txtMsg'];
                            
                            
               echo "     </div>
                        
                    </div>";
                        
                        
                   
					}
				*/	
?>


<?php
        
		  /*		   include(conexao.php);
				
				
				$query= mysqli_query( $conexao, "SELECT *
                FROM Mensagem
                INNER JOIN Jogadores ON Times.codTimes= Mensagem.codDestinario ORDER BY dataMsg ");
				
				while($retorno=@mysqli_fetch_array($query)){
                        $foto= mysqli_query( $conexao, "SELECT FotodePerfilT FROM Times INNER JOIN Mensagem 
                        ON Times.codTime = Mensagem.codTimes ");
                        $nome= mysqli_query( $conexao, "SELECT nomeTime FROM Times INNER JOIN Mensagem 
                        ON Times.codTime = Mensagem.codTimes ");
                        
                        
						echo "<div class='postagemms'> 
                        <div style='float:left; padding: 0.5%;  height: 65px; width: 10%; border: none;'>
                            <img src='".$foto."' class= 'rounded-circle' style='width: 75%; height: 100%;'/>
					   </div>"//retorno no nome da imagem
                        echo "<div style=' margin-left: 10%; margin-top:1.5%;  width: auto; height: 65px; color: white; border: none; '>
                            <button type='button' class='close mr-2' data-dismiss='modal' style='background-color: red;'>&times;</button>
                            <a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome ."</a>
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>".$retorno['DataMsg'] ."</p> 
                            
                        </div>
                        <div class='descricaoMensagem'>";
                            
                $retorno['txtMsg']
                            
                            
               echo "     </div>
                        
                    </div>";
                        
                        
                   
					}*/
					
?>
			