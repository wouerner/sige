<?php 

//include "validacao_pagina_aluno.php"; 
include "../includes/conexao_bd.php";


$id = $_GET['id'];

$sql = "DELETE FROM `ceban`.`tb_agenda_provas_alunos_agendados` WHERE `tb_agenda_provas_alunos_agendados`.`id` = $id";


$resultado = mysql_query($sql) or die("não foi possivel excluir");


header("location:agendamento_provas_listar_alunos_agendados.php");
exit();
?>
