<?php
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

	<?php include 'css.inc.php' ; ?>

</head>

<body>
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
<table width="836" height="564" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td align="center" valign="top">
	
	
	
	
	
	<table width="200" border="0" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td rowspan="3" background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" width="1" height="1"></td>
        <td background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" alt="" width="1" height="1"></td>
        <td rowspan="4" background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" alt="" width="1" height="1"></td>
      </tr>
      <tr>
        <td height="31" align="center" background="imagens/caixas_de_texto_04.gif" class="sub_titulos">PAGAMENTOS EM ABERTOS PARA O M&Ecirc;S CORRENTE </td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="812" height="133" border="0" cellspacing="2" bgcolor="#FFFFFF">
          <tr>
            <td width="469" valign="top"><iframe id="iframe" name="iframe_corpo"  src="financeiro_listar_abertos_mes_corrente.php" width="808" height="333" marginheight="0" marginwidth="0" hspace="0" vspace="0" allowtransparency="true" frameborder="0" scrolling="Yes"></iframe></td>
          </tr>
        </table>
		</td>
      </tr>
      <tr>
        <td colspan="2" background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" width="1" height="1"></td>
      </tr>
    </table>
	
	
	
	
	
	
	
	
	
	
	</td>
  </tr>
  <tr>
    <td align="center" valign="top">
	
	
	
	
	
	
	
	
	
	<table width="200" border="0" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td rowspan="3" background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" width="1" height="1"></td>
        <td background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" alt="" width="1" height="1"></td>
        <td rowspan="4" background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" alt="" width="1" height="1"></td>
      </tr>
      <tr>
        <td height="31" align="center" background="imagens/caixas_de_texto_04.gif" class="sub_titulos">PAGAMENTOS EM ATRASO</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="812" height="133" border="0" cellspacing="2" bgcolor="#FFFFFF">
          <tr>
            <td width="469" valign="top"><iframe id="iframe" name="iframe_corpo"  src="financeiro_listar_abertos_mes_passado.php" width="808" height="333" marginheight="0" marginwidth="0" hspace="0" vspace="0" allowtransparency="true" frameborder="0" scrolling="Yes"></iframe></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" width="1" height="1"></td>
      </tr>
    </table>
	
	
	
	
	
	
	
	
	
	
	</td>
  </tr>
</table>

</div>
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
