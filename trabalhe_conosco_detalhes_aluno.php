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
}



$resultado2= mysql_query ("SELECT * FROM tb_socios_alunos WHERE cod_aluno = '$cod_aluno'");
$linhas2 = mysql_num_rows ($resultado2);
for($i2=0; $i2<$linhas2; $i2++)
{
$id_aluno_parceiro = mysql_result ($resultado2, $i2, "id_aluno_parceiro");
$nome_completo2 = mysql_result ($resultado2, $i2, "nome_completo");
$id_parceiro = mysql_result ($resultado2, $i2, "id_parceiro");
$cpf = mysql_result ($resultado2, $i2, "cpf");
$data_nasc = mysql_result ($resultado2, $i2, "data_nasc");

				  $data_quebrada1 = explode('-', $data_nasc);
				  $data_nascimento = $data_quebrada1[2].'/'.$data_quebrada1[1].'/'.$data_quebrada1[0];

$tipo_curso = mysql_result ($resultado2, $i2, "tipo_curso");
$data_cadastro = mysql_result ($resultado2, $i2, "data_cadastro");

				  $data_quebrada2 = explode('-', $data_nasc);
				  $data_cadastro2 = $data_quebrada2[2].'/'.$data_quebrada2[1].'/'.$data_quebrada2[0];

$registro_ativo = mysql_result ($resultado2, $i2, "registro_ativo");
$documentos = mysql_result ($resultado2, $i2, "documentos");
$pagamentos = mysql_result ($resultado2, $i2, "pagamentos");
$historico = mysql_result ($resultado2, $i2, "historico");
$publicacao = mysql_result ($resultado2, $i2, "publicacao");
$certificado = mysql_result ($resultado2, $i2, "certificado");
$escola = mysql_result ($resultado2, $i2, "escola");
$observacao = mysql_result ($resultado2, $i2, "observacao");

}



?>

   

<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #011496;
}


.fonte_00001 {
color: #011496;
font-size:10px


}



-->
</style>
<link href="css_principal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style4 {color: #000099}
.style3 {color: #000099; font-weight: bold; }
-->
</style>





<link href="financeiro/estilo_sistema.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
<!--
a:link {
	color: #009900;
	text-decoration: none;
}
a:visited {
	color: #009900;
	text-decoration: none;
}
a:active {
	color: #009900;
	text-decoration: none;
}
a:hover {
	color: #990000;
	text-decoration: underline;
}
body {
	margin-left: 0px;
	margin-top: 0px;
}
.style1 {color: #000099}
.style3 {color: #000099; font-weight: bold; }
.style5 {color: #FFFFFF}
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
        <td height="34"class="titulos_pagina"><div align="center"> Ol&aacute;<?php echo "$nome_completo" ?>, voc&ecirc; esta logado no painel de Parceiros. Seja be-vindo(a) <br />
  Aqui voc&ecirc; poder&aacute; fazer o acompanhamento dos seus alunos. </p>
          </div></td>
      </tr>
      <tr>
        <td height="116" align="center"><table width="688" height="19" border="0" cellpadding="0" cellspacing="2" bgcolor="#00CC00" onmouseover="this.className='fundo';" onmouseout="this.className='NULL';">
            <tr>
              <td align="center" class="style5 fonte03"><strong>DETALHAMENTO DO ALUNO </strong></td>
              </tr>
          </table>
          <table width="705" height="234" border="0" cellpadding="0" cellspacing="4">
            <tr>
              <td width="139" align="right" bgcolor="#DDEAF7">Nome Completo: </td>
              <td width="183" bgcolor="#DDEAF7" class="login001"><? echo "$nome_completo2" ?></td>
              <td width="142" align="right" bgcolor="#DDEAF7">CPF:</td>
              <td width="221" align="left" bgcolor="#DDEAF7" class="login001"><? echo "$cpf" ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EFF5FC">Data de Nascimento: </td>
              <td bgcolor="#EFF5FC" class="login001"><? echo "$data_nascimento" ?></td>
              <td align="right" bgcolor="#EFF5FC">Data de Cadastro: </td>
              <td align="left" bgcolor="#EFF5FC" class="login001"><? echo "$data_cadastro2" ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#DDEAF7">Curso:</td>
              <td bgcolor="#DDEAF7" class="login001"><? echo "$tipo_curso" ?></td>
              <td align="right" bgcolor="#DDEAF7">Pagamento:</td>
              <td align="left" bgcolor="#DDEAF7" class="login001"><? echo "$pagamentos" ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EFF5FC">Documentos:</td>
              <td bgcolor="#EFF5FC" class="login001"><? echo "$documentos" ?></td>
              <td align="right" bgcolor="#EFF5FC">Publica&ccedil;&atilde;o:</td>
              <td align="left" bgcolor="#EFF5FC" class="login001"><? echo "$publicacao" ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#DDEAF7">Hist&oacute;rico:</td>
              <td bgcolor="#DDEAF7" class="login001"><? echo "$historico" ?></td>
              <td align="right" bgcolor="#DDEAF7">Certificado:</td>
              <td bgcolor="#DDEAF7" class="login001"><? echo "$certificado" ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EFF5FC">Escola:</td>
              <td bgcolor="#EFF5FC" class="login001"><? echo "$escola" ?></td>
              <td bgcolor="#EFF5FC" class="login001">&nbsp;</td>
              <td bgcolor="#EFF5FC" class="login001">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#DDEAF7">Obsrva&ccedil;&atilde;o:</td>
              <td colspan="3" bgcolor="#DDEAF7" class="login001"><? echo "$observacao" ?></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td colspan="3" class="login001">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4" align="center" bgcolor="#DDEAF7"><table width="215" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="23"><img src="imagens/ico_listar_alunos.gif" width="19" height="18" /></td>
                  <td width="194"><a href="trabalhe_conosco_financeiro.php?cod_aluno=<?echo $cod_aluno ?>" target="_self" class="links">ADCIONAR DADOS FINANCEIROS </a></td>
                </tr>
              </table></td>
              </tr>
          </table>          
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
