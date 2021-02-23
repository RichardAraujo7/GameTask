 	<?php
					$cod=$_SESSION['cod'];
					if(isset($_SESSION['nomet'])){
						$select="select * from Mensagem where codDestinarioTime=$cod order by DataMsg";
						$exec=sqlsrv_query($conn,$select);
						while($row = sqlsrv_fetch_array($exec)){
							$data=$row['DataMsg '];
							$txt=$row['txtMsg'];
							if(isset $row['codTimes']){
								$cod=$row['codTimes'];
								$select2="select * from Times where codTime=$cod";
								$exec=sqlsrv_query($conn,$select2);
								$row2= sqlsrv_fetch_array($exec);
								$nome=$row2['nomeTime'];
							}
							else{
									$cod=$row['codJogador'];
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
							$select="select * from Mensagem where codDestinarioJog=$cod order by DataMsg";
						$exec=sqlsrv_query($conn,$select);
						while($row = sqlsrv_fetch_array($exec)){
							$data=$row['DataMsg '];
							$txt=$row['txtMsg'];
							if(isset $row['codTimes']){
								$cod=$row['codTimes'];
								$select2="select * from Times where codTime=$cod";
								$exec=sqlsrv_query($conn,$select2);
								$row2= sqlsrv_fetch_array($exec);
								$nome=$row2['nomeTime'];
							}
							else{
									$cod=$row['codJogador'];
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
					
					
					
 
 ?>
 
 
 
 