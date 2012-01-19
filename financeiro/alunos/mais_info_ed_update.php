<?php
include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_hist   = $_POST['id_hist'];
$titulo_hist   = $_POST['titulo_hist'];
$descri_hist   = $_POST['descri_hist'];

$query = "Update tb_historico Set 




id_hist=  '$id_hist',
titulo_hist= '$titulo_hist',
descri_hist= '$descri_hist'


Where id_hist='$id_hist'";

	          

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
