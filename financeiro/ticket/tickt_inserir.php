<?php
include "validacao_pagina_adm.php";
include "conexao_bd.php";

$id_cli   = $_POST['id_cli'];
$titulo_tkt   = $_POST['titulo_tkt'];

$data_abert   = $_POST['data_abert'];
$data_abertura = implode("-", array_reverse(explode("/", $data_abertura)));

$status_tkt   = $_POST['status_tkt'];
$nivel_prio   = $_POST['nivel_prio'];
$descricao_tkt   = $_POST['descricao_tkt'];


$query = "INSERT INTO tb_tickts(id_cli, titulo_tkt, data_abertura, status_tkt, nivel_prio, descricao_tkt)


values('$id_cli','$titulo_tkt','$data_abertura','$status_tkt','$nivel_prio','$descricao_tkt')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />



<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="titulo_principal">Este Tickt foi aberto com Sucesso!</h1>
<p align="center" class="style3">



</p>
<p align="center" class="style3"><a href="pagina_principal_02.php" class="fonte01">Voltar para tela inicial</a> </p>

<?
mysql_close($link);
?>
