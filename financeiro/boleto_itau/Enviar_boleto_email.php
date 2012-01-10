
<html>
<head>

<title>Supletivo Ensino M&eacute;dio</title>


<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(../imagens/background.gif);
	background-repeat: repeat-y;
	background-color: #FFFFFF;
}
-->
</style>


<script type="text/javascript" language="JavaScript1.2" src="../Resource/js/stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2">
<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>

<link href="../estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="../css/estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="../css/css_formularios.css" rel="stylesheet" type="text/css">
<link href="../css/css_links.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>

<link href="../../css_corpo_site.css" rel="stylesheet" type="text/css" />
<link href="../../css_principal.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (LAYOUT DO MEU SISTEMA222.psd) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0" background="../imagens/bg_01.gif">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="988" align="center" valign="top"><table width="988" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td colspan="2" background="../imagens/layoyt_a_01.jpg"><table width="987" height="161" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="375" height="39" valign="top">&nbsp;</td>
            <td width="638" align="center" valign="middle"><table width="96%" height="68" border="0">
              <tr>
                <td width="91%" align="center"><span class="titulo_principal style1">SISTEMA PARA GEST&Atilde;O FINANCEIRA E <br>
                  CONTROLE DE ALUNOS </span></td>
                <td width="9%" align="center"><a href="../logout_adm.php"><img src="../imagens/icone_cadeado.gif" alt="Fechar o Sistema" width="39" height="45" border="0" title="Fechar o Sistema"></a></td>
              </tr>
            </table>              </td>
          </tr>
          <tr>
            <td height="41">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="149" valign="top">&nbsp;</td>
        <td width="839" align="center" valign="top">

<?php

$cod_boleto  = $HTTP_GET_VARS['cod_boleto'];
$id_aluno  = $HTTP_GET_VARS['id_aluno'];
$id_cob  = $HTTP_GET_VARS['id_cob'];

?>

<?php

include "../validacao_pagina_adm.php";  	
include "../conexao_bd.php";


$resultado2 = mysql_query("SELECT * FROM tb_alunos WHERE id_aluno = '$id_aluno' ");
$linhas = mysql_num_rows ($resultado2);

for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado2, $i, "nome_completo");
$email = mysql_result ($resultado2, $i, "email");

}

$resultado3 = mysql_query("SELECT * FROM tb_boletos_itau WHERE cod_boleto = '$cod_boleto' ");
$linhas3 = mysql_num_rows ($resultado3);

for($i3=0; $i3<$linhas3; $i3++)
{
$Data_vencimento = mysql_result ($resultado3, $i3, "Data_vencimento");
}





// Coloque a mensagem que irá ser enviada para seu e-mail abaixo:
$msg = "Mensagem enviada em ".date("d/m/Y").".  

Caro(a) $nome_completo.
Esta mensagem foi enviada automaticamente por nosso sistema.

Estamos enviando este lembrete de pagamento com vencimento dia $Data_vencimento.

Para visualizar o seu boleto, clique no link abaixo

http://www.supletivoceban.com.br/boleto_visualizar_imprimir.php?cod_boleto=$cod_boleto

(caso não consiga clicar, copie e cole o endereço acima em seu navegador).



Centro Educacional Bandeirantes - CEBAN
Muito Obrigado por sua preferência!































";
while(list($campo, $valor2) = each($HTTP_GET_VARS)) {
  $msg .= ucwords($campo).": ".$valor2."
";

}

// Agora iremos fazer com que o PHP envie os dados do Formulário para seu e-mail:
mail("$email", "Lembrete de Pagamento" , $msg,"From: cursos@supletivoceban.com.br");

?>


<?
$query = "Update tb_historico_financeiro Set 

cob_enviada =  cob_enviada + 1

Where id_cob='$id_cob'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");
?>




<link href="../estilo_sistema.css" rel="stylesheet" type="text/css" />



<div align="center" class="titulo_principal">
  <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p class="destaque">Lembrete de Pagamento com o Boleto <br />
      Enviado para o e-mail  de<br />
      <br />
      <span class="titulo_principal"><? echo "$nome_completo";?></span></p>
    <p>&nbsp;</p>
    <p><a href="../pagina_principal.php" target="_self"><img src="../imagens/botao_voltar.gif" width="48" height="16" border="0"></a><a href="javascript:window.close();" class="fonte04"></a></p>
</div>
</td>
      </tr>
      <tr>
        <td height="35" colspan="2" align="center" valign="middle">&nbsp;</td>
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
</html>