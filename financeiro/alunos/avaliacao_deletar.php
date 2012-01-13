<?php

//include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$avaliacao = $_GET['avaliacao'];
$materia = $_GET['materia'];
$id_aluno = $_GET['id_aluno'];

$query = "DELETE FROM tb_avaliacao WHERE tb_avaliacao.id =".$avaliacao ;
mysql_query($query) or die("não foi possivel deletar a avaliação");

$redirecionar = "boletim_ver_adcionar_notas_Adicionar_Nota.php?materia=$materia&id_aluno=$id_aluno";
header("Location: $redirecionar");
?>
