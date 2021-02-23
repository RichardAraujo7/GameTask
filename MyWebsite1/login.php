<?php
	session_start();
		//conexão
		include("conexao.php");
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	if(empty($_POST['email']) || empty($_POST['senha']))
	{
		// "Preencha os campos!";
			header("Location: index2.php?erro=preencha os campos");
	}
	else
	{
		$query = "SELECT * FROM Jogador WHERE emailJogador='$email' AND
			senhaJogador='$senha' ";
		$result = sqlsrv_query($conn, $query); 

		if(sqlsrv_has_rows($result)!=1)
		{
			$core = "SELECT * FROM Times WHERE emailTime='$email' AND
			senhaTime='$senha' ";
			$res=sqlsrv_query($conn, $core); 
			
			if(sqlsrv_has_rows($res) != 1)
			{
				//	"dados não encontrados";
				header("Location: index2.php?erro=dados não encontrados 1");
				die();
			}
			else
			{
				
			while($row = sqlsrv_fetch_array($result))
			{
				$_SESSION['nick'] = $row['nomeTime'];
				$_SESSION['nomed'] = $row['nomeDono'];
				$_SESSION['senhat'] = $row['senhaTime'];
				$_SESSION['datad'] = $row['dataNascDono'];
				$_SESSION['cidade'] = $row['cidadeDono'];
				$_SESSION['estado'] = $row['estadoDono'];
				$_SESSION['likes'] = $row[' likesTime'];
				$_SESSION['email'] = $row[' emailDono'];
				$_SESSION['descricao'] ="";
				$_SESSION['cod'] =$row['codTime'];
				$_SESSION['perfil'] ="p1";
			}
			#redirects user
			header("Location: pgprincipal.php");
			die();
			}
		}	
		if(sqlsrv_has_rows($result) != 1)
		{
			//"dados não encontrados";
			header("Location: index2.php?erro=dados não encontrados 2");
			die();
		}
		else
		{
			while($row = sqlsrv_fetch_array($result))
			{
				$_SESSION['nome'] = $row['nomeJogador'];
				$_SESSION['email'] = $row['emailJogador'];
				$_SESSION['nick'] = $row['nickJogador'];
				$_SESSION['data'] = $row['dataNascJogador'];
				$_SESSION['cidade'] = $row['cidadeJogador'];
				$_SESSION['estado'] = $row['estadoJogador'];
				$_SESSION['likes'] = $row[' likesJogador'];
				$_SESSION['descricao'] ="";
				$_SESSION['cod'] =$row['codJogador'];
				$_SESSION['perfil'] ="p1";
				$_SESSION['d'] =true;
			}
			#redirects user
			header("Location: pgprincipal.php");
			die();
		}
	}
?>
