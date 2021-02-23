

<!doctype html>
<html lang="pt-br">
  <head>
     <?php

	//require "verificar.php"; 
	require"pgif.php";
		
      ?>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- fonte MontSerrat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">  
      
    <link href="styleprincipal.css" rel="stylesheet" type="text/css">
    <link href="styleperfil.css" rel="stylesheet" type="text/css">

    <title>Game Task</title>
  </head>
  <body>
    <div class="tudope">
			<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #87D0FF;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="pg"> <img src="LogoTCC.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
            
            <div class="topoperfil">
                <div class="parteperfil">
          	<center>
					<img src="foto_de_perfil.jpg" class="perfil" />
					<br />
				<?php
			
	
				echo $nick;?>
                    <p style="font-size: 12px;">
				</p>
					
				</center>
                </div>
	           <div class="partecapa">
                   
                   <div class="adduser">
                       <button type="button" class="btn-sm btn-dark" style="width: 130%; font-size: 10px;">Seguir</button>

                   </div>
	           </div>
                <div class="menuperfil">
                    <div class="topnav" id="myTopnav">
                        <a href="pgperfil.php" class="active">Postagens</a>
                        <a href="pgperfilft.php">Fotos</a>
                        <a href="pgperfilms.php">Mensagem</a>
                        <a href="pgperfilinfo.php">Informações</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div> 
                    
                </div>
                <div class="esqperfil">
                    
                    <div class="apresft">
                        
                       <?php if($desc==""){
					   echo "Descrição: " .$desc; }?>
                        <p></p>
                        <p> <?php echo "E-mail: ".  $email; ?></p>
                    </div>
                        
                </div>
                <div class= "dirperfil">
                    <div class="postagempe"> <!-- cada post -->
                        <div class="postFTP"><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nomeDTP "><!--parte do nome e data-->
                            <a href="#" class="nomePST"> Nome - Gamer Tag</a>
                            <p class="dataPST">Data </p> 
                        </div>
                        <div class="descPST"><!-- descricao do post-->
                            
                                Muito satisfeito com minha evolução!
                            
                        </div>
                    </div>
                     <div class="postagempe"> <!-- cada post -->
                        <div class="postFTP"><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nomeDTP "><!--parte do nome e data-->
                            <a href="#" class="nomePST"> Nome - Gamer Tag </a>
                            <p class="dataPST">Data </p>
                        </div>
                        <div class="descPST"><!-- descricao do post-->
                            
                        </div>
                        <img src="postagemcomimagem.jpg" style="width: 90%; height: auto; 
                        margin-top: 1%; margin-left: 5%; margin-bottom: 1%;"/>
                    </div>
                    <div class="postagempe"> <!-- cada post -->
                        <div class="postFTP"><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nomeDTP "><!--parte do nome e data-->
                            <a href="#" class="nomePST"> Nome - Gamer Tag </a>
                            <p class="dataPST">Data </p> 
                        </div>
                        <div class="descPST"><!-- descricao do post-->
                            
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pSmc4C1KXrs" allowfullscreen
                             style="width: 96%; margin-left: 2%;">
                            </iframe>
                        </div>
                    </div>
                    <div class="postagempe"> <!-- cada post -->
                        <div class="postFTP"><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nomeDTP "><!--parte do nome e data-->
                            <a href="#" class="nomePST"> Nome - Gamer Tag </a>
                            <p class="dataPST">Data </p>
                        </div>
                        <div class="descPST"><!-- descricao do post-->
                            
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Lq3kyhn4ibs" allowfullscreen
                            style="width: 96%; margin-left: 2%;">
                            </iframe>
                        </div>
                    </div>
                </div
				      
					  <?php include_once("conexao.php"); $query = "SELECT * FROM Post WHERE codJogador ='$cod'";
						$result = sqlsrv_query($conn, $query);
					if(sqlsrv_has_rows($result)>=1){
		{				echo "olaq";
					while($sl =sqlsrv_fetch_array($result))
						
			{ echo "ola2" ?>
						  <div class="postagempe"> <!-- cada post -->
                        <div class="postFTP"><!-- parte da foto do postador-->
                            <img src="foto_de_perfil.jpg" class= "rounded-circle" style="width: 100%; height: 100%;"/>
                            
					   </div>
                        <div class=" nomeDTP "><!--parte do nome e data-->
                            <a href="#" class="nomePST"> <?phpecho $nome." - ".$nick;?></a>
                            <p class="dataPST"><?php echo $sl['dataPost'];?> </p> 
                        </div>
                        <div class="descPST"><!-- descricao do post-->
                            
                             <?php echo $sl['txtPost'] ;?>
                            
                        </div>
                    </div>
					<?php }}}?>

            </div>
                


      
            
      
		</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      
    </body>
</html>