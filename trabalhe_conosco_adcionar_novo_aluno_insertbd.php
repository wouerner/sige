<?php
//pega sess�o id do navegador
session_start( );
$sessao = session_id();
//fim do sess�o id
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
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



$resultado2= mysql_query ("SELECT * FROM tb_socios WHERE email = '$email_parceiro'");
$linhas2 = mysql_num_rows ($resultado2);

for($i2=0; $i2<$linhas2; $i2++)
{
$id_parceiro = mysql_result ($resultado2, $i2, "id_parceiro");
$nome_do_parceiro = mysql_result ($resultado2, $i2, "nome_completo");
}




//inicio de numeros ramdomicos
function initRand ()
{
   static $randCalled = FALSE;
   if (!$randCalled)
   {
        srand((double) microtime() * 1000000);
        $randCalled = TRUE;
    }
}
function randNum ($low, $high)
{
     initRand();
     $rNum = rand($low, $high);
     return $rNum;
}

// Exemplo de uso. 
// setando o m�nimo � o m�ximo que o n�mero aleat�rio deve chegar
$num_imagem = randNum(00000001,99999999);

// exibindo uma imagem (imagem_1.jpg, imagem_2.jpg, etc.)

//fim dos numeros ramdomicos

$junta_duas_variaveis = "$sessao$num_imagem" ;


$data_hoje = date("Y/m/d");

$nome_completo   = $_POST['nome_completo'];
$cpf   = $_POST['cpf'];
$data_nasc = implode("-", array_reverse(explode("/", $data_nasc)));
$tipo_curso   = $_POST['tipo_curso'];
$data_cadastro = "$data_hoje";
$registro_ativo  = 's';
$documentos =  'Aguardando';
$pagamentos  = 'Aguardando';
$historico  = 'Aguardando';
$publicacao  = 'Aguardando';
$certificado  = 'Aguardando';
$escola  = 'Aguardando';
$cod_aluno = "$junta_duas_variaveis";
$observacao = "$observacao";




$query = "INSERT INTO tb_socios_alunos (id_parceiro, nome_completo, cpf, data_nasc, tipo_curso, data_cadastro, registro_ativo, documentos, pagamentos, historico, publicacao, certificado, escola, cod_aluno, observacao)


 values('$id_parceiro','$nome_completo', '$cpf', '$data_nasc', '$tipo_curso', '$data_cadastro', '$registro_ativo', '$documentos', '$pagamentos', '$historico', '$publicacao', '$certificado', '$escola', '$cod_aluno', '$observacao')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na grava��o dos dados.");
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
-->
</style>
<!-- InstanceEndEditable -->
</head>




<body>


<!-- FORNUL�RIO DE LOGIN ALINO-->
<div align="center" >
  <div style="position:relative; top:0px;  width:0px; height:0px; z-index:995;">
  	<div id="formulario_login_aluno_topo" style="position:absolute; left: -360px; top: 225px;">
		 <?php include "formulario_login_aluno_topo.php"; ?>
    </div>
  </div>
</div>
<!-- FIM FORMUL�RIO DE LOGIN ALUNO -->


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
        <td height="34"class="titulos_pagina"><div align="center"> 
          <p>   <?php echo "$nome_do_parceiro" ?>   </p>
          <p>O Aluno <?php echo "$nome_completo" ?>, acaba de ser cadastrado no bando de dados com Sucesso!<br />
            Seu Administrador acaba de ser notificado por e-mail que voc&ecirc; realizou um novo cadastro.</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><a href="trabalhe_conosco_adcionar_novo_aluno.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a> </p>
        </div></td>
      </tr>
      <tr>
        <td height="116" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
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

<?php

// Coloque a mensagem que ir� ser enviada para seu e-mail abaixo:
$msg = "Mensagem enviada em ".date("d/m/Y").".  

O parceiro $nome_do_parceiro acaba de realizar um cadastro de um novo aluno.


Segue dos dados do Aluno.

Nome: $nome_completo

CPF: $cpf
Data de Nascimento: $data_nasc
Curso Escolhido: $tipo_curso 
Observa��o: $observacao


Mensagem Autom�tica do Sistema de Parceria


";
while(list($campo, $valor2) = each($HTTP_GET_VARS)) {
  $msg .= ucwords($campo).": ".$valor2."
";

}

// Agora iremos fazer com que o PHP envie os dados do Formul�rio para seu e-mail:
mail("contato@cursomaispratico.com.br", "$nome_do_parceiro - Novo Aluno Parceiro" , $msg,"From: contato@cursomaispratico.com.br");

echo "";


?>

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
