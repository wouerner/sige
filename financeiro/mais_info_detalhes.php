<?php
include "validacao_pagina_adm.php";
include "conexao_bd.php";

$id_hist = $HTTP_GET_VARS['id_cli'];
$id_hist = $HTTP_GET_VARS['id_hist'];

$resultado= mysql_query ("SELECT * FROM clientes WHERE id_cli = '$id_cli'");
$linhas = mysql_num_rows ($resultado);




?>

<?php	for($i=0; $i<$linhas; $i++)
{
$nome_cli = mysql_result ($resultado, $i, "nome_cli");
}
?>



<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	color: #006633;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #006600;
}
a:hover {
	text-decoration: underline;
	color: #990000;
}
a:active {
	text-decoration: none;
	color: #006600;
}
-->
</style><h1 align="center" class="titulo_principal">Informa&ccedil;&otilde;es Complementares de: </h1>
<p align="center" class="titulo_principal"><strong><?php echo "$nome_cli" ?></strong></p>


<?
$SQL = "SELECT * FROM tb_historico WHERE id_hist = '$id_hist'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{
?>
<table width="410" border="0" cellpadding="1" cellspacing="3">
    <tr>
      <td bgcolor="#F5FFF4" class="fonte03"><strong class="sub_titulos"><img src="imagens/ico_seta.gif" width="15" height="15" /> <? echo "$x[titulo_hist]" ?></strong></td>
    </tr>
    <tr>
      <td bgcolor="#F5FFF4" class="fonte03"><strong><? echo "$x[data_hist]" ?></strong></td>
    </tr>
    <tr>
      <td bgcolor="#F5FFF4" class="fonte03"><strong><? echo "$x[descri_hist]" ?></strong></td>
    </tr>
</table>
<?php } ?>
<br />
<table width="410" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="links"><a href="mais_info_edit.php?id_hist=<? echo $id_hist ?>" class="links">Editar Estas Informa&ccedil;&otilde;es  </a><a href="editar_cliente.php?id_cli=<? echo "$x[id_cli]" ?>#"></a></td>
    <td align="center" class="links"><a href="javascript:history.back(1)" class="links">Voltar para tela Anterior </a><a href="editar_cliente.php?id_cli=<? echo "$x[id_cli]" ?>#"></a></td>
  </tr>
</table>
<a href="pagina_principal_02.php" class="links"><br />
</a>
<?
mysql_close($link);
?>
