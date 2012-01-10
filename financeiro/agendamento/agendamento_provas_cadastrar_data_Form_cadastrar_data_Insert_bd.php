<?php
//pega sessão id do navegador
session_start( );
$sessao = session_id();
//fim do sessão id
?>

          <?php
//include '../includes/validacao_pagina_adm.php' ;
include '../includes/conexao_bd.php';


$data_disponivel   = $_POST['data_disponivel'];
$data_disponivel2 = implode("-", array_reverse(explode("/", $data_disponivel)));


$query = "INSERT INTO tb_agenda_provas (data_disponivel) 
		
VALUES ('$data_disponivel2')";
					  
		
		$resultado = mysql_query($query)
		or die ("Houve erro na gravação dos dadossssssssssssssssss.");
		
						
mysql_close($link);
header('location:agendamento_provas_cadastrar_data.php');
exit();

?>
