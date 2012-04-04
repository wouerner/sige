<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "../includes/validacao_pagina_adm.php";
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
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->


<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container" >

<?php include '../includes/cabecalho.inc.php' ; ?>

<div class = "row" >
<div class = "span3" >		
		<?php	include "../includes/menu_lateral.php" ; ?> 

</div>
<div class = "span13" >
    <h4>Cadastrar Novos Usu&aacute;rios </h4>
	

	<form method="post" name="f1" action="site_usuarios_inserir_usu.php" class = "form-stacked" >

	

      <label>
    Nome do Usu&aacute;rio: 
        <input name="nome" type="text" class="css_form_02" id="nome" size="70" maxlength="254" />
        </label>
    
<label>  
    N&iacute;vel
    <select name="nivel" class="css_form_01" id="nivel" onsubmit="return ValidaFormulario2();">
      <option value="adm">Administrador</option>
      <option value="fin">Financeiro</option>
      <option value="sec">Secretaria</option>
      <option value="atm">Atendimento</option>
            </select>
  </label>
 
   <label>
    Login
	<input name="email_sistema" type="text" class="css_form_02" id="email_sistema" size="18" maxlength="254"/>
</label>


<label>Senha
    <input name="senha_sistema" type="text" class="css_form_02" id="senha_sistema" size="18" maxlength="18" />
</label>

<label>
    Confirmar Senha:
 <input name="conf_senha" type="text" class="css_form_02" id="conf_senha" size="18" maxlength="18" />
</label>
    
<label>
<input name="Submit" type="submit" class=" btn em_cima" value="Cadastrar Usu&aacute;rio">
    </label>
</form>

</div>
</div>
</body>
</html>
