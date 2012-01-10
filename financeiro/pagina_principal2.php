<?php include "validacao_pagina_adm.php" ; ?>

<html>
<head>
<title>Gerenciamento</title>

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

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

	<?php include 'includes/css.inc.php' ; ?>

</head>

<body>

<div id = "sistema" class = "container">

<?php include 'includes/cabecalho.inc.php' ; ?>

		<div class = "row">	
		<div class = "span3">
		<?php	if ($nivel == 'adm') 	{
				include "menu_lateral.php";
				
				} else {
				//direciona para a página inicial dos usuários cadastrados
				include "menu_lateral_secretaria.php";
				
				} ?>
	</div>

	<div class = "span13">

<table  height="564" border="0" cellpadding="2" cellspacing="2">
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
	</table>

	</td>
      </tr>

      <tr>
        <td colspan="2" background="imagens/caixas_de_texto_px.gif"><img src="imagens/caixas_de_texto_px.gif" width="1" height="1"></td>
      </tr>
</table>
	
</div>	
</div>	
	
</body>
</html>
