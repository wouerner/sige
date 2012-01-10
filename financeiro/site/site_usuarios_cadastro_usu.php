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

<?php
include "validacao_pagina_adm.php";

$nome   = $_POST['nome_completo'];
$lagradouro   = $_POST['lagradouro'];
$numero_casa   = $_POST['numero_casa'];



?>
<table width="739" border="0" cellspacing="3" cellpadding="4">
  <tr>
    <td align="center" class="titulo_principal">Cadastrar Novos Usu&aacute;rios  </td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
      <tr>
        <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100" border="0" align="center">
  <tr>
    <td>
	
	

	<form method="post" name="f1" action="site_usuarios_inserir_usu.php">

	

<table width="616" height="171" border="0" align="center">
  
  <tr>
    <td width="134" height="22" align="right" class="fonte02">Nome do Usu&aacute;rio: </td>
    <td width="472">
      <label>
        <input name="nome" type="text" class="css_form_02" id="nome" size="70" maxlength="254" />
        </label>    </td>
    </tr>
  <tr>
    <td height="23" align="right" class="fonte02">N&iacute;vel</td>
    <td width="472"><select name="nivel" class="css_form_01" id="nivel" onsubmit="return ValidaFormulario2();">
      <option value="adm">Administrador</option>
      <option value="secretaria">Secret&aacute;ria</option>
            </select></td>
  </tr>
  <tr>
    <td align="right" class="fonte02">Login</td>
    <td>
	
	

	
	<input name="email_sistema" type="text" class="css_form_02" id="email_sistema" size="18" maxlength="254"/></td>
    </tr>
  <tr>
    <td align="right" class="fonte02">Senha</td>
    <td><input name="senha_sistema" type="text" class="css_form_02" id="senha_sistema" size="18" maxlength="18" /></td>
  </tr>
  <tr>
    <td align="right" class="fonte02">Confirmar Senha::</td>
    <td><input name="conf_senha" type="text" class="css_form_02" id="conf_senha" size="18" maxlength="18" /></td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="center"><label>
<input name="Submit" type="submit" class="em_cima" value="Cadastrar Usu&aacute;rio">
    </label></td>
    </tr>
</table>
</form></td>
  </tr>
  <tr>
    <td align="center"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p></td>
  </tr>
</table>
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