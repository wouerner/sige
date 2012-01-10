
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />

<?php
include "../includes/validacao_pagina_adm.php";  	
include('../includes/../includes/../includes/../includes/conexao_bd.php');

$id_cob  = $HTTP_GET_VARS['id_cob'];
$id_boleto  = $HTTP_GET_VARS['id_boleto']; 



$SQL = "SELECT * FROM tb_historico_financeiro WHERE id_cob = $id_cob";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{	

$SQL2 = "SELECT * FROM tb_alunos WHERE id_aluno = $x[id_aluno]";  
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{

?>

<style type="text/css">
<!--
.style1 {color: #000099}
.style2 {
	font-size: 18;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<p align="center" class="titulo_principal">&nbsp;</p>
<p align="center" class="titulo_principal">O pagamento abaixo foi realizado?<span class="sub_titulos"><br />
</span></p>
<table width="757" height="60" border="0" align="center" cellpadding="1" bgcolor="#F5FFF4" onmouseover="this.className='fundo';" onmouseout="this.className='NULL';">
  <tr>
    <td width="268" align="center" class="fonte03"><strong><? echo "$x2[nome_completo]" ?></strong></td>
    <td width="125" align="center" class="fonte03"><strong><span class="style1"><? echo "$x[forma_pagto]"; ?></span></strong></td>
    <td width="110" align="center" class="fonte03"><strong><span class="style1"><? echo "$x[categoria]"; ?></span></strong></td>
    <td width="109" align="center" class="fonte03"><strong><span class="style1"><? echo "$x[dia_venc]"; ?></span></strong></td>
    <td width="123" align="center" class="fonte03"><strong><span class="style1">R$ <? echo "$x[valor]"; ?></span></strong></td>
  </tr>
</table>
<div align="center">
  <p class="titulo_principal"><span class="fonte01">Deseja fechar este pagamento? </span></p>
</div>
<table width="206" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="101"><p align="center" class="links style2"><a href="financeiro_boleto_gaveta_fechar_boleto.php?id_cob=<? echo "$x[id_cob]"; ?>&amp;id_boleto=<? echo "$x[id_boleto]"; ?>&amp;id_aluno=<? echo "$x[id_aluno]"; ?>" target="_self">SIM</a></p>
    </td>
    <td width="105" align="center"><span class="links style2"><a href="javascript:history.back(1)">N&Atilde;O</a></span></td>
  </tr>
</table>
<?php } ?>
<?php } ?>


<?
mysql_close($link);
?>