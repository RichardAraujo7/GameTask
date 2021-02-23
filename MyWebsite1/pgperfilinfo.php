

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
    <link href="styleperfil.css" rel="stylesheet" type="text/css">

    <title>Game Task</title>
  </head>
  <body>
     <?php
	session_start();
	//require "verificar.php"; 
		require"pgif.php";
      ?>
    <div class="tudope">
        
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
            
            <div class="topoperfil">
                <div class="parteperfil">
              	<center>
					<img src="foto_de_perfil.jpg" class="perfil" />
					<br />
				<?php
			
				
				echo $nick;?>
                    <p style="font-size: 12px;"><?php 	
					
			
					?></p>
					
				</center>
                </div>
	           <div class="partecapa">
                    <div class="adduser">
                       <button type="button" class="btn-sm btn-dark" style="width: 130%; font-size: 10px;">Seguir</button>

                   </div>
	           </div>
                <div class="menuperfil">
                    <div class="topnav" id="myTopnav">
                        <a href="pgperfil.php" >Postagens</a>
                        <a href="pgperfilft.php">Fotos</a>
                        <a href="pgperfilms.php" >Mensagem</a>
                        <a href="pgperfilinfo.php" class="active">Informações</a>
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
                <div class= "dirperfilinfo">
                    <div class="container">
                      
                      <table class="table table-dark table-hover" >
                        <thead style="color: black; background-color: #87D0FF">
                          <tr>
                            <th>Dados do Jogador</th>
                            <th>Resultados</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Gamer Tag</td>
                            <td> XXXXXXXXXX</td>
                           
                          </tr>
                          <tr>
                            <td>Ícone</td>
                            <td>XXXXXXXXXX</td>
                            
                          </tr>
                          <tr>
                            <td>Nível</td>
                            <td>XXXXXXXXXXXXX</td>
                           
                          </tr>
                          <tr>
                            <td>Elo</td>
                            <td>XXXXXXXXXXXXX</td>
                           
                          </tr>
                          <tr>
                            <td>Vitórias</td>
                            <td>XXXXXXXXXXXXX</td>
                           
                          </tr>
                          <tr>
                            <td>Derrotas</td>
                            <td>XXXXXXXXXXXXX</td>
                           
                          </tr>
                        </tbody>
                      </table>
                    </div>
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