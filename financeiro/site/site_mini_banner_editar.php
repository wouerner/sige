<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "validacao_pagina_adm.php";
?>

<html><!-- InstanceBegin template="/Templates/pagina_principal_do_sistema.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerenciamento</title>
<!-- InstanceEndEditable -->

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(imagens/background.gif);
	background-repeat: repeat-y;
	background-color: #FFFFFF;
}
-->
</style>


<script type="text/javascript" language="JavaScript1.2" src="Resource/js/stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2">
<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/css_formularios.css" rel="stylesheet" type="text/css">
<link href="css/css_links.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->


<?php include 'includes/css.inc.php' ; ?>
</head>


<body>

<div class = "container">
<?php include 'includes/cabecalho.inc.php' ; ?>

<div class = "row" >
<div class = "span3">
		<?php
						if ($nivel == 'adm')
				{
				include "menu_lateral.php";
				
				}
				else
				{
				//direciona para a p�gina inicial dos usu�rios cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
?>
</div>
<div class = "span13">

        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->
<?php include "validacao_pagina_adm.php"; 

include "conexao_bd.php";

$resultado= mysql_query ("SELECT * FROM tb_dados_site WHERE id= '7'");



$linhas = mysql_num_rows ($resultado);


?>
<link href="../css_destaques.css" rel="stylesheet" type="text/css">



<?php	for($i=0; $i<$linhas; $i++)
{
$id = mysql_result ($resultado, $i, "id");
$mini_banner_01 = mysql_result ($resultado, $i, "mini_banner_01");
$mini_banner_02 = mysql_result ($resultado, $i, "mini_banner_02");
}
?>
<table width="332" height="250" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Alterar dados do  Banner Lateral Esquerda </td>
      </tr>
      <tr>
  </tr>
  <tr>
    <td align="center"><form method="post" action="site_mini_banner_update.php">
      <table width="514" height="181" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="109" align="right" class="fonte02"><span class="texto_01"><strong>C&oacute;digo: </strong></span></td>
        <td width="405"><?php echo "$id"; ?></td>
      </tr>
      <tr>
        <td align="right" class="fonte02"><span class="texto_01">Titulo:</span></td>
        <td><input name="mini_banner_01" type="text" class="css_form_02" id="mini_banner_01"  value="<?php echo "$mini_banner_01" ?>" size="70" maxlength="254"/></td>
      </tr>
      <tr>
        <td align="right" class="fonte02"><span class="texto_01">Descri&ccedil;&atilde;o:</span></td>
        <td><textarea name="mini_banner_02" cols="70" rows="5" class="css_form_02" id="mini_banner_02"><?php echo "$mini_banner_02" ?></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="submit" type="submit" class="em_cima" value="          ATUALIZAR          " /></td>
        </tr>
    </table>
      </form></td>
  </tr>
  <tr>
    <td align="center"><p>&nbsp;</p>
      <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a> </p></td>
  </tr>
</table>
<?
mysql_close($link);
?>
<!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="35" colspan="2" align="center" valign="middle"><?php include "roda_pe.php"; ?></td>
        </tr>
    </table></td>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>
