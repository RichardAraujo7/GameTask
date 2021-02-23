

<!doctype html>
<html lang="pt-br">
  <head>
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
    <?php
	session_start();
	require "verificar.php"; 
	require "pgif.php";
		include_once("conexao.php");
      ?>
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
                                     <a class="dropdown-item" href="sair.php"> Sair </a>
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
			
				include_once("conexao.php");
				echo $_SESSION['nick'];?>
                    <p style="font-size: 12px;"><?php 	
					echo $_SESSION['descricao'];
			$_SESSION['perfil']="p1"
					?></p>
					
				</center>
                
              <div style="mt-1">
                <ul class="navigation">
					<li class="l-navigation"><a class="active " href="pgprincipal.php">Feed</a></li>
					<li class="l-navigation"><a href="pgranking.php">Ranking</a></li>
					
				    <li class="l-navigation"><a  href="pgmensagens.php">Mensagens</a></li>

					<li class="l-navigation"><a  href="pgamigos.php">Seguidores</a></li>
                    <li class="l-navigation"><a   href="pgamigos2.php">Seguindo</a></li>
					<li class="l-navigation"><a href="pgfotos.php">Fotos</a></li>
				</ul>
             </div>
			</div>
			
			<div class="conteudopr"> <!-- O que foi selecionado na barra opções -->
                
				<div class="feedpr"><!-- feed -->
                    <div class="selPost">
                        
                            <div style="float:left; margin-left:32%;">
                                  <!-- Button to Open the Modal -->
                                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal" style="height:100%; background-color: #87D0FF;">
                                    Texto
                                  </button>
    

                                  <!-- The Modal -->
                                  <div class="modal fade" id="myModal" style="color:white;">
                                    <div class="modal-dialog">
                                      <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header bg-dark">
                                          <h4 class="modal-title">Texto</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body bg-dark">
                                             <form method="post"  enctype="multipart/form-data" action="cadPost.php">
                                                       Digite o texto do post
                                                        <textarea class="form-control" class="mt-2"rows="5" id="descricao" name="desc"></textarea>
														<input type="hidden" name="p" value="2"/>
                                            
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer bg-dark">
										 <input type="submit" class="btn " style="background-color:#87D0FF; " value="OK" >
										  </form>
										  
                                            <form method="post"  enctype="multipart/form-data" action="pgprincipal.php">
                                               
                                            </form>
                                          <button type="button" class="btn" style="background-color: #87D0FF;" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                </div>
                                <div  style="float:left;">

                                  <!-- Button to Open the Modal -->
                                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal1" style="height:100%; background-color: #87D0FF;">
                                    Imagem
                                  </button>

                                  <!-- The Modal -->
                                  <div class="modal fade" id="myModal1" style="color:white;">
                                    <div class="modal-dialog">
                                      <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header bg-dark">
                                          <h4 class="modal-title">Imagem</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body bg-dark">
                                             <form method="post"  enctype="multipart/form-data" action="Upload.php">
                                                      
                                                Selecione a imagem do post <input  class="form-control mt-2 bg-dark" name="arquivo" type="file" />
												
                                                   <input type="submit" class="form-control mt-2" value="Salvar" style="background-color:#1a1a1a; color: white;" />

                                            </form>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer bg-dark">
                                           <form method="post"  enctype="multipart/form-data" action="pgcadPost.php">
										    Digite o texto do post
                                                        <textarea class="form-control" class="mt-2"rows="5" id="descricao" name="desc"></textarea><br>
															<input type="hidden" name="p" value="3"/>
                                                <input class="btn" type="Submit" style="background-color: #87D0FF;" value="OK"> 
												
                                            </form>
                                          <button type="button" class="btn" style="background-color: #87D0FF;" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                </div>
                                <div  style="float:left;">
                                  <!-- Button to Open the Modal -->
                                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal2" style="height:100%; background-color: #87D0FF;">
                                    Vídeo
                                  </button>

                                  <!-- The Modal -->
                                  <div class="modal fade" id="myModal2" style="color:white;">
                                    <div class="modal-dialog">
                                      <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header bg-dark">
                                          <h4 class="modal-title">Vídeo</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body bg-dark">
                                             <form method="post"  enctype="multipart/form-data" action="Upload.php">
                                                     
                                                        <label for="vd">URL do vídeo</label>
                                                        <input type="text" class="form-control" id="vd" style="width: 80%;" name="vd">

                                            </form>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer bg-dark">
                                           <form method="post"  enctype="multipart/form-data" action="">
										     Digite o texto do post
                                                        <textarea class="form-control" class="mt-2"rows="5" id="descricao" name="desc"></textarea><br>
                                                <input class="btn" type="Submit" style="background-color: #87D0FF;" value="OK"> 
												
                                            </form>
                                          <button type="button" class="btn" style="background-color: #87D0FF;" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>
  
                            </div>
                        </div>
                   <?php
		/*		
				$select="SELECT *
FROM post
INNER JOIN Seguidores ON post.codJogador = Seguidores.Seguindo ORDER BY dataPost";
				$query= sqlsrv_query( $conn,$select);
			if($row=sqlsrv_has_rows($query)>=1){
				
					while($retorno=sqlsrv_fetch_array($query)){
						
                        
                        $nome= sqlsrv_query( $conn, "Select nomeJogador from Jogador INNER JOIN Post ON Post.codJoga= Jogador.codJogador");
                        $gamertag= sqlsrv_query( $conn, "Select nickJogador from Jogador INNER JOIN Post ON Post.codJoga= Jogador.codJogador");
                        $ftperfil= sqlsrv_query( $conn, "Select FotodePerfil from Jogador INNER JOIN Post ON Post.codJoga= Jogador.codJogador");
                    
                    
                  
                    
                        
                    if($retorno['imgPost']!=""){          
                       echo"<div class='postagempr'>";
                       echo"<div class='namePOST' >";
                            echo"<img src='foto_de_perfil.jpg' class= 'rounded-circle' style='width: 100%; height: 100%;'/>
                            </div>";//nome da imagem tem retorno
                            
					   
                        echo"<div class='nameDatePost '>";
                           echo "<a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome. "-". $gamertag."</a>
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>". $retorno['dataPost'] ."</p>
                        </div>";//nome, gamertag e data como retorno
                        echo "<div class='descriptionPOST'>;
                            
                            <p>  ";
                                $retorno['txtPost'];
                            echo "</p> 
                            
                        </div>
                          <img src='postagemcomimagem.jpg' style='width: 90%; height: auto; 
                        margin-top: 1%; margin-left: 5%; margin-bottom: 1%;'/>
                    </div>";// nome da imagem tem retorno
                    }
                       else if ($retorno['vidPOST']!=""){ 
                        
                        
                          echo"<div class='postagempr'>";
                       echo"<div class='namePOST' >";
                            echo"<img src='foto_de_perfil.jpg' class= 'rounded-circle' style='width: 100%; height: 100%;'/>
                            </div>";//nome da imagem tem retorno
                            
					   
                        echo"<div class='nameDatePost '>";
                           echo "<a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome. "-". $gamertag."</a>;
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>". $retorno['dataPost'] ."</p>
                        </div>";//nome, gamertag e data como retorno
                        echo "<div class='descriptionPOST'>
                            
                            <p>  ";
                                $retorno['txtPost'];
                            echo "</p> 
                            
                        </div>
                          <div class='embed-responsive embed-responsive-16by9'>
                            <iframe class='embed-responsive-item' src='".$retorno['vidPost']."' allowfullscreen
                             style='width: 96%; margin-left: 2%;'>
                            </iframe>
                         </div>
                    </div>";}// link do vídeo tem retorno
                        else{
                            echo"<div class='postagempr'>";
                       echo"<div class='namePOST' >";
                            echo"<img src='".$ftperfil."'.jpg' class= 'rounded-circle' style='width: 100%; height: 100%;'/>
                            </div>";//nome da imagem tem retorno
                            
					   
                        echo"<div class='nameDatePost '>";
                           echo "<a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome. "-". $gamertag."</a>
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>". $retorno['dataPost'] ."</p>
                        </div>";//nome, gamertag e data como retorno
                        echo "<div class='descriptionPOST'>
                            
                            <p>  ";
                                $retorno['txtPost'];
                            echo "</p> 
                            
                        </div>
                    </div>";
                        
							}
						}
					
				
				}
                    
                    
                    
                    
			?>	
                    
                    
                    
                    
                    
                    
          
                               
                    
 <?php
				
			$select="SELECT *
FROM post
INNER JOIN Seguidores ON post.codTime = Seguidores.Seguindo ORDER BY dataPost";	
			$query= sqlsrv_query( $conn, $select);
			if(sqlsrv_has_rows($query)>=1){
					while($retorno=sqlsrv_fetch_array($query)){
						
                        
                        $nome= sqlsrv_query( $conexao, "Select nomeTime from Times INNER JOIN Post ON Post.codTime= Times.codTime");
                        
                        $ftperfil= sqlsrv_query( $conexao, "Select FotodePerfilT from Times INNER JOIN Post ON Post.codTime= Times.codTime");
                 
                      if($retorno['imgPost']!=""){
                          
                  
                       echo"<div class='postagempr'>";
                       echo"<div class='namePOST' >";
                            echo"<img src='".$ftperfil."'.jpg' class= 'rounded-circle' style='width: 100%; height: 100%;'/>
                            </div>";//nome da imagem tem retorno
                            
					   
                        echo"<div class='nameDatePost '>";
                           echo "<a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome."</a>
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>". $retorno['dataPost'] ."</p>
                        </div>";//nome, gamertag e data como retorno
                        echo "<div class='descriptionPOST'>
                            
                            <p>  ";
                                $retorno['txtPost'];
                            echo "</p> 
                            
                        </div>
                          <img src='postagemcomimagem.jpg' style='width: 90%; height: auto; 
                        margin-top: 1%; margin-left: 5%; margin-bottom: 1%;'/>
                    </div>";// nome da imagem tem retorno
                        
                            }  
                        else if ($retorno['vidPOST']!=""){
                        
                          echo"<div class='postagempr'>";
                       echo"<div class='namePOST' >";
                            echo"<img src='".$ftperfil."'.jpg' class= 'rounded-circle' style='width: 100%; height: 100%;'/>
                            </div>";//nome da imagem tem retorno
                            
					   
                        echo"<div class='nameDatePost '>";
                           echo "<a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome."</a>
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>". $retorno['dataPost'] ."</p>
                        </div>";//nome, gamertag e data como retorno
                        echo "<div class='descriptionPOST'>
                            
                            <p>  ";
                                $retorno['txtPost'];
                            echo "</p> 
                            
                        </div>
                          <div class='embed-responsive embed-responsive-16by9'>
                            <iframe class='embed-responsive-item' src='".$retorno['vidPost']."' allowfullscreen
                             style='width: 96%; margin-left: 2%;'>
                            </iframe>
                         </div>
                    </div>";// link do vídeo tem retorno
                        }
                        else{
                            echo"<div class='postagempr'>";
                       echo"<div class='namePOST' >";
                            echo"<img src='".$ftperfil."'.jpg' class= 'rounded-circle' style='width: 100%; height: 100%;'/>
                            </div>";//nome da imagem tem retorno
                            
					   
                        echo"<div class='nameDatePost '>";
                           echo "<a href='#' style='text-decoration: none; color: #87D0FF; font-size: 18px;'>". $nome."</a>
                            <p style='text-decoration: none;  font-size: 12px; margin-top: 3px;'>". $retorno['dataPost'] ."</p>
                        </div>";	//nome, gamertag e data como retorno
                        echo "<div class='descriptionPOST'>
                            
                            <p>  ";
                                $retorno['txtPost'];
                            echo "</p> 
                            
                        </div>
                    </div>";
                        
                        }
					}
					
				}
                    
                    
                    
                    
                    
                    
                    
		*/	?>	
					<div class="postagempr"> <!-- cada post -->
                        <div class="namePOST" ><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nameDatePost "><!--parte do nome e data-->
                            <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome - Gamer Tag</a>
                            <p style="text-decoration: none;  font-size: 12px; margin-top: 3px;">Data </p> 
                        </div>
                        <div class="descriptionPOST"><!-- descricao do post-->
                            
                            <p>  
                                Algúem disponível para jogar LOL??
                            </p> 
                            
                        </div>
                    </div>
                    <div class="postagempr"> <!-- cada post -->
                        <div class="namePOST" ><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nameDatePost "><!--parte do nome e data-->
                            <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome - Gamer Tag </a>
                            <p style="text-decoration: none;  font-size: 12px; margin-top: 3px;">Data </p> 
                        </div>
                        <div class="descriptionPOST"><!-- descricao do post-->
                            
                        </div>
                        <img src="postagemcomimagem.jpg" style="width: 90%; height: auto; 
                        margin-top: 1%; margin-left: 5%; margin-bottom: 1%;"/>
                    </div>
                    <div class="postagempr"> <!-- cada post -->
                        <div class="namePOST" ><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nameDatePost "><!--parte do nome e data-->
                            <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome - Gamer Tag </a>
                            <p style="text-decoration: none;  font-size: 12px; margin-top: 3px;">Data </p> 
                        </div>
                        <div class="descriptionPOST"><!-- descricao do post-->

                            
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pSmc4C1KXrs" allowfullscreen
                             style="width: 96%; margin-left: 2%;">
                            </iframe>
                        </div>
                    </div>
                    <div class="postagempr"> <!-- cada post -->
                        <div class="namePOST"><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nameDatePost "><!--parte do nome e data-->
                            <a href="#" style="text-decoration: none; color: #87D0FF; font-size: 18px;"> Nome - Gamer Tag </a>
                            <p style="text-decoration: none;  font-size: 12px; margin-top: 3px;">Data </p> 
                        </div>
                        <div class="descriptionPOST"><!-- descricao do post-->

                            
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Lq3kyhn4ibs" allowfullscreen
                            style="width: 96%; margin-left: 2%;">
                            </iframe>
                        </div>
                    </div>
                    
                </div>
                
                        
				
				<div class="noticiaspr"><!-- Noticías da lateral -->
					<div class="newspr">
                        <img src="cuphead.jpg" style="width:100%; height: 200px;"/>
                        <a href="https://www.terra.com.br/diversao/geek/conferencia-da-microsoft-na-e3-e-muito-game-bom-junto,62ebad9a1a9869c46d57aa52061fc672iqleygma.html" class="linknew">CONFERÊNCIA DA MICROSOFT NA E3: É MUITO GAME BOM JUNTO!</a>
				    </div>  
                    
                    <div class="newspr">
                        <img src="rockstarnew.jpg" style="width:100%; height: 200px;"/>
                        <a href="http://br.ign.com/red-dead-redemption-2-1/61594/feature/como-a-rockstar-esta-levando-os-games-de-mundo-aberto-ao-pro" class="linknew">COMO A ROCKSTAR ESTÁ LEVANDO OS GAMES DE MUNDO ABERTO AO PRÓXIMO NÍVEL</a>
				    </div> 
                    <div class="newspr">
                        <img src="jump_force.jpg" style="width:100%; height: 200px;"/>
                        <a href="https://www.theenemy.com.br/enemyzone/o-maior-game-de-anime-jump-force" class="linknew">O MAIOR GAME DE ANIME: JUMP FORCE?</a>
				    </div> 
                    <div class="newspr">
                        <img src="regESPORTS.png" style="width:100%; height: 200px;"/>
                        <a href="https://www12.senado.leg.br/noticias/materias/2018/04/24/aprovado-projeto-que-outorga-canais-de-radio-e-tv-a-entidades-educativas?utm_source=midias-sociais&utm_medium=midias-sociais&utm_campaign=midias-sociais#jogos" class="linknew">COMISSÃO APROVA REGULAMENTAÇÃO DOS E-SPORTS</a>
				    </div>  
		        </div>
            </div>
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      </div>
    </body>
</html>
<?php



?>













