<?php

//include "../includes/validacao_pagina_adm.php";
include "../includes/../includes/conexao_bd.php";


$materia = $_POST['materia'];
$id_aluno = $_POST['id_aluno'];

$query	= "DELETE FROM tb_materia WHERE id = ".$materia;

mysql_query($query) or die ('não foi possivel deletar materia.');

header('Location: boletim_ver_adcionar_notas.php?id_aluno='.$id_aluno); 
?>
