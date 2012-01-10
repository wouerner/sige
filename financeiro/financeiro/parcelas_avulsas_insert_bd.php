<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/../includes/../includes/../includes/conexao_bd.php";

$id_cli   = $_POST['id_cli'];

$dia_venc = implode("-", array_reverse(explode("/", $dia_venc)));


$forma_pagto   = $_POST['forma_pagto'];
$categoria   = $_POST['categoria'];
$valor   = $_POST['valor'];
$status   = $_POST['status'];
$pagou_dia = implode("-", array_reverse(explode("/", $pagou_dia)));
$cob_enviada   = $_POST['cob_enviada'];
$observacao   = $_POST['observacao'];




$query = "INSERT INTO tb_historico_financeiro(id_cli, dia_venc, forma_pagto, categoria, valor, status, pagou_dia, cob_enviada, observacao )


 values('$id_cli','$dia_venc','$forma_pagto','$categoria','$valor','$status','$pagou_dia','$cob_enviada','$observacao')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />















<?
mysql_close($link);
?>










<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="style1">&nbsp;</h1>
<h1 align="center" class="titulo_principal">Parcela Avulsa Cadastrada com Sucesso! </h1>
<p align="center" class="style3">&nbsp;</p>
<p align="center" class="style3"><a href="pagina_principal_02.php" class="fonte01">Voltar para tela inicial</a> </p>
