<script languague="javascript">function abrirPopup(url,width,height) {window.open(url,"_blank", "toolbar=no,location=no, directories=no,status=no,menubar=no, scrollbars=yes, resizable=no, width="+width+", height="+height+", screenX=0,left=100,screenY=0,top=200");}</script>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
  <style type="text/css">
<!--
a:link {
	color: #009900;
	text-decoration: none;
}
a:visited {
	color: #009900;
	text-decoration: none;
}
a:active {
	color: #009900;
	text-decoration: none;
}
a:hover {
	color: #990000;
	text-decoration: underline;
}
body {
	margin-left: 0px;
	margin-top: 0px;
}
.style1 {color: #000099}
-->
  </style>
<?php
include "validacao_pagina_adm.php";  	
include('conexao_bd.php');

$SQL = "SELECT id_cli, count(id_cli) as total FROM tb_tickts WHERE status_tkt = 'aberto' group by id_cli" ;  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  

{

$total = $x["total"];

$SQL2 = "SELECT * FROM clientes WHERE id_cli = $x[id_cli]";  
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{

?>
<table width="460" height="17" border="0" cellpadding="1" bgcolor="#F5FFF4" onmouseover="this.className='fundo';" onmouseout="this.className='NULL';">
    <tr>
      <td class="fonte03"><strong> <a href="#topo" class="texto02" onClick="abrirPopup('tickt_listar_abertos_cada_cli.php?id_cli=<? echo "$x[id_cli]" ?>','600','550');"  title=""><? echo "$x2[nome_cli]" ?></a><span class="style1"> (<? echo "$x[total]"; ?>) </span></strong></td>
    </tr>
</table></body><?php } ?> <?php } ?>
<?
mysql_close($link);
?>