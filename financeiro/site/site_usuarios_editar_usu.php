<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";
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

            <?php include "../includes/formulario_de_busca_de_alunos.php"; ?>


<div class = "row" >

	<div class = "span3" >
		<?php	include "../includes/menu_lateral.php"; ?>

	</div>

<?


$id_adm = $_GET['id_adm'];
$resultado= mysql_query ("SELECT * FROM senhas_adm  WHERE id_adm= $id_adm");



$linhas = mysql_num_rows ($resultado);


?>




        <h4>Alterar  Senha do Usu&aacute;rio</h4>
	
      <p>
        <?php	for($i=0; $i<$linhas; $i++)
{
$id_adm = mysql_result ($resultado, $i, "id_adm");
$nome = mysql_result ($resultado, $i, "nome");
$email_sistema = mysql_result ($resultado, $i, "email_sistema");
$senha_sistema = mysql_result ($resultado, $i, "senha_sistema");		

}
?>    
</p>



<form method="post" action="site_usuarios_update_usu.php">


      <table width="508" height="221" border="0" align="center">
        <tr>
          <td width="200" align="right" class="fonte02"><strong>Nome:</strong></td>
          <td width="505">
           
		   
		   <?php echo "<input type='hidden' name=id_adm value='$id_adm'>" ?>		   
		   
		   <?php echo "$nome" ?>
                     </td>
        </tr>
        <tr>
          <td align="right" class="fonte02"><span class="formulario"><strong> Login:</strong></span></td>
          <td>
		  
<?php echo "$email_sistema" ?>		  </td>
        </tr>
        <tr>
          <td align="right" class="fonte02"><strong>Alterar Senha:</strong></td>
          <td><input name="senha_sistema" type="text" class="css_form_02" id="$senha_sistema"  value="<?php echo "$senha_sistema" ?>" size="17" maxlength="10"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><label>




          <input name="submit" type="submit" class="em_cima" value="          ATUALIZAR          " />
          </label></td>
          </tr>
      </table>   
	  </form>
<?
mysql_close($link);
?>

</div>
</div>

</body>
</html>
