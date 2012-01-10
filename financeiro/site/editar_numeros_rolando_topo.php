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
<div class = "container" >
<?php include 'includes/cabecalho.inc.php' ; ?>
<div class = "span3">
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
 </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->

<?php include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$resultado= mysql_query ("SELECT * FROM tb_dados_site WHERE id= '6'");



$linhas = mysql_num_rows ($resultado);


?>

<table width="800" border="0" align="center">
  <tr>
    <td align="center" class="titulo_principal"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Editar Rolando no Topo </td>
    </table>
      </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="160" align="center">
	
        <?php	for($i=0; $i<$linhas; $i++)
{
$id = mysql_result ($resultado, $i, "id");
$contato_tel_01 = mysql_result ($resultado, $i, "contato_tel_01");



}
?>    

  

  
<form method="post" action="editar_numeros_rolando_topo_Update.php">
  
  
  
      <p><span class="links2">C&oacute;digo:</span> <?php echo "$id"; ?>        </p>
      <p><span class="links2">Telefones</span>:
        
        <?php echo "<input name='contato_tel_01'  value='$contato_tel_01' type='text' id='$contato_tel_01' size='70' maxlength='254'/>" ?>        </p>
      <p>&nbsp;</p>
      <p>
        <input name="submit" type="submit" value="          ATUALIZARR          " />
        
      </p>
</form>
	    
	
	
	
	
	
	
</td>
  </tr>
  <tr>
    <td>
	
	
	
<?
mysql_close($link);
?></td>
</table>

</body>
</html>
