<?php
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
$status_pagt = $_GET['status_pagt'];
?>
		
		
          <table width="733" height="132" border="0" align="center">
            <tr>
              <td height="74" colspan="2" align="center"><span class="titulo_principal">Relat&oacute;rio Financeiro<br>
              </span><span class="links"><strong>TODOS PAGAMENTOS <? echo "$status_pagt"; ?> NO SISTEMA</strong></span> </td>
            </tr>
            <tr>
              <td width="557" height="50" align="center" class="links"><span class="fonte03">A soma total deste relat&oacute;rio &eacute; de:</span><strong>
              <?php
include "../includes/validacao_pagina_adm.php";  	
include('../includes/../includes/../includes/../includes/conexao_bd.php');




$mes = date("m");
$ano = date("Y");


$SQL3 = "SELECT sum(valor) AS soma FROM tb_historico_financeiro WHERE status = '$status_pagt'"; 
$query3 = mysql_query($SQL3);  
while($dados3=mysql_fetch_array($query3))

{
echo "".$dados3['soma']."";
}
?>
              </strong></td>
              <td width="166" align="center" class="links"><a href="relatorios_listar_pagamentos_Todos_Abertos_Fechados_Gaveta_Impressao.php?status_pagt=<? echo "$status_pagt"; ?>" target="_blank"><img src="imagens/btImprimir.gif" width="29" height="29" border="0"><br>
                Vers&atilde;o para Impress&atilde;o </a></td>
            </tr>
          </table>


  <?php

$SQL = "SELECT * FROM tb_historico_financeiro WHERE status = '$status_pagt'"; 
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{


$SQL2 = "SELECT * FROM tb_alunos WHERE  id_aluno = '$x[id_aluno]'"; 
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{

?>








      
      
      
 
  <table width="735" border="0" align="center">
    <tr>
      <td width="132" align="right" bgcolor="#F5FFEC" class="fonte02">Nome do Cliente: </td>
      <td width="593" bgcolor="#F5FFEC" class="sub_titulos"><? echo "$x2[nome_completo]"; ?></td>
    </tr>
    <tr>
      <td width="132" align="right" bgcolor="#F5FFF4" class="fonte02">Categoria:</td>
      <td bgcolor="#F5FFF4" class="sub_titulos"><strong class="fonte01"><? echo "$x[categoria]"; ?></strong></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Forma de Pagamento:</td>
      <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[forma_pagto]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Dia  Vencimento </td>
      <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[dia_venc]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Valor:</td>
      <td bgcolor="#F5FFEC"><span class="fonte01"><? echo "$x[valor]"; ?></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Nosso Numero:</td>
      <td bgcolor="#F5FFEC" class="fonte01"><?php
$SQL4 = "SELECT * FROM tb_boletos_itau WHERE  id_boleto = '$x[id_boleto]'"; 
$query4 = mysql_query($SQL4);  
while($x4 = mysql_fetch_array($query4))  
{
echo "$x4[nosso_mumero]"; 
}
?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Observa&ccedil;&atilde;o:</td>
      <td bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[observacao]"; ?></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?php } ?><?php } ?>
  
  <?
mysql_close($link);
?>


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