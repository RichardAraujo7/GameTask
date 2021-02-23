<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Texto
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal" style="color:white;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-dark">
          <h4 class="modal-title">Texto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body bg-dark">
             <form method="post"  enctype="multipart/form-data" action="recebeUpload.php">
                       Digite o texto do post
                        <textarea class="form-control" class="mt-2"rows="5" id="descricao"></textarea>
                            
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer bg-dark">
           <button class="btn" type="Submit" style="background-color: #87D0FF;"> OK </button>
          <button type="button" class="btn" style="background-color: #87D0FF;" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container">
 
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
    Imagem
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal1" style="color:white;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-dark">
          <h4 class="modal-title">Imagem</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body bg-dark">
             <form method="post"  enctype="multipart/form-data" action="recebeUpload.php">
                       Digite o texto do post
                        <textarea class="form-control" class="mt-2"rows="5" id="descricao"></textarea><br>
                Selecione a imagem do post <input  class="form-control mt-2 bg-dark" name="arquivo" type="file" />
                   
                   <input type="submit" class="form-control mt-2" value="Salvar" style="background-color:#1a1a1a; color: white;" />
                            
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer bg-dark">
           <button class="btn" type="Submit" style="background-color: #87D0FF;"> OK </button>
          <button type="button" class="btn" style="background-color: #87D0FF;" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
    Vídeo
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal2" style="color:white;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-dark">
          <h4 class="modal-title">Vídeo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body bg-dark">
             <form method="post"  enctype="multipart/form-data" action="recebeUpload.php">
                       Digite o texto do post
                        <textarea class="form-control" class="mt-2"rows="5" id="descricao"></textarea><br>
                        <label for="vd">URL do vídeo</label>
                        <input type="text" class="form-control" id="vd" style="width: 80%;">
                            
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer bg-dark">
           <button class="btn" type="Submit" style="background-color: #87D0FF;"> OK </button>
          <button type="button" class="btn" style="background-color: #87D0FF;" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</body>
</html>
