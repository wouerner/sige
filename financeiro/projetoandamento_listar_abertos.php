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

<table width="785" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="775" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4FFFA">
      <tr >
        <td width="130" align="center" class="fonte03"><strong>NOME</strong></td>
        <td width="238" align="center" class="fonte03"><strong>URL</strong></td>
        <td width="92" align="center" class="fonte03"><strong>IN&Iacute;CIO</strong></td>
        <td width="291" align="center" class="fonte03"><strong>ANDAMENTO</strong><strong></strong></td>
        <td width="24" align="center" class="fonte03">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
	
	
<?php
include "validacao_pagina_adm.php";  	
include('conexao_bd.php');

$SQL = "SELECT * FROM tb_projeto_andamento WHERE ativo = 'Sim'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{
?>






<table width="775" height="17" border="0" cellpadding="1" bgcolor="#F5FFF4" onmouseover="this.className='fundo';" onmouseout="this.className='NULL';">
      <tr>
        <td width="127" class="fonte03"><strong><? echo "$x[nome_projeto]" ?></strong></td>
        <td width="233" align="left" class="fonte03"><strong><span class="style1"><a href="<? echo "$x[url_projeto]"; ?>" target="_blank"><? echo "$x[url_projeto]"; ?></a></span></strong></td>
        <td width="88" align="center" class="fonte03"><strong><span class="style1"><? echo "$x[data_inicio]"; ?></span></strong></td>
        <td width="287" class="fonte03"><table width="285" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="232"><strong><span class="fonte02"><img src="imagens/px_porcentagem.gif" width="<? echo "$x[percentual]"; ?>%" height="13" /> </span></strong></td>
            <td width="53" align="center" class="fonte02"><span class="links"><a href="projetoandamento_aumentar_diminuir_porcentagem.php?id_projeto=<? echo "$x[id_projeto]" ?>&funcao=diminuir">-</a></span> <? echo "$x[percentual]"; ?>% <span class="links"><a href="projetoandamento_aumentar_diminuir_porcentagem.php?id_projeto=<? echo "$x[id_projeto]" ?>&amp;funcao=aumentar">+</a></span> </td>
          </tr>
        </table></td>
        <td width="18" align="right" class="fonte03"><p><strong><a href="#topo" class="texto02" onClick="abrirPopup('projetoandamento_editar_fechar_projeto.php?id_projeto=<? echo "$x[id_projeto]" ?>','700','550');"  title=""><img src="imagens/ico_editar.gif" width="20" height="19" border="0" /></a></strong></p>          </td>
      </tr>
    </table>
<?php } ?>


<?
mysql_close($link);
?>


</td>
  </tr>
</table>

</body>
