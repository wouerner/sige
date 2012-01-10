
<table width="772" height="549" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
  <tr>
    <td height="5" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="5" rowspan="2">&nbsp;</td>
    <td width="762" height="38">&nbsp;</td>
    <td width="5" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="27" valign="top" background="../imagens/corpo_site_05.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="101" colspan="3" valign="top" background="../imagens/corpo_site_066.gif">

<?php
include "validacao_pagina_adm.php"; 
include "conexao_bd.php";


$id   = $_POST['id'];
$contato_tel_01   = $_POST['contato_tel_01'];
$contato_email   = $_POST['contato_email'];
$contato_sites  = $_POST['contato_sites'];







$query = "Update tb_dados_site Set 


contato_tel_01   = '$contato_tel_01',
contato_email   = '$contato_email',
contato_sites  = '$contato_sites'



Where id ='6'";

	          

$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");



?>




      <style type="text/css">
<!--
.style1 {color: #0294c4}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
}
a:link {
	color: #0294c4;
	text-decoration: none;
}
a:visited {
	color: #0294c4;
	text-decoration: none;
}
a:hover {
	color: #0294c4;
	text-decoration: underline;
}
a:active {
	color: #0294c4;
	text-decoration: none;
}
.style3 {color: #FF0000; }
-->
      </style>
      <h1 align="center" class="style3">Cadastro Atualizado com sucesso!</h1>
      <p align="center" class="style1">&nbsp;</p>      <p align="center" class="style1">&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<div align="center"><a href="http://www.rsmaster.com" target="_blank" class="menu_01"></a></div>


<?
mysql_close($link);
?>


</body>
</html>
