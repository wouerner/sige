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

<?php include 'includes/css.inc.php' ; ?>

</head>

<body>

<div class = "container" >
<?php include 'includes/cabecalho.inc.php'?>

<div class = "row" >
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
<div class = "span13">
 
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->
<?php include "validacao_pagina_adm.php"; 

include "conexao_bd.php";

$resultado= mysql_query ("SELECT * FROM tb_dados_site WHERE id= '2'");



$linhas = mysql_num_rows ($resultado);


?>
<link href="../css_destaques.css" rel="stylesheet" type="text/css">



<?php	for($i=0; $i<$linhas; $i++)
{
$id = mysql_result ($resultado, $i, "id");
$preco_01 = mysql_result ($resultado, $i, "preco_01");
$descri_01 = mysql_result ($resultado, $i, "descri_01");		
$preco_02 = mysql_result ($resultado, $i, "preco_02");
$descri_02 = mysql_result ($resultado, $i, "descri_02");		


}
?>

        <h2>Editar Pre&ccedil;os da P&aacute;gina Principal</h2> 
	    <form method="post" action="site_precos_update.php" class = "form-stacked" >
  
          <label><span class="texto_01"><strong>C&oacute;digo: </strong></span></label>
          <?php echo "$id"; ?>

          <label><span class="texto_01">Pre&ccedil;o 01 </span></label>
          <input name="preco_01" type="text" class="css_form_02" id="preco_01"  value="<?php echo "$preco_01" ?>" size="30" maxlength="10"/>
        
        
          <label><span class="texto_01">Descri&ccedil;&atilde;o 01:</span></label>
          <td align="left"><input name="descri_01" type="text" class="css_form_02" id="descri_01"  value="<?php echo "$descri_01" ?>" size="50" maxlength="100"/>
        
        
          <label ><span class="texto_01">Pre&ccedil;o 02</span></label>
          <input name="preco_02"  type="text" class="css_form_02" id="$preco_02"  value="<?php echo "$preco_02" ?>" size="30" maxlength="10"/>
        
        
		  <label><span class="texto_01">Descri&ccedil;&atilde;o 02:</span></label>
          <input name="descri_02" type="text" class="css_form_02" id="$descri_02"  value="<?php echo "$descri_02" ?>" size="50" maxlength="100"/>
        
        
          <input name="submit" type="submit" class="em_cima btn" value="ATUALIZAR          " />
        
      </table>
      </form>
<?
mysql_close($link);
?>

<!-- InstanceEndEditable -->
</body>
</html>
