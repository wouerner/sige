<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Ceban - Centro Educacional Bandeirantes</title>





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
<link href="css/css_banner_popup.css" rel="stylesheet" type="text/css" />


<script language="JavaScript">
<!--


function abrir(URL) {

  var width = 400;
  var height = 400;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}
//-->
</script>
<style type="text/css">
<!--
a:link {
	color: #121A3F;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #121A3F;
}
a:hover {
	text-decoration: underline;
	color: #121A3F;
}
a:active {
	text-decoration: none;
	color: #121A3F;
}
.style13 {color: #FF0000}
-->
</style>

<!-- InstanceEndEditable -->
</head>




<body>


<!-- FORNULÁRIO DE LOGIN ALINO-->
<div align="center" >
  <div style="position:relative; top:0px;  width:0px; height:0px; z-index:995;">
  	<div id="formulario_login_aluno_topo" style="position:absolute; left: -460px; top: 225px;">
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
          <?php  	
include('financeiro/conexao_bd.php');
?>		
		
		
<table width="943" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"><img src="imagens/px_branco_topo.gif" width="1" height="5" /></td>
  </tr>
  <tr>
    <td width="247" align="left" valign="top">
	
	
<?php 
$SQL = "SELECT * FROM tb_dados_site WHERE id = '2'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query)) {  
?>

	
	
      <table width="100" height="483" border="0" cellpadding="0" cellspacing="0" bgcolor="dfe8f9">
      <tr>
        <td><img src="imagens/icone_cursos.gif" width="239" height="25" /></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="238" height="113" border="0" cellpadding="0" cellspacing="0" background="imagens/banner_curso_01.jpg">
          <tr>
            <td height="36">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="center" valign="top"><table width="220" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="28" align="center" class="titulos_das_paginas_01"><span class="style9"><? echo "$x[preco_01]"; ?></span></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="18" align="center" valign="top" class="style5"><table width="215" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" class="fonte_002"><? echo "$x[descri_01]"; ?></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="20" align="center"><a href="contrato_aceitacao.php" target="_self"><img src="imagens/matricule_se_agora.gif" width="178" height="15" border="0" /></a></td>
          </tr>
        </table>          </td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="238" height="113" border="0" cellpadding="0" cellspacing="0" background="imagens/banner_curso_02.jpg">
          <tr>
            <td height="36">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="center" valign="top"><table width="220" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="28" align="center" class="style6"><span class="titulos_das_paginas_01"><? echo "$x[preco_02]"; ?></span></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="18" align="center" valign="top" class="style5"><table width="215" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" class="fonte_002"><? echo "$x[descri_02]"; ?></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="20" align="center"><a href="contrato_aceitacao.php" target="_self"><img src="imagens/matricule_se_agora.gif" width="178" height="15" border="0" /></a></td>
          </tr>
        </table>          </td>
      </tr>
      <tr>
        <td align="center" valign="middle"><a href="duvidas.php"><img src="imagens/icone_como_funciona.gif" width="216" height="89" border="0" /></a></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><a href="contrato_aceitacao.php"><img src="imagens/faca_ja_sua_matricula.gif" width="203" height="91" border="0" /></a></td>
      </tr>
    </table>
      <?php } ?>	  <a href="http://portal.mec.gov.br" target="_blank"><img src="imagens/ico_ministerio_da_educacao.jpg" width="238" height="38" border="0" /></a></td>
    <td width="435" align="center" valign="top"><table width="406" height="306" border="0">
      <tr>
        <td align="center"><script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
			'width', '425',
			'height', '375',
			'src', 'banner_animacao',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'transparent',
			'devicefont', 'false',
			'id', 'banner_animacao',
			'bgcolor', '#ffffff',
			'name', 'banner_animacao',
			'menu', 'false',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'banner_animacao',
			'salign', ''
			); //end AC code
	}
</script>
<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="425" height="375" id="banner_animacao" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="banner_animacao.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="banner_animacao.swf" quality="high" bgcolor="#ffffff" width="425" height="375" name="banner_animacao" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
</noscript></td>
      </tr>
      <tr>
        <td align="center"><img src="imagens/Lique_agora_mesmo.gif" width="412" height="131" /></td>
      </tr>
    </table>
      <br />
      <br /></td>
    <td width="278" align="right" valign="top"><table width="100" height="528" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="right" valign="middle">
<script language="JavaScript" src="http://www.ceban.com.br/phplive/js/status_image.php?base_url=http://www.ceban.com.br/phplive&l=ceban&x=1&deptid=0&"><a href="http://www.phplivesupport.com"></a></script>
</td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="http://www.buriti.df.gov.br/ftp/default_ctd.cfm"><img src="imagens/publicacao_diario_oficial.jpg" width="253" height="92" border="0" /></a></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="pagamento.php"><img src="imagens/Banner_Boleto.gif" width="253" height="108" border="0" /></a></td>
      </tr>
      
      <tr>
        <td height="91" align="center" valign="middle"><a href="http://www.se.df.gov.br/300/30001007.asp?ttCD_CHAVE=15470" target="_blank"><img src="imagens/secretaria_educacao_distrito_federal.gif" width="254" height="78" border="0" /></a></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="trabalhe_conosco.php"><img src="imagens/icone-trabalhe_conosco.jpg" width="253" height="56" border="0" /></a></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="https://pagseguro.uol.com.br" target="_blank"></a></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td width="435" align="center" valign="middle">&nbsp;</td>
    <td width="278" align="right" valign="top">&nbsp;</td>
  </tr>
</table>
<!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td align="center" valign="bottom"><?php include "roda_pe.php" ?></td>
      </tr>
      <tr>
        <td height="20" align="center" valign="middle" class="roda_pe">Copyright 2010 - Todos os direitos reservados</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>

