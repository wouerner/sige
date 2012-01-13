<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$nome_cli   = $_POST['nome_cli'];
$responsavel   = $_POST['responsavel'];
$telefones   = $_POST['telefones'];
$cnpj_cpf   = $_POST['cnpj_cpf'];
$endereco   = $_POST['endereco'];
$e_mail   = $_POST['e_mail'];
$senha_cli   = $_POST['senha_cli'];
$url_cli   = $_POST['url_cli'];
$contrato_cli   = $_POST['contrato_cli'];
$outros_contatos   = $_POST['outros_contatos'];









$query = "INSERT INTO clientes(nome_cli, responsavel, telefones, cnpj_cpf, endereco, e_mail, senha_cli, url_cli, contrato_cli, outros_contatos)


 values('$nome_cli','$responsavel','$telefones','$cnpj_cpf','$endereco','$e_mail','$senha_cli','$url_cli','$contrato_cli','$outros_contatos')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>

<?
mysql_close($link);
?>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />


























<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="titulo_principal">Cadastro efetuado com sucesso!</h1>
<p align="center" class="style3">&nbsp;</p>
<p align="center" class="style3"><a href="pagina_principal_02.php" class="fonte01">Voltar para tela inicial</a> </p>
