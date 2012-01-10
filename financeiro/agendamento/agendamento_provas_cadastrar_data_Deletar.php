<?php
include "../includes/validacao_pagina_adm.php";
include '../includes/conexao_bd.php';

$funcao = $_GET['funcao'];
$id_data = $_GET['id_data'];


$query = ("DELETE FROM tb_agenda_provas  WHERE id_data='$id_data'");
	          
$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");

header ( 'location:agendamento_provas_cadastrar_data.php' ) ;
?>
