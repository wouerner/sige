<?php
include "../includes/validacao_pagina_adm.php";  	
include "../includes/../includes/../includes/../includes/conexao_bd.php";
$status_pagt = $_POST['status_pagt'];

$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

$data1 = implode("-", array_reverse(explode("/", $inicio)));
$data2 = implode("-", array_reverse(explode("/", $fim)));
?>





<html><!-- InstanceBegin template="/Templates/pagina_principal_do_sistema.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerenciamento</title>


<script type="text/javascript">


function formatar_mascara(src, mascara) {
	var campo = src.value.length;
	var saida = mascara.substring(0,1);
	var texto = mascara.substring(campo);
	var someros = mascara.substring(/\D/g,"");
	
	if(texto.substring(0,1) != saida) {
		src.value += texto.substring(0,1);
	}
}
</script>





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
<table width="871" height="128" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="28" align="center" ><span class="titulo_principal"> Relat&oacute;rio por Per&iacute;odo </span></td>
  </tr>
  <tr>
    <td height="72" align="center"><table width="830" height="80" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><table width="734" height="86" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="225" height="36" align="center" bgcolor="#00FF00"><strong class="sub_titulos">Escolha uma data de In&iacute;cio,  Fim e Tipo de pagamentos  que deseja listar.</strong></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#EAFFEA"><form name="formulario2" id="formulario2" onSubmit="return ValidaFormulario2()"  method="post">
                <table width="455" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="166" align="center"><span class="fonte03"><strong>In&iacute;cio</strong></span><br />
                        <input name="inicio" type="text" class="css_form_01" id="inicio" onKeyPress="formatar_mascara(this, '##/##/####')" size="13" maxlength="10" onsubmit="return ValidaFormulario2();"/></td>
                    <td width="121" align="center"><span class="fonte03"><strong>Fim</strong></span><br />
                        <input name="fim" type="text" class="css_form_01" id="fim" onKeyPress="formatar_mascara(this, '##/##/####')" size="13" maxlength="10" onsubmit="return ValidaFormulario2();"/></td>
                    <td width="211" align="center" valign="bottom"><span class="fonte03"><strong>Qual tipo de Status? </strong></span><br>
                      <select name="status_pagt" class="css_form_01" id="status_pagt" onsubmit="return ValidaFormulario2();">
                        <option value="Fechado">Fechados</option>
                        <option value="Aberto">Abertos</option>
                        <option value="Gaveta">Gaveta</option>
                                                                                                            </select></td>
                    <td width="81" align="center" valign="bottom"><input name="submit" type="submit" class="css_form_01" value="ok" /></td>
                  </tr>
                </table>
            </form></td>
          </tr>
        </table>
          <table width="733" height="57" border="0" align="center">
            <tr>
              <td width="557" height="50" align="center" class="links">Relatório de <strong> <? echo "$inicio"; ?></strong> até <strong><? echo "$fim"; ?></strong> com o status <strong> <? echo "$status_pagt"; ?><br>
                <br>
              </strong>consta o valor de R$ <strong>
              <?php
$SQL3 = "SELECT sum(valor) AS soma FROM tb_historico_financeiro WHERE status = '$status_pagt'  AND dia_venc BETWEEN '$data1' AND '$data2' ";  
$query3 = mysql_query($SQL3);  
while($dados3=mysql_fetch_array($query3))

{
echo "".$dados3['soma']."";
}
?>
              </strong></td>
              <td width="166" align="center" class="links"><a href="relatorios_listar_pagamentos_abertos_fechados_gaveta_Por_Periodo_Impressao.php?status_pagt=<? echo "$status_pagt"; ?>&data1=<? echo "$data1"; ?>&data2=<? echo "$data2"; ?>" target="_blank"><img src="imagens/btImprimir.gif" width="29" height="29" border="0"><br>
                Vers&atilde;o para Impress&atilde;o </a></td>
            </tr>
          </table>
          </td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td>
	
<?php

$SQL = "SELECT * FROM tb_historico_financeiro WHERE status = '$status_pagt'  AND dia_venc BETWEEN '$data1' AND '$data2' ORDER BY dia_venc"; 
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
        <?php } ?>
        <?php } ?>
        <?
mysql_close($link);
?></td>
  </tr>
</table>
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