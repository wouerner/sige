<?php include '../includes/validacao_pagina_adm.php' ; ?>

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

	<?php include '../includes/css.inc.php' ; ?>

</head>

<body>

<div id = "sistema" class = "container">

<?php include '../includes/cabecalho.inc.php' ; ?>

		<div class = "row">	
		<div class = "span2">
	<?php			include "../includes/menu_lateral.php"; ?>
				
	</div>

	<div class = "span13">

        	<h4>PAGAMENTOS EM ABERTOS PARA O M&Ecirc;S CORRENTE </h4> 
			<iframe id="iframe" name="iframe_corpo"  src="financeiro_listar_abertos_mes_corrente.php" width="708" height="333" marginheight="0" marginwidth="0" hspace="0" vspace="0" allowtransparency="true" frameborder="0" scrolling="Yes">
			</iframe>
       		 <h4>PAGAMENTOS EM ATRASO</h4>
				<iframe id="iframe" name="iframe_corpo"  src="financeiro_listar_abertos_mes_passado.php" width="708" height="333" marginheight="0" marginwidth="0" hspace="0" vspace="0" allowtransparency="true" frameborder="0" scrolling="Yes"></iframe></td>
	
</div>	
</div>	
	
</body>
</html>
