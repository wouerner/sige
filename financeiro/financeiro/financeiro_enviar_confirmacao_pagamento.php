<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
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
				
				
				
				include "../includes/menu_lateral.php";
				
				
				}
				else
				{
				
				
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->
<?php
include "../includes/validacao_pagina_adm.php";  	
include('../includes/../includes/../includes/../includes/conexao_bd.php');

$id_cob  = $HTTP_GET_VARS['id_cob']; 



$resultado= mysql_query ("SELECT * FROM tb_historico_financeiro WHERE id_cob = $id_cob");
$linhas = mysql_num_rows ($resultado);



for($i=0; $i<$linhas; $i++)
{
$id_aluno = mysql_result ($resultado, $i, "id_aluno");
$forma_pagto = mysql_result ($resultado, $i, "forma_pagto");
$dia_venc = mysql_result ($resultado, $i, "dia_venc");
$valor = mysql_result ($resultado, $i, "valor");

$data_quebrada = explode('-', $dia_venc);



$data = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];


}


$resultado2= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno = $id_aluno");
$linhas2 = mysql_num_rows ($resultado2);



for($i2=0; $i2<$linhas2; $i2++)
{
$nome_completo = mysql_result ($resultado2, $i2, "nome_completo");
$email = mysql_result ($resultado2, $i2, "email");

}




$email_aluno   = "$email";

// Coloque a mensagem que irá ser enviada para seu e-mail abaixo:
$msg = "Mensagem enviada em ".date("d/m/Y").".  

Olá, $nome_completo .

O pagamento via $forma_pagto com vencimento dia    $data , no valor de R$ $valor já foi Confirmado em nosso sistema.


Esta mensagem e enviada automaticamente pelo nosso sistema não é nescessário responder.
 
Muito Obrigado!

Centro Educacional Bandeirantes
www.supletivoceban.com.br




";
while(list($campo, $valor2) = each($HTTP_GET_VARS)) {
  $msg .= ucwords($campo).": ".$valor2."
";

}

// Agora iremos fazer com que o PHP envie os dados do Formulário para seu e-mail:
mail("$email_aluno", "Confirmacao de Pagamento",$msg,"From: cursos@supletivoceban.com.br");

echo "";


?>

<?
mysql_close($link);
?>


<script>
var relogio,timer;
function init()
{
    relogio = 6;
    timer = setInterval('contagem()',1000);
}

function contagem()
{
    mostrador.innerText = relogio;
    relogio--;
    if(relogio==0)
    {
        setInterval(timer);
        location = 'pagina_principal_02.php';
    }
}
</script>



<body onLoad="init()"> 
<table width="739" border="0" cellspacing="3" cellpadding="4">
  <tr>
    <td align="center" class="titulo_principal"><p align="center" class="titulo_principal">Enviar Confirma&ccedil;&atilde;o de Pagamento? </p></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
      <tr>
        <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
      </tr>
    </table></td>
  </tr>
</table>
 <p>&nbsp;</p>
 <p><span class="fonte05">O  e-mail com a confirma&ccedil;&atilde;o de pagamento foi enviada com Sucesso!
   </p>
   </span></p>
 <p class="links">Você será redirecionado em <span id="mostrador">6</span> segundos...<br>
       <br />
   Se isso não acontecer, <span class="link_001"><a href="pagina_principal.php" target="_self">clique aqui</a></span><a href="pagina_principal.php">. </a></p>
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