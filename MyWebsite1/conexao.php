<?php  

	$server = "INFO03-19\SQLEXPRESS";
$connectionInfo = array( "Database"=>"BancoTCC", "UID"=>"xpto", "PWD"=>"123456");
$conn = sqlsrv_connect( $server, $connectionInfo );

if($conn){
    echo " conexão efetuada";
}
else{
    echo "falha na conexão";
	die(print_r(sqlsrv_errors(),true));
}

	?> 
