<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "validacao_pagina_adm.php";
?>

<html>
<head>
<title>Gerenciamento</title>

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

<?php include 'includes/css.inc.php' ; ?>

</head>

<body>
<div class = "container" >
<?php include 'includes/cabecalho.inc.php' ; ?>

<div class = "row">
<div class = "span3" >
		<?php
		
			
						if ($nivel == 'adm')
				{
				
				include "menu_lateral.php";
				
				}
				else
				{
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				}
		
		?> 

</div>

<div class = "span13" >

<?php include "validacao_pagina_adm.php"; 

include "conexao_bd.php";

$resultado= mysql_query ("SELECT * FROM tb_dados_site WHERE id= '1'");

$linhas = mysql_num_rows ($resultado);

?>
<link href="../css_destaques.css" rel="stylesheet" type="text/css">

<?php	for($i=0; $i<$linhas; $i++)
{
$id = mysql_result ($resultado, $i, "id");
$telefone = mysql_result ($resultado, $i, "telefone");
$e_mail = mysql_result ($resultado, $i, "e_mail");		
$endereco = mysql_result ($resultado, $i, "endereco");

}
?>

<table width="111" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Editar Endere&ccedil;o, Telefone e E-mail. </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><form method="post" action="site_endereco_update.php">
      <table width="633" height="279" border="0" align="center">
        <tr>
          <td width="210" align="right" class="fonte02"><strong>C&oacute;digo: </strong></td>
          <td colspan="3"><?php echo "$id"; ?></td>
        </tr>
        <tr>
          <td align="right" class="fonte02">Telefone:</td>
          <td colspan="3"><input name='telefone' type="text" class="css_form_02" id="$telefone"  value="<?php echo "$telefone" ?>" size="70" maxlength="254"/></td>
        </tr>
        <tr>
          <td align="right" class="fonte02">E-mail:</td>
          <td colspan="3"><input name="e_mail" type="text" class="css_form_02" id="$e_mail"  value="<?php echo "$e_mail"?>" size="70" maxlength="254"/></td>
        </tr>
        <tr>
          <td align="right" class="fonte02">Endere&ccedil;o:</td>
          <td colspan="3"><input name="endereco" type="text" class="css_form_02" id="$endereco"  value="<?php echo "$endereco" ?>" size="70" maxlength="254"/></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td width="169" align="center"><input name="submit" type="submit" class="em_cima" value="          ATUALIZAR          " />
          </td>
          <td width="240" colspan="2">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td align="center"><p>&nbsp;</p>
      <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p></td>
  </tr>
</table>

<?
mysql_close($link);
?>
<!-- InstanceEndEditable --></td>
      </tr>
    </table></td>
    </table><
  </tr>
</table>
</div>
</div>
</body>
</html>
