<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">




<!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Supletivo &agrave; Dist&acirc;ncia</title>

<script language="JavaScript">
function abrir(URL) {

  var width = 400;
  var height = 400;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}
</script>


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
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
            <td height="20" align="center"><a href="matricular_agora.php" target="_self"><img src="imagens/ico_compre_agora.jpg" width="102" height="11" border="0" /></a></td>
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
                  <td height="28" align="center" class="style6"><span class="titulos_das_paginas_01"><? echo "$x[preco_01]"; ?></span></td>
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
            <td height="20" align="center"><a href="matricular_agora.php" target="_self"><img src="imagens/ico_compre_agora.jpg" width="102" height="11" border="0" /></a></td>
          </tr>
        </table>          </td>
      </tr>
      <tr>
        <td align="center" valign="middle"><a href="duvidas.php"><img src="imagens/icone_como_funciona.gif" width="216" height="89" border="0" /></a></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><a href="matricular_agora.php"><img src="imagens/faca_ja_sua_matricula.gif" width="203" height="91" border="0" /></a></td>
      </tr>
    </table>
      <?php } ?>	
	  
	  </td>
    <td width="435" align="center" valign="middle"><img src="imagens/educacao_jovens_adultos.jpg" width="251" height="331" /></td>
    <td width="278" align="right" valign="top"><table width="100" height="519" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="right" valign="middle"><img src="imagens/atendimento.jpg" width="251" height="85" border="0" usemap="#Map" />
<map name="Map" id="Map"><area shape="rect" coords="102,26,134,54" href="msnim:add?contact=supletivo.cursos@hotmail.com" />
<area shape="rect" coords="152,29,215,54" href="skype:reginaldoj3?call" />
</map></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="diario_oficial.php"><img src="imagens/publicacao_diario_oficial.jpg" width="253" height="92" border="0" /></a></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="pagamento.php"><img src="imagens/paque_boleto_bancario.jpg" width="253" height="104" border="0" /></a></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="http://portal.mec.gov.br" target="_blank"><img src="imagens/ico_ministerio_da_educacao.jpg" width="253" height="38" border="0" /></a></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="trabalhe_conosco.php"><img src="imagens/icone-trabalhe_conosco.jpg" width="253" height="56" border="0" /></a></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><a href="https://pagseguro.uol.com.br" target="_blank"><img src="imagens/BannerPagSeguro.gif" width="252" height="75" border="0" /></a></td>
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
