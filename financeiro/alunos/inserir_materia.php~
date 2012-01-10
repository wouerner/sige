<?php


//validação e conexão com bando de dados
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";
//$id_aluno   = $_GET['id_aluno'];


$materia = $_POST['materia'];
$ensino = $_POST['tipo_ensino'];

$query = "INSERT INTO `tb_materias`(`id`, `materia`, `avaliacao`, `tipo_ensino`) VALUES ('null','$materia','null',$ensino) ";
echo $query;
mysql_query($query);

?>
