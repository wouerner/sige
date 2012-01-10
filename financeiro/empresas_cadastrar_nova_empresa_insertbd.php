<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="file:///D|/CLIENTES/Paz Eterna/www.pazeterna/Templates/TEMPLATE DO SISTEMA.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sistema restrito de Gerenciamento</title>
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
	background-image: url();
}
-->
</style>
<link href="file:///D|/CLIENTES/Paz%20Eterna/www.pazeterna/css/fontes_principais.css" rel="stylesheet" type="text/css" />
<link href="file:///D|/CLIENTES/Paz%20Eterna/www.pazeterna/gerente/css_sistema.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="81" align="center" background="file:///D|/CLIENTES/Paz%20Eterna/www.pazeterna/imagens/bg_topo.jpg" class="fonte_003"><table width="369" height="37" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td align="center" valign="middle" class="fonte_003">GERENCIAMENTO RESTRITO DE <br />
EMPRESAS CONVENIADAS </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><!-- InstanceBeginEditable name="CONTEUDO DO SISTEMA" -->

<?php
include "validacao_pagina_adm.php";
include "../conexao_bd.php";

$id_categoria   = $_POST['id_categoria'];
$nome_empresa   = $_POST['nome_empresa'];
$descricoes   = $_POST['descricoes'];
$endereco   = $_POST['endereco'];
$telefones   = $_POST['telefones'];
$id_cidade   = $_POST['id_cidade'];
$estado_uf   = $_POST['estado_uf'];




$query = "INSERT INTO tb_empresas (id_categoria, nome_empresa, descricoes, endereco, telefones, id_cidade, estado_uf)


 values('$id_categoria','nome_empresa','descricoes','endereco','telefones','id_cidade','estado_uf')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />















<?
mysql_close($link);
?>










<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="fonte_003">Parcela Avulsa Cadastrada com Sucesso! </h1>
<p align="center" class="style3">&nbsp;</p>
<p align="center" class="style3"><a href="pagina_principal_02.php" class="fonte01">Voltar para tela inicial</a> </p>
<p align="center" class="style3">&nbsp;</p>
<p align="center" class="style3">&nbsp;</p>
    <!-- InstanceEndEditable --></td>
  </tr>
  <tr>
    <td background="file:///D|/CLIENTES/Paz%20Eterna/www.pazeterna/imagens/tarja_roda_pe.gif"><img src="file:///D|/CLIENTES/Paz%20Eterna/www.pazeterna/imagens/tarja_roda_pe.gif" width="1" height="32" /></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
