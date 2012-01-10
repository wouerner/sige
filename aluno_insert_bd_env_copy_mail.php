<?php
include "financeiro/conexao_bd.php";

//pega sessão id do navegador
session_start( );
$sessao = session_id();
//fim do sessão id


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
// setando o mínimo é o máximo que o número aleatório deve chegar
$num_imagem = randNum(00000001,99999999);

// exibindo uma imagem (imagem_1.jpg, imagem_2.jpg, etc.)

//fim dos numeros ramdomicos

$junta_duas_variaveis = "$sessao$num_imagem" ;

//dados pessoais
$nome_completo  = $_POST['nome_completo'];
$cpf            = $_POST['cpf'];
$rg             = $_POST['rg'];
$rg_orgao       = $_POST['rg_orgao'];
$data_nasc      = $_POST['data_nasc'];
$expedicao      = $_POST['expedicao'];
$naturalidade   = $_POST['naturalidade'];
$naturalidade_uf = $_POST['natural_uf'];
$nome_pai =       $_POST['nome_pai'];
$nome_mae =       $_POST['nome_mae'];

//

//dados endereco e contato
$lagradouro    = $_POST['logradouro'];
//$numero_casa   = $_POST['numero_casa'];
//$bairro        = $_POST['bairro'];
$cidade        = $_POST['cidade'];
$estado_uf     = $_POST['estado_uf'];
$cep           = $_POST['cep'];
$email         = $_POST['email'];
$telefones     = $_POST['tel_fixo'];
//$ddd           = $_POST['ddd'];
$celular       = $_POST['tel_celular'];
//

//sistema
$inicio_curso    = 'Após Primeiro Pagamento';
//$termino_curso   = $_POST['termino_curso'];
$tipo_curso      = $_POST['tipo_curso'];
$situacao_aluno  = $_POST['situacao_aluno'];
//$polo            = $_POST['polo'];
$descricao1      = $_POST['descricao1'];
$senha           = $_POST['senha'];
$registro_ativo  = 'n';
$url_foto        = '_avatar.jpg';
$codigo_aluno    = "$junta_duas_variaveis";
$data_cadastro   = date("Y/m/d");


//verifica se o cpf já consta na base de dados:

$query_cpf = "SELECT cpf FROM tb_alunos WHERE cpf ='$cpf'";
$query_cpf= mysql_query($query_cpf); 
$query_cpf =  mysql_fetch_assoc($query_cpf);

if($query_cpf['cpf']== $cpf){ 
	echo "cpf: $cpf já existe na base de dados. Se aluno menor de idade: ver se o responsavel já não tem cadastro no sistema.<br/>";
	exit;
}
//fim da verificação

$query = "INSERT INTO tb_alunos(nome_completo, 
				lagradouro,   
				cidade, 
				estado_uf, 
				cep, 
				data_nasc, 
				cpf, 
				rg, 
				rg_orgao,
				email, 
				inicio_curso, 
				tipo_curso, 
				situacao_aluno, 
				descricao1, 
				telefones, 
				id_aluno, 
				senha, 
				naturalidade, 
				naturalidade_uf, 
				celular, 
				expedicao, 
				nome_do_pai , 
				nome_do_mae ,
				registro_ativo, 
				url_foto, 
				codigo_aluno, 
				data_cadastro)
		 values('$nome_completo','$lagradouro','$cidade','$estado_uf','$cep','$data_nasc','$cpf','$rg','$rg_orgao','$email','$inicio_curso','$tipo_curso','$situacao_aluno','$descricao1','$telefones','NULL','$senha','$naturalidade', '$naturalidade_uf', '$celular' , '$expedicao' ,'$nome_pai','$nome_mae', '$registro_ativo', '$url_foto', '$codigo_aluno','$data_cadastro')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Curso Supletivo</title>
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

