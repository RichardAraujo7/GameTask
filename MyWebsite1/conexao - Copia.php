<?php  

	$server = "LAB02-15";
$connectionInfo = array( "Database"=>"GTcadastro", "UID"=>"xpto", "PWD"=>"123456");
$conn = sqlsrv_connect( $server, $connectionInfo );

if($conn){
    echo " conexão efetuada";
}
else{
    echo "falha na conexão";
	die(print_r(sqlsrv_errors(),true));
}

	?> 
