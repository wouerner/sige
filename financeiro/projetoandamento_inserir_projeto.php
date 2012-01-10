<?php
include "validacao_pagina_adm.php";
include "conexao_bd.php";

$nome_projeto   = $_POST['nome_projeto'];
$url_projeto   = $_POST['url_projeto'];

$data_inicio = implode("-", array_reverse(explode("/", $data_inicio)));

$percentual   = $_POST['percentual'];
$ativo   = $_POST['ativo'];



$query = "INSERT INTO tb_projeto_andamento(nome_projeto, url_projeto, data_inicio, percentual, ativo)


 values('$nome_projeto','$url_projeto','$data_inicio','$percentual','$ativo')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />





<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="titulo_principal">Cadastro efetuado com sucesso!</h1>
<p align="center" class="style3">&nbsp;</p>
<p align="center" class="style3"><a href="pagina_principal_02.php" class="fonte01">Voltar para tela inicial</a> </p>


<?
mysql_close($link);
?>
