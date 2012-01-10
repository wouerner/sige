<?php
include "validacao_pagina_adm.php"; 
include "conexao_bd.php";
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


<?php 

$resultado= mysql_query ("SELECT * FROM corpo_contrato WHERE id_contrato= 1");



$linhas = mysql_num_rows ($resultado);


?>

<div class = "span13">
              <h2>Editar Cl&aacute;usulas do Contrato</h2>

            <?php	for($i=0; $i<$linhas; $i++)
{
$id_contrato = mysql_result ($resultado, $i, "id_contrato");
$sub_titulo_01 = mysql_result ($resultado, $i, "sub_titulo_01");
$sub_titulo_02 = mysql_result ($resultado, $i, "sub_titulo_02");
$corpo_contrato = mysql_result ($resultado, $i, "corpo_contrato");		
$dia_hora_simulado = mysql_result ($resultado, $i, "dia_hora_simulado");


}
?>
            <form method="post" action="site_contrato_update.php" class = "form-stacked">
                  <label> <strong>Sub T&iacute;tulo  : </strong></label>
		  <input type="hidden" name=id_contrato value="<?php echo "$id_contrato" ?>"/>
		  <input name="sub_titulo_01" type="text" class="css_form_01" id="sub_titulo_01"  value="<?php echo "$sub_titulo_01" ?>" size="100" maxlength="254"/>                  
                 <label> <span class="formulario"><strong> Endere&ccedil;o: </strong></span></label>
		 <input name="sub_titulo_02" type="text" class="css_form_02" id="sub_titulo_02"  value="<?php echo "$sub_titulo_02" ?>" size="100" maxlength="254"/> </td>
                 <label> <strong>Hor&aacute;:</strong></label>
                  <input name="dia_hora_simulado"type="text" class="css_form_02" id="dia_hora_simulado"  value="<?php echo "$dia_hora_simulado" ?> " size="100" maxlength="254"/>
                  <label><strong>Cl&aacute;usulas:</strong></label>
               <textarea name="corpo_contrato" cols="75" rows="25" class="css_form_02 span10"><?php echo "$corpo_contrato" ?></textarea>
                  <label>
                    <input name="submit" type="submit" class="em_cima btn" value="          ATUALIZAR          " />
                  </label>
              </table>
            </form>
        <?
mysql_close($link);
?>

</div>
</div>
</table>
</body>
</html>
