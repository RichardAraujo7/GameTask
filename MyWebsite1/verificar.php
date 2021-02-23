
<?php 
// Inicia sessões 
session_start(); 
 
// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION['email']) || !isset($_SESSION['nick'])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header("Location: index2.php?Efetue o login");
exit; 
//require "verifica.php";  codigo de verificar
} 
?>
