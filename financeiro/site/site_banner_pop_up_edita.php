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
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (LAYOUT DO MEU SISTEMA222.psd) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0" background="imagens/bg_01.gif">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="988" align="center" valign="top"><table width="988" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td colspan="2" background="imagens/layoyt_a_01.jpg"><table width="987" height="161" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="375" height="39" valign="top">&nbsp;</td>
            <td width="638" align="center" valign="middle"><table width="96%" height="68" border="0">
              <tr>
                <td width="91%" align="center"><span class="titulo_principal style1">SISTEMA PARA GEST&Atilde;O FINANCEIRA E <br>
                  CONTROLE DE ALUNOS </span></td>
                <td width="9%" align="center"><a href="logout_adm.php"><img src="imagens/icone_cadeado.gif" alt="Fechar o Sistema" width="39" height="45" border="0" title="Fechar o Sistema"></a></td>
              </tr>
            </table>              </td>
          </tr>
          <tr>
            <td height="41">&nbsp;</td>
            <td align="center"><?php include "formulario_de_busca_de_alunos.php"; ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="149" valign="top">
		
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
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->
<?php include "validacao_pagina_adm.php"; 

include "conexao_bd.php";

$resultado= mysql_query ("SELECT * FROM tb_dados_site WHERE id= '5'");



$linhas = mysql_num_rows ($resultado);


?>

<?php	for($i=0; $i<$linhas; $i++)
{
$id = mysql_result ($resultado, $i, "id");
$titulo_pop_up = mysql_result ($resultado, $i, "titulo_pop_up");
$texto1_pop_up = mysql_result ($resultado, $i, "texto1_pop_up");		
$texto2_pop_up = mysql_result ($resultado, $i, "texto2_pop_up");


}
?>
<table width="582" height="180" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Alterar   Banner PopUp </td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
            <tr>
              <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><form method="post" action="site_banner_pop_up_update.php"><table width="594" height="195" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="234" align="right" class="fonte02"><span class="texto_01"><strong>C&oacute;digo: </strong></span></td>
        <td width="230"><?php echo "$id"; ?></td>
      </tr>
      <tr>
        <td align="right" class="fonte02"><span class="texto_01">T&iacute;tulo:</span></td>
        <td><input name="titulo_pop_up" type="text" class="css_form_02" id="titulo_pop_up"  value="<?php echo "$titulo_pop_up" ?>" size="70" maxlength="254"/></td>
      </tr>
      <tr>
        <td align="right" class="fonte02"><span class="texto_01">Texto do Meio:</span></td>
        <td><input name='texto1_pop_up' type="text" class="css_form_02" id="texto1_pop_up"  value="<?php echo "$texto1_pop_up" ?>" size="70" maxlength="254"/></td>
      </tr>
      <tr>
        <td align="right" class="fonte02"><span class="texto_01">Roda P&eacute; :</span></td>
        <td><input name="texto2_pop_up"  type="text" class="css_form_02" id="$texto2_pop_up"  value="<?php echo "$texto2_pop_up" ?>" size="70" maxlength="254"/></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="submit" type="submit" class="em_cima" value="          ATUALIZAR          " /></td>
        </tr>
    </table>
      </form></td>
  </tr>
  <tr>
    <td align="center"><p>&nbsp;</p>
      <p>&nbsp;</p>
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