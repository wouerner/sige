<?php
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

<table width="497" height="311" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Relat&oacute;rios de Parceiros </td>
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
    <td align="center"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="parceiros_relatorios_lista_completa_de_alunos.php" target="_blank"><strong>Lista Completa de &quot;Todos&quot; Alunos </strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="parceiros_relatorios_lista_alunos_gerada_por_data.php" target="_blank"><strong>Lista de Alunos gerada por &quot;Data&quot; </strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="parceiros_relatorios_lista_todos_alunos_documentos_incompletos.php" target="_blank"><strong>Lista de Todos os Alunos com &quot;Documentos Incompletos&quot; </strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="parceiros_relatorios_lista_todos_alunos_certificado_aguardando.php" target="_blank"><strong>Lista de Todos os Alunos com &quot;Certificado Aguardando &quot; </strong></a><a href="relatorios_listar_pagamentos_Todos_Fechados.php" target="_self"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="links">&nbsp;</td>
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