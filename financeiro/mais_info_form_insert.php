<?php
include "validacao_pagina_adm.php";
include "conexao_bd.php";

$id_cli   = $_POST['id_cli'];
$titulo_hist   = $_POST['titulo_hist'];

$data_historico   = $_POST['data_historico'];
$data_hist= implode("-", array_reverse(explode("/", $data_historico)));

$descri_hist   = $_POST['descri_hist'];


$query = "INSERT INTO tb_historico (id_cli, titulo_hist, data_hist, descri_hist)


values('$id_cli','$titulo_hist','$data_hist','$descri_hist')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />



<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="titulo_principal">Esta Informa&ccedil;&atilde;o foi Cadastrada com Sucesso!</h1>
<p align="center" class="style3">



</p>
<p align="center" class="style3"><a href="javascript:window.close()" class="links">Voltar para tela inicial</a> </p>

<?
mysql_close($link);
?>
