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

$resultado= mysql_query ("SELECT * FROM tb_socios WHERE email = '$email_parceiro'");
$linhas = mysql_num_rows ($resultado);

?>

<?php for($i=0; $i<$linhas; $i++)
{
$id_parceiro = mysql_result ($resultado, $i, "id_parceiro");
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
}
?>    







<script>

		function ValidaFormulario2 () {

		if (document.formulario2.nome_completo.value==""){ 
		alert("Por favor, preencha o campo Nome"); 
		document.formulario2.nome_completo.focus(); 
		return false;
	}


		if (document.formulario2.cpf.value==""){ 
		alert("Por favor, preencha o campo CPF"); 
		document.formulario2.cpf.focus(); 
		return false;
	}

	

	
				if (document.formulario2.data_nasc.value==""){ 
		alert("Preencha o campo Data de Nascimento"); 
		document.formulario2.data_nasc.focus(); 
	return false;
	}
  
				if (document.formulario2.tipo_curso.value==""){ 
		alert("Escolha o Tipo do Curso"); 
		document.formulario2.tipo_curso.focus(); 
	return false;
	}

		
	return true;
}
// -->


</script>



<link href="financeiro/css/estilo_sistema.css" rel="stylesheet" type="text/css" />
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
    <td height="606" align="center" valign="top"><table width="812" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="44"class="titulos_pagina"><div align="center" class="fonte04"> Ol&aacute;<span class="sub_titulos"> <strong><?php echo "$nome_completo" ?></strong></span> voc&ecirc; esta logado no painel de Parceiros. Seja be-vindo(a) <br />
  Aqui voc&ecirc; poder&aacute; fazer o acompanhamento dos seus alunos. </p>
          </div></td>
      </tr>
      <tr>
        <td height="116" align="center"><form name="formulario2" id="formulario2" onsubmit="return ValidaFormulario2()"  method="post" action="trabalhe_conosco_adcionar_novo_aluno_insertbd.php"><table width="611" height="235" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="17" align="center" bgcolor="#D9E6EF" class="sub_titulos">CADASTRAR UM NOVO ALUNO  </td>
            </tr>
          
          <tr>
            <td height="218" align="center" bgcolor="#E1ECF2"><table width="500" height="187" border="0" cellpadding="0" cellspacing="3">
              <tr>
                <td width="118" align="right" class="fonte03"><p>Nome Completo:</p>                  </td>
                <td width="373" align="left"><input name="nome_completo" type="text" id="nome_completo" size="70" maxlength="90" onsubmit="return ValidaFormulario2();"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">CPF:</td>
                <td align="left"><input name="cpf" type="text" id="cpf" size="18" maxlength="14" onkeypress="formatar_mascara(this, '###.###.###-##')" onsubmit="return ValidaFormulario2();"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Data de Nascimento: </td>
                <td align="left"><input name="data_nasc" type="text" id="data_nasc" size="13" maxlength="10" onkeypress="formatar_mascara(this, '##/##/####')" onsubmit="return ValidaFormulario2();"/>
                  <span class="fonte02">(dd/mm/aaaa) </span></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Curso:</td>
                <td align="left"><select name="tipo_curso" id="tipo_curso" onsubmit="return ValidaFormulario2();">
                  <option value="">Escolha um curso</option>
                  <option value="Sem Hist&oacute;rico">Sem Hist&oacute;rico</option>
                  <option value="1&ordf; a 8&ordf;">1&ordf; a 8&ordf;</option>
                  <option value="5&ordf; ao 3&ordm;">5&ordf; ao 3&ordm;</option>
                  <option value="6&ordf; ao 3&ordm;">6&ordf; ao 3&ordm;</option>
                  <option value="7&ordf; ao 3&ordm;">7&ordf; ao 3&ordm;</option>
                  <option value="8&ordf; ao 3&ordm;">8&ordf; ao 3&ordm;</option>
                  <option value="1&ordm; ao 3&ordm;">1&ordm; ao 3&ordm;</option>
                  <option value="2&ordm; ao 3&ordm;">2&ordm; ao 3&ordm;</option>
                  <option value="3&ordm; ao 3&ordm;">3&ordm; ao 3&ordm;</option>
                  <option value="TTI">TTI</option>
                  <option value="TST">TST</option>
                  <option value="TMA">TMA</option>
                  <option value="OUTROS">OUTROS</option>
                                                                </select></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Observa&atilde;o</td>
                <td align="left"><textarea name="observacao" cols="35" rows="4" id="observacao"></textarea>				  </td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td align="left"><input name="submit" type="submit" value="          CADASTRAR          " /></td>
              </tr>
            </table></td>
            </tr>
        </table>
          </form></td>
      </tr>
      <tr>
        <td align="center"><p><span class="fonte05">Obs.: &Eacute; necess&aacute;rio o envio de c&oacute;pias dos seguintes documentos: </span><br />
            <span class="links">Cart. Identidade / CPF / Certid&atilde;o de Nasc. ou Casamento / T&iacute;tulo de Eleitor / Hist&oacute;rico Escolar / Cart. Reservista / Comprovante de Resid&ecirc;ncia / 03 Fotos 3x4 </span></p>
          <p>&nbsp;</p>
          <p><a href="trabalhe_conosco_pg_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p></td>
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
