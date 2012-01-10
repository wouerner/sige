<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Curso Pr&aacute;tico - Jundia&iacute; - SP</title>
<!-- InstanceEndEditable -->
<script language="JavaScript" type="text/javascript">AC_FL_RunContent = 0;</script>
<script language="JavaScript" src="AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
body {
	background-color: #c8dcfd;
	background-image: url(imagens/fundo2.jpg);
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/formularios.css" rel="stylesheet" type="text/css" />
<link href="css/links.css" rel="stylesheet" type="text/css" />
<link href="css/fontes_principais.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->



<?php
include "trabalhe_conosco_validacao_pagina.php";
include "financeiro/conexao_bd.php";

$cod_aluno = $_GET['cod_aluno'];

$resultado= mysql_query ("SELECT * FROM tb_socios WHERE email = '$email_parceiro'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$id_parceiro = mysql_result ($resultado, $i, "id_parceiro");
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
$cod_parceiro = mysql_result ($resultado, $i, "cod_parceiro");
}



$resultado2= mysql_query ("SELECT * FROM tb_socios_alunos WHERE cod_aluno = '$cod_aluno'  AND registro_ativo = 's'");
$linhas2 = mysql_num_rows ($resultado2);

for($i2=0; $i2<$linhas2; $i2++)
{
$id_aluno_parceiro = mysql_result ($resultado2, $i2, "id_aluno_parceiro");
$nome_completo_aluno = mysql_result ($resultado2, $i2, "nome_completo");

}
?>

   
<?php
$data_hoje = date("Y/m/d");
?>		
   
<link href="financeiro/css/estilo_sistema.css" rel="stylesheet" type="text/css" />

    

<script>

		function ValidaFormulario2 () {

		if (document.formulario2.recebido_de.value==""){ 
		alert("Por favor, preencha o campo Recebido de"); 
		document.formulario2.recebido_de.focus(); 
		return false;
	}


		if (document.formulario2.valor_recebido.value==""){ 
		alert("Por favor, preencha o campo Valor Recebido"); 
		document.formulario2.valor_recebido.focus(); 
		return false;
	}

		if (document.formulario2.tipo_recebimento.value==""){ 
		alert("Por favor, preencha o Campo Tipo Recebimento"); 
		document.formulario2.tipo_recebimento.focus(); 
		return false;
	}


		if (document.formulario2.numero_parcelas.value==""){ 
		alert("Preencha o Campo Numero Parcelas"); 
		document.formulario2.numero_parcelas.focus(); 
	return false;
	}

		if (document.formulario2.observacao.value==""){ 
		alert("Preencha o campo Observaçao"); 
		document.formulario2.observacao.focus(); 
	return false;
	}

	
	
	return true;
}
// -->


</script>

<script language="JavaScript" type="text/javascript">
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
</script>


<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<!-- InstanceEndEditable -->
</head>




<body>


<!-- FORNULÁRIO DE LOGIN ALINO-->
<div align="center" >
  <div style="position:relative; top:0px;  width:0px; height:0px; z-index:995;">
  	<div id="formulario_login_aluno_topo" style="position:absolute; left: -360px; top: 225px;">
		 <?php include "formulario_login_aluno_topo.php"; ?>
    </div>
  </div>
</div>
<!-- FIM FORMULÁRIO DE LOGIN ALUNO -->


<!-- TELEFONES NO TOPO ROLANDO-->
<div align="center" >
  <div style="position:relative; top:0px;  width:0px; height:0px; z-index:995;">
  	<div id="telefones_no_topo" style="position:absolute; left: 0px; top: 25px;">
		 <?php include "telefones_no_topo.php"; ?>
    </div>
  </div>
</div>
<!-- TELEFONES NO TOPO ROLANDO-->


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="13" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="98" align="center" valign="top"><script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '969',
			'height', '270',
			'src', 'topo_logo_banner',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'transparent',
			'devicefont', 'false',
			'id', 'topo_logo_banner',
			'bgcolor', '#ffffff',
			'name', 'topo_logo_banner',
			'menu', 'false',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'topo_logo_banner',
			'salign', ''
			); //end AC code
	}
