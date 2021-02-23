

<!doctype html>
<html lang="pt-br">
  <head>
     <?php
	session_start();
	//require "verificar.php"; 
		
      ?>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <link href="styleprincipal.css" rel="stylesheet" type="text/css">
    <link href="styleopcoes.css" rel="stylesheet" type="text/css">

    <title>Game Task</title>
  </head>
  <body>
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
            <div class="supop">
                <form method="post"  enctype="multipart/form-data" action="envia_arquivos.php">
                   Selecione sua foto de perfil <input  class="form-control mt-2 bg-dark" name="userfile" type="file" />
                   
                   <input type="submit" class="form-control mt-2" value="Salvar" style="background-color:#1a1a1a; color: white;" />
                </form><br>
                <form method="post"  enctype="multipart/form-data" action="envia_arquivoscapa.php">
                   Selecione sua foto de capa <input  class="form-control mt-2 bg-dark" name="userfile" type="file" />
                   
                   <input type="submit" class="form-control mt-2" value="Salvar" style="background-color:#1a1a1a; color: white;" />
                </form><br>
                <form method="post"  enctype="multipart/form-data" action="atualizar.php">
                   Digite seu novo nick name
                        <input class="form-control mr-2 mt-2" type="text" placeholder="Novo Nick Name" style="width: 35%;" required name="nick">
                        <button class="btn mt-1" type="Submit" style="background-color: #1a1a1a; color: white;"> OK </button>
						<input type="hidden" value="nick" name="att">
                </form><br>
                <form method="post"  enctype="multipart/form-data" action="recebeUpload.php">
                   Digite sua descrição
                    <textarea class="form-control" class="mt-2"rows="2" id="descricao"></textarea>
                        <button class="btn mt-1" type="Submit" style="background-color: #1a1a1a; color: white;"> OK </button>
                </form>
                <br>
                <input type="submit" class="form-control btn-danger" value="Desativar Conta" data-toggle="modal" data-target="#modalErase"><!--botão apagar-->
                
                    <div class="modal fade" id="modalErase" style="color:white;"><!--form que aparece-->
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header bg-dark">
                              <h4 class="modal-title">Desativar Conta</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body bg-dark">
                                 <form method="post"  enctype="multipart/form-data" action="recebeUpload.php">
                                           <label for="DL">Você deseja desativar sua conta?</label>
                                            <input type="email" class="form-control" id="DL" placeholder="Digite seu e-mail"
                                                   style="width: 80%;"><br>
                                            <input type="password" class="form-control" id="SN" placeholder="Digite sua senha"
                                                   style="width: 80%;">

                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer bg-dark">
                                <form method="post"  enctype="multipart/form-data" action="">
                                    <input class="btn" type="Submit" style="background-color: #87D0FF;" value="OK"> 
                                </form>
                              <button type="button" class="btn" style="background-color: #87D0FF;" data-dismiss="modal">Close</button>
                            </div>

                          </div>
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