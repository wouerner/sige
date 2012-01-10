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
<?php include 'includes/cabecalho.inc.php' ; ?>
<div class = "span3" >
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
<div class ="span13" >
 </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->

<?php include "validacao_pagina_adm.php"; ?>

<table width="605" border="0" align="center">
  <tr>
    <td width="652" height="52" align="center" class="style11"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Lista de &quot;Todos os Usu&aacute;rios&quot; cadastrados no Sistema </td>
      </tr>
      <tr>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="57" align="center" class="style5"><table width="196" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="middle"><a href="site_usuarios_cadastro_usu.php"><img src="imagens/add_usuario.gif" width="25" height="25" border="0"></a></td>
        <td valign="middle"><a href="site_usuarios_cadastro_usu.php"><span class="links">Adcionar + Usu&aacute;rios </span></a></td>
      </tr>
    </table>      
      </td>
  </tr>
  <tr>
    <td height="163">
	
      <p>
		<?

// Fazendo a conexão com o servidor MySQL
include "conexao_bd.php";

// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
$query = "SELECT * FROM senhas_adm";
$resultado = mysql_query($query,$link);
while ($linha = mysql_fetch_array($resultado)) {





?>



<table width="655"  align="center" height="170" border="0" cellpadding="0" cellspacing="3">
  <tr>
    <td height="25" colspan="2" valign="middle" class="titulo_01"><span class="fonte02">User:</span> <span class="sub_titulos"><? echo $linha['nome']; ?></span></td>
    </tr>
  <tr>
    <td height="19" colspan="2" valign="middle" class="titulo_01"><span class="fonte02">Login:</span> <span class="fonte04"><? echo $linha['email_sistema']; ?></span></td>
    </tr>
  <tr>
    <td height="8" colspan="2" class="titulo_01"><span class="fonte02">Senha:</span> <span class="fonte04"><? echo $linha['senha_sistema']; ?></span></td>
    </tr>
  <tr>
    <td height="8" colspan="2" class="titulo_01"><span class="fonte02">N&iacute;vel:</span> <span class="links"><strong><? echo $linha['nivel']; ?></strong></span></td>
  </tr>
  
  <tr>
    <td width="274" height="40" align="center" valign="middle" class="titulo_01"><p>
	
	<a href='site_usuarios_editar_usu.php?id_adm=<? echo $linha['id_adm']; ?>' class="links"><img src="imagens/ico_editar.gif" width="16" height="15" border="0">EDITAR USU&Aacute;RIO</a>      </td>
    <td width="328" align="center" valign="middle" class="titulo_01"><a href='site_usuarios_excluir_usu.php?id_adm=<? echo $linha['id_adm']; ?>' class="links"><img src="imagens/ico_excluir.gif" width="14" height="13" border="0">Excluir Usu&aacute;rio </a></td>
  </tr>
  <tr>
    <td height="21" colspan="2" align="center" valign="middle" class="titulo_01"><a href='excluir_usu.php?id_adm=<? echo $linha['id_adm']; ?>'>
      <hr />
    </a></td>
  </tr>
   <?
}
?>
</table>

		
		
		
		    
    </p></td>
  </tr>
  <tr>
    <td>
	
	
	
<?
mysql_close($link);
?></td>
  </tr>
  <tr>

<!-- InstanceEndEditable --></td>
    </table></td>
  </tr>
</table>
</body>
</html>
