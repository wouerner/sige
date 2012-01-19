<?php
include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_projeto   = $_POST['id_projeto'];
$nome_projeto   = $_POST['nome_projeto'];
$url_projeto   = $_POST['url_projeto'];
$data_inicio  = $_POST['data_inicio'];
$ativo   = $_POST['ativo'];


$query = "Update tb_projeto_andamento Set 




id_projeto=  '$id_projeto',
nome_projeto= '$nome_projeto',
url_projeto= '$url_projeto',
data_inicio= '$data_inicio',
ativo= '$ativo'


Where id_projeto='$id_projeto'";

	          

$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");



?>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />



<h1 align="center" class="style1"></h1>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="titulo_principal">Cadastro Atualizado com sucesso!</h1>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1"><a href="javascript:window.close()" class="links">Voltar para tela inicial</a> </p>


<?
mysql_close($link);
?>
