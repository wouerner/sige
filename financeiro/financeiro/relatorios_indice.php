<?php
include "../includes/validacao_pagina_adm.php";
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
<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container" >

<?php include '../includes/cabecalho.inc.php' ; ?>

<div class = "row" >
	<div class = "span3" >
        <td width="149" valign="top">
		
		<?php
		
			
						if ($nivel == 'adm')
				{
				
				
				
				include ""../includes/menu_lateral.php"";
				
				
				}
				else
				{
				
				
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
?> 
</div>

<div class = "span13" >

<table >
      <tr>
        <td align="center"><span class="titulo_principal">RELAT&Oacute;RIOS FINANCEIROS </span></td>
      </tr>
</table>

<table>
  <tr>
    <td align="center"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="relatorios_listar_pagamentos_abertos_fechados_gaveta_Por_Periodo.php" target="_self"><strong>Relat&oacute;rio por Per&iacute;odo </strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="relatorios_listar_pagamentos_abertos_fechados_gaveta_Mes_Corrente.php?status_pagt=Aberto" target="_self"><strong>Todos Pagamentos &quot;Abertos&quot; deste M&ecirc;s </strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="relatorios_listar_pagamentos_abertos_fechados_gaveta_Mes_Corrente.php?status_pagt=Fechado" target="_self"><strong>Todos Pagamentos &quot;Fechados&quot; deste M&ecirc;s </strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="relatorios_listar_pagamentos_Todos_Abertos_Fechados_Gaveta.php?status_pagt=Aberto" target="_self"><strong>Todos Pagamentos &quot;Abertos&quot;</strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="relatorios_listar_pagamentos_Todos_Abertos_Fechados_Gaveta.php?status_pagt=Fechado" target="_self"><strong>Todos Pagamentos &quot;Fechados&quot;</strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="relatorios_listar_pagamentos_abertos_fechados_gaveta_Mes_Corrente.php?status_pagt=Gaveta" target="_self"><strong>Todos Pagamentos &quot;Gaveta&quot; deste M&ecirc;s </strong></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" class="links"><table width="392" height="24" border="0" cellpadding="0" cellspacing="0" class="fundo">
      <tr>
        <td align="center"><a href="relatorios_listar_pagamentos_Todos_Abertos_Fechados_Gaveta.php?status_pagt=Gaveta" target="_self"><strong>Todos Pagamentos &quot;Gaveta&quot;</strong></a></td>
      </tr>
    </table></td>
  </tr>
</table>

<!-- InstanceEndEditable --></td>
      </tr>
    </table></td>
    </table></td>
  </tr>
</table>
</body>
</html>