</script>
<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="969" height="270" id="topo_logo_banner" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="Templates/topo_logo_banner.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="Templates/topo_logo_banner.swf" quality="high" bgcolor="#ffffff" width="969" height="270" name="topo_logo_banner" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
</noscript></td>
  </tr>
  <tr>
    <td height="41" align="center" valign="bottom"><table width="970" height="30" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="bottom"><?php include "menu.php" ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="970" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td height="5" background="imagens/px_spaco.gif"><img src="imagens/px_spaco.gif" width="5" height="6" /></td>
      </tr>
      <tr>
        <td align="center" valign="top"><!-- InstanceBeginEditable name="conteudo_site" -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="bottom" bgcolor="#d9e6ef"><table width="587" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="136">&nbsp;</td>
        <td width="67"><img src="imagens/ico_formanda.gif" width="67" height="50" /></td>
        <td width="18">&nbsp;</td>
        <td width="366"><img src="imagens/titulo_area_do_parceiro.gif" width="284" height="28" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="606" align="center" valign="top"><table width="950" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="45" valign="top"class="titulos_pagina"><div align="center"><span class="fonte04">Ol&aacute;<span class="sub_titulos"> <strong><?php echo "$nome_completo" ?></strong></span> voc&ecirc; esta logado no painel de Parceiros. Seja be-vindo(a) <br />
Aqui voc&ecirc; poder&aacute; fazer o acompanhamento dos seus alunos.
<span class="titulo_principal"><br /> 
Cadastro Financeiro
</span></span></div>
          <p align="center"><span class="titulo_principal"><br />
          </span></p>          </td>
      </tr>
      <tr>
        <td height="148" align="center" valign="top"><table width="100%" border="0" cellspacing="0" class="corpo_site">
            <tr>
              <td width="100%" height="277" colspan="2" valign="top" class="texto_corpo"><form name="formulario2" id="formulario2" onsubmit="return ValidaFormulario2()" method="post" action="trabalhe_conosco_financeiro_insert_bd.php">
                  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="4" class="texto_01">
                    <tr>
                      <td width="300" align="right" class="fonte03"><span class="roda_pe">Recebido de:</span></td>
                      <td width="624"><input name="recebido_de" type="hidden" id="recebido_de" value="<? echo "$nome_completo_aluno"; ?>"/>
                        <span class="links"><strong><? echo "$nome_completo_aluno" ?></strong></span></td>
                    </tr>
                    <tr>
                      <td align="right" class="fonte03"><span class="roda_pe">Valor Recebido:</span></td>
                      <td width="624"><input name="valor_recebido" type="text" id="valor_recebido" onkeypress="return(MascaraMoeda(this,'.','.',event))" maxlength="11" onsubmit="return ValidaFormulario2();" />
                        <span class="fonte02">(somente n&uacute;meros sem pontos e sem v&iacute;rgula) </span></td>
                    </tr>
                    <tr>
                      <td align="right" class="fonte03"><span class="roda_pe">Tipo de Recebimento: </span></td>
                      <td><span class="formulario">
                        <select name="tipo_recebimento" id="tipo_recebimento" onsubmit="return ValidaFormulario2();">
                          <option value="" selected="selected">Escolha...</option>
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
                      </span></td>
                    </tr>
                    <tr>
                      <td align="right" class="fonte03"><span class="roda_pe">N&uacute;mero de Parcelas:</span></td>
                      <td><span class="formulario">
                        <select name="numero_parcelas" id="numero_parcelas" onsubmit="return ValidaFormulario2();">
                          <option value="" selected="selected">Escolha...</option>
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
                      </span></td>
                    </tr>

                    <tr>
                      <td align="right" valign="top" class="fonte03"><span class="roda_pe">Observa&ccedil;&atilde;o: </span></td>
                      <td><textarea name="observacao" cols="56" rows="5" id="observacao" onkeydown="total_letras(this.form.acabamento,this.form.total_caracteres,235);" onkeyup="total_letras(this.form.acabamento,this.form.total_caracteres,235);"></textarea>
                        <br /></td>
                    </tr>
                    <tr>
                      <td align="right">&nbsp;</td>
                      <td><label>
                        <input type="submit" name="Submit2" value="   Cadastrar   " />
                        </label>
                          <p>&nbsp;</p></td>
                    </tr>
                  </table>
              </form></td>
            </tr>
          </table>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td align="center"><a href="trabalhe_conosco_pg_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">
	
	  <blockquote>
	    <blockquote>&nbsp;</blockquote>
	  </blockquote></td>
  </tr>
</table>


<!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td align="center" valign="bottom"><?php include "roda_pe.php" ?></td>
      </tr>
      <tr>
        <td height="20" align="center" valign="middle" class="roda_pe">Copyright 2010 - Todos os direitos reservadoss</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
