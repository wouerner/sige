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
for($i=0; $i<$linhas; $i++)
{
$id_parceiro = mysql_result ($resultado, $i, "id_parceiro");
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
}


?>

   








  
<link href="financeiro/css/estilo_sistema.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {
	font-size: 14px;
	font-weight: bold;
}
.style3 {font-weight: bold}
.style4 {
	font-size: 12px;
	color: #990000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
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
        <td height="34"class="titulos_pagina"><div align="center"> <span class="fonte04">Ol&aacute;</span><span class="sub_titulos"> <?php echo "$nome_completo" ?>, </span><span class="fonte04">voc&ecirc; esta logado no painel de Parceiros. Seja bem-vindo(a) <br />
  Aqui voc&ecirc; poder&aacute; fazer o acompanhamento dos seus alunos.
  </p>
          </span></div></td>
      </tr>
      <tr>
        <td height="116" align="center" valign="top"><p>&nbsp;</p>
          <p class="titulo_principal"><strong>RELAT&Oacute;RIOS</strong></p>
          <table width="684" height="83" border="0" cellpadding="3" cellspacing="3">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center" valign="middle" bgcolor="#E1E7FF" class="style1 fundo"><a href="trabalhe_conosco_relatorios_de_alunos.php" class="style4">Relat&oacute;rio de Alunos</a> </td>
            </tr>
            
            <tr>
              <td height="3" align="center" valign="middle" bgcolor="#ECF0FF" class="fundo style2"><a href="trabalhe_conosco_relatorios_buscar_por_nome.php" class="links"><strong>Buscar Por Nome </strong></a></td>
            </tr>
            <tr>
              <td height="3" align="center" valign="middle" bgcolor="#ECF0FF" class="fundo style2">&nbsp;</td>
            </tr>
          </table>
          <table width="684" border="0" cellpadding="3" cellspacing="3">
            <tr>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <td align="center" valign="middle" bgcolor="#ECF0FF" class="fundo style2"><a href="trabalhe_conosco_relatorios_financeiro.php" class="links"><strong>Relat&oacute;rio Financeiro </strong></a></td>
            </tr>
            <tr>
              <td align="center" valign="middle" bgcolor="#ECF0FF" class="fundo style2"><a href="trabalhe_conosco_relatorios_Financeiro_por_nome.php" class="links"><strong>Relat&oacute;rio Financeiro Buscar por Nome </strong></a></td>
            </tr>
            <tr>
              <td align="center" valign="middle" bgcolor="#ECF0FF" class="fundo style2"><a href="trabalhe_conosco_relatorios_financeiro_Pagamento_Aguardando.php" target="_self" class="links"><strong>Debito parceiro (pagamento agardando)</strong></a> </td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          </td>
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
