<?php
//pega sess�o id do navegador
session_start( );
$sessao = session_id();
//fim do sess�o id
//include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";


$id_aluno   = $_POST['id_aluno'];
$materia   = $_POST['materia'];
$nota   = $_POST['nota'];
$materia = $_POST['materia'];
$avaliacao = $_POST['tipo_avaliacao'];
$data = $_POST['data_avaliacao'];


$query = "INSERT INTO `tb_avaliacao`(`id`, `tipo_avaliacao`, `materia`, `data`, `nota`) VALUES ('NULL','$avaliacao','$materia','$data','$nota')"; 
					  
		$resultado = mysql_query($query)
		or die ("Houve erro na grava��o dos dadossssssssssssssssss.");
$redirecionar = "boletim_ver_adcionar_notas_Adicionar_Nota.php?materia=$materia&id_aluno=$id_aluno";
header("Location: $redirecionar");
?>