<link href="css_corpo_site.css" rel="stylesheet" type="text/css" /><!-- InstanceEndEditable -->
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
	
	
	
	
	
	
<table width="587" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="bottom" bgcolor="#d9e6ef"><table width="587" height="40" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="35">&nbsp;</td>
        <td width="552"><img src="imagens/titulo_matricula.gif" width="169" height="29" /></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"><table width="446" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><p><span class="titulos_das_paginas_01">PARAB&Eacute;NS!! <br />
          SEU PEDIDO DE MATR&Iacute;CULA J&Aacute; FOI ENVIADO!</span></p>
          <p align="center"><span class="corpo_texto_geral_01"><strong>Aten&ccedil;&atilde;o!!</strong> Sua matr&iacute;cula s&oacute; ser&aacute; ativada mediante ao pagamento.<br />
            Entre em contato conosco para maiores informa&ccedil;&otilde;s sobre como realizar seu pagamento. </span></p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="441" height="28" border="0" cellpadding="0" cellspacing="4" bgcolor="#FFFFFF">
      <tr>
        <td height="20" align="center" bgcolor="#D9E6EF" class="style17"><span class="titulos_das_paginas_02"><span class="titulos_das_paginas_02"><strong>Entre em contato para maiores informa&ccedil;&otilde;es.</strong></span></span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="467" height="72" border="0">
      <tr>
        <td width="689" height="21" align="center"><a 
    href="#" title="03 Fotos 3x4
01 C&oacute;pia do RG
01 C&oacute;pia do CPF
01 C&oacute;pia do da Certid&atilde;o de Nasc./Cas.
01 C&oacute;pia do T&iacute;tulo de Eleitor
01 C&oacute;pia do ultimo hist&oacute;r. Escolar
01 C&oacute;pia do Cart. Reservista
01 C&oacute;pia do Comp. Endere&ccedil;o" class="link_001" ><strong> &Eacute; necess&aacute;rio o envio de c&oacute;pias dos seguintes documentos: </strong></a></td>
      </tr>
      <tr>
        <td height="45" align="center" class="fonte_002"><p><strong>Cart. Identidade / 
          CPF / 
          Certid&atilde;o de Nasc. ou Casamento / T&iacute;tulo de Eleitor / 
          Hist&oacute;rico Escolar / Cart. Reservista / Comprovante de Resid&ecirc;ncia / 02 Fotos 3x4</strong></p>
          <p>&nbsp;</p>
          <p class="titulos_das_paginas_01">FA&Ccedil;A SEU PAGAMENTO AQUI </p>
          <p><a href="http://f2link.f2b.com.br/pedido/FP.asp?id=0002096428" target="_blank"><img src="http://f2link.f2b.com.br/pedido/images/button/botaocomprarblue.gif" width="67" height="19" border="0"></a>;</p>
          <p>&nbsp;</p>
          <p><a href="contrato_do_aluno.php?codigo_aluno=<? echo $codigo_aluno; ?>" target="_blank" class="titulos_das_paginas_02">CLIQUE AQUI PARA IMPRIMIR SEU CONTRATO</a></p>
          <p>&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><?php

// Coloque a mensagem que irá ser enviada para seu e-mail abaixo:
$msg = "Mensagem enviada em ".date("d/m/Y").".  

Caro(a), $nome_completo.

Você acaba de realizar uma solicitação de matrícula no site www.ceban.com.br

Para Confirmar a matrícula envie um e-mail para: diretor@ceban.com.br

Estamos aguardando o seu pagamento para finalizar o processo de matrícula.

Para maiores informações sobre como realizar o seu pagamento, entre em contato conosco.


Os dados que você cadastrou conosco são:

Nome: $nome_completo
E-mail: $email
Endereço: $lagradouro, $numero_casa, $bairro
Cidade: $cidade 
Estado: $estado_uf
Cep: $cep
Telefone: ($ddd) $telefones - Cel.: $celular 

CPF: $cpf
RG: $rg
Expedição: $expedicao
Naturalidade: $naturalidade
Data de Nascimento: $data_nasc
Pagamento: $situacao_aluno

Início do Curso: $inicio_curso 

Curso Escolhido: $tipo_curso 

Senha para acesso a área restrita: $senha

Observação: $descricao1


Centro Educacional Bandeirantes - CEBAN 
Muito Obrigado por sua preferência!



";
while(list($campo, $valor2) = each($HTTP_GET_VARS)) {
  $msg .= ucwords($campo).": ".$valor2."
";

}

// Agora iremos fazer com que o PHP envie os dados do Formulário para seu e-mail:
mail("$email , diretor@ceban.com.br", "$nome_completo - Solicitação de Matrícula" , $msg,"From: diretor@ceban.com.br");

echo "";


?></td>
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
