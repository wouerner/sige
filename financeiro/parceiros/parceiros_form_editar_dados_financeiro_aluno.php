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
				
				
				
				include "menu_lateral.php";
				
				
				}
				else
				{
				
				
				//direciona para a p�gina inicial dos usu�rios cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->

<?php include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_hist_parceiro = $HTTP_GET_VARS['id_hist_parceiro'];
$resultado= mysql_query ("SELECT * FROM tb_histrico_financeiro_parceiro WHERE id_hist_parceiro = $id_hist_parceiro");


$linhas = mysql_num_rows ($resultado);


?>
<table width="800" border="0" align="center">
  <tr>
    <td align="center" class="titulo_principal"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Editar dados Financeiro do Aluno Parceiro </td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
            <tr>
              <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
            </tr>
        </table></td>
      </tr>
    </table>
      </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="160">
	

        <?php	for($i=0; $i<$linhas; $i++)
{
$recebido_de = mysql_result ($resultado, $i, "recebido_de");
$valor_recebido = mysql_result ($resultado, $i, "valor_recebido");
$tipo_recebimento = mysql_result ($resultado, $i, "tipo_recebimento");		
$numero_parcelas = mysql_result ($resultado, $i, "numero_parcelas");
$data_hoje = mysql_result ($resultado, $i, "data_hoje");
$observacao = mysql_result ($resultado, $i, "observacao");
}
?>    


<form method="post" action="parceiros_form_editar_Update_dados_financeiro_aluno.php">
  <table width="735" border="0" align="center" cellpadding="4">
    <tr>
      <td width="156" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Aluno: </td>
      <td width="557" bgcolor="#F5FFF4" class="sub_titulos"><span class="fonte01">
        <input name="id_hist_parceiro" type="hidden" id="id_hist_parceiro" value="<? echo "$id_hist_parceiro"; ?>"/>
        <input name="recebido_de" type="text" class="css_form_02" id="recebido_de"  value="<?php echo "$recebido_de"; ?>" size="70" maxlength="90"/>
      </span></td>
    </tr>
    <tr>
      <td width="156" align="right" bgcolor="#F5FFEC" class="fonte02"><span class="roda_pe">Valor Recebido:</span></td>
      <td bgcolor="#F5FFEC" class="sub_titulos"><input name="valor_recebido" type="text" class="css_form_02" id="valor_recebido"  value="<?php echo "$valor_recebido"; ?>" size="70" maxlength="90"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02"><span class="roda_pe">Tipo de Recebimento: </span></td>
      <td bgcolor="#F5FFF4"><span class="sub_titulos">
        <span class="formulario">
        <select name="tipo_recebimento" class="css_form_02" id="tipo_recebimento" onsubmit="return ValidaFormulario2();">
          <option value="<?php echo "$tipo_recebimento"; ?>" selected="selected"><?php echo "$tipo_recebimento"; ?></option>
          <option value="Inscri&ccedil;&atilde;o">Inscri&ccedil;&atilde;o</option>
          <option value="Boleto/M&atilde;os">Boleto/M&atilde;os</option>
          <option value="Cheque/dev">Cheque/dev</option>
          <option value="Via Cart&atilde;o">Via Cart&atilde;o</option>
          <option value="Promiss&oacute;ria">Promiss&oacute;ria</option>
          <option value="Declara&ccedil;&atilde;o">Declara&ccedil;&atilde;o</option>
          <option value="Historico">Historico</option>
          <option value="Certificado">Certificado</option>
          <option value="Vide Obs.">Vide Obs.</option>
        </select>
        </span></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02"><span class="roda_pe">N&uacute;mero de Parcelas:</span></td>
      <td bgcolor="#F5FFEC"><span class="sub_titulos">
        <span class="formulario">
        <select name="numero_parcelas" class="css_form_02" id="numero_parcelas" onsubmit="return ValidaFormulario2();">
          <option value="<?php echo "$numero_parcelas"; ?>" selected="selected"><?php echo "$numero_parcelas"; ?></option>
          <option value="o1/o2">o1/o2</option>
          <option value="o2/o2">o2/o2</option>
          <option value="o1/o3">o1/o3</option>
          <option value="o2/o3">o2/o3</option>
          <option value="o3/o3">o3/o3</option>
          <option value="o1/o4">o1/o4</option>
          <option value="o2/o4">o2/o4</option>
          <option value="o3/o4">o3/o4</option>
          <option value="o4/o4">o4/o4</option>
          <option value="o1/o5">o1/o5</option>
          <option value="o2/o5">o2/o5</option>
          <option value="o3/o5">o3/o5</option>
          <option value="o4/o5">o4/o5</option>
          <option value="o5/o5">o5/o5</option>
          <option value="o1/o6">o1/o6</option>
          <option value="o2/o6">o2/o6</option>
          <option value="o3/o6">o3/o6</option>
          <option value="o4/o6">o4/o6</option>
          <option value="o5/o6">o5/o6</option>
          <option value="o6/o6">o6/o6</option>
          <option value="A vista">A vista</option>
          <option value="Taxa">Taxa</option>
          <option value="Outros">Outros</option>
        </select>
        </span></span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02"><span class="roda_pe">Observa&ccedil;&atilde;o: </span></td>
      <td bgcolor="#F5FFEC"><span class="sub_titulos">
        <textarea name="observacao" cols="70" class="css_form_02" id="observacao"><?php echo "$observacao"; ?></textarea>
      </span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">&nbsp;</td>
      <td bgcolor="#F5FFF4"><input name="submit" type="submit" class="em_cima" value="          ATUALIZAR          " /></td>
    </tr>
  </table>


      </form>
	  
	  
	  
	     
</td>
  </tr>
  <tr>
    <td>
	
	
	
<?
mysql_close($link);
?></td>
  </tr>
  <tr>
    <td align="center"><p class="links"><a href="parceiros_dados_financeiros_Excluir_registro.php?confirm=nao&id_hist_parceiro=<? echo "$id_hist_parceiro"; ?>">EXCLUIR REGISTRO DIFINITIVAMENTE</a> </p>
      <p>&nbsp;</p>
      <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p>      <a href="pagina_principal_02.php" class="style5"></a></td>
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