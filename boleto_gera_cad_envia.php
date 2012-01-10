<?php
//pega sessão id do navegador
session_start( );
$sessao = session_id();
//fim do sessão id
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Supletivo R&aacute;pido</title>
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
<link href="novo_css.css" rel="stylesheet" type="text/css" />
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



<?
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
?>










<?php

include "financeiro/conexao_bd.php";

$codigo_aluno = $HTTP_POST_VARS['codigo_aluno'];
$id_aluno = $HTTP_POST_VARS['id_aluno'];
$sacado = $HTTP_POST_VARS['sacado'];
$lagradouro = $HTTP_POST_VARS['lagradouro'];
$numero_casa = $HTTP_POST_VARS['numero_casa'];
$bairro = $HTTP_POST_VARS['bairro'];
$cidade = $HTTP_POST_VARS['cidade'];
$estado_uf = $HTTP_POST_VARS['estado_uf'];
$cep = $HTTP_POST_VARS['cep'];
$cpf = $HTTP_POST_VARS['cpf'];
$email = $HTTP_POST_VARS['email'];

$data_vencimento = $HTTP_POST_VARS['data_vencimento'];
$data_venc = implode("-", array_reverse(explode("/", $data_vencimento)));


$valor = $HTTP_POST_VARS['valor'];






$nosso_mumero = "$num_imagem";
$fase_boleto = "gaveta";
$data_emissao = date("d/m/Y");
$cod_boleto = "$sessao$num_imagem$id_aluno";


$query = "INSERT INTO tb_boletos_itau (codigo_aluno, id_aluno, sacado, lagradouro, numero_casa, bairro, cidade, estado_uf, cep, cpf, email, nosso_mumero, fase_boleto, valor, data_vencimento, data_emissao, cod_boleto)


 values('$codigo_aluno','$id_aluno','$sacado','$lagradouro','$numero_casa','$bairro','$cidade','$estado_uf','$cep','$cpf','$email','$nosso_mumero','$fase_boleto','$valor','$data_vencimento','$data_emissao','$cod_boleto')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>




		
		
<table width="442" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="middle"><table width="558" height="40" border="0" cellpadding="0" cellspacing="0" bgcolor="#D9E6EF">
      <tr>
        <td width="35">&nbsp;</td>
        <td width="552"><img src="imagens/titulo_pagamento.gif" width="181" height="30" /></td>
      </tr>
    </table></td>
  </tr>
  

  <tr>
    <td height="618" align="center" valign="top"><br />
      <table width="536" height="33" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="383" valign="top"><table width="100%" height="591" border="0" cellspacing="0" class="corpo_site">
          <tr>
            <td width="2%" height="16" valign="middle" bgcolor="#D9E6EF">&nbsp;</td>
            <td width="98%" valign="middle" bgcolor="#D9E6EF"><span class="titulos_das_paginas_02">Boleto Gerado com Sucesso! </span></td>
          </tr>
          <tr>
            <td height="277" colspan="2" valign="top" class="texto_corpo">
			
			  <p><span class="titulos_das_paginas_01">Ok, o seu boleto foi gerado com sucesso!</span><br />
			    <span class="corpo_texto_geral_01">Para visualiza-lo clique no link &quot;<strong>Visualizar Boleto</strong>&quot;, assim voc&ecirc; poder&aacute; fazer a impress&atilde;o do mesmo.<br />
			    Um link para a impress&atilde;o do boleto ser&aacute; envi&aacute;do para sua caixa postal, caso voc&ecirc; tenha cadastrado um e-mail.</span></p>
			  <p>&nbsp; </p>
			  <p class="corpo_texto_geral_01">Nome:<?php echo $sacado ?><br /> 
			        E-mail: <?php echo $email ?> <br />
			        Endere&ccedil;o: <?php echo $lagradouro ?>, <?php echo $numero_casa ?>, <?php echo $bairro ?>, <?php echo $cidade ?>, <?php echo $estado_uf ?>, Cep: <?php echo $cep ?>.<br />
			        <br />
			        CPF: <?php echo $cpf ?> <br />
			        Valor a ser pago: <strong>R$: <?php echo $valor  ?></strong><br />
			        Vencimento: <?php echo $data_venc ?>
					
					
					
					</span></p>
			  <p>&nbsp;</p>
			  <p align="center"><a href="boleto_visualizar_imprimir.php?cod_boleto=<?php echo $cod_boleto ?>" target="_blank" class="sub_titulo_01"><strong>VISUALIZAR E IMPRIMIR <br />
			    O BOLETO BANC&Aacute;RIO </strong></a></p>
			  <p align="center"><br />
			      </p></td>
          </tr>
          <tr>
            <td height="16" valign="top" bgcolor="#8FBEE8" class="sub_titulo_01">&nbsp;</td>
            <td valign="top" bgcolor="#8FBEE8" class="sub_titulo_01">&nbsp;</td>
          </tr>
          <tr>
            <td height="95" colspan="2" valign="top" class="roda_pe"><div align="center">
              <p><br />
                VOC&Ecirc; ACABA DE RECEBER UM E-MAIL CONTENDO UM LINK PARA A IMPRESS&Atilde;O DO BOLETO, CASO N&Atilde;O TENHA UMA IMPRESSORA DISPON&Iacute;VEL AGORA.</p>
              <p>ESTE BOLETO J&Aacute; ESTA CADASTRADO EM NOSSO BANCO DE DADOS, QUAISQUER D&Uacute;VIDA ENTRE EM CONTATO </p>
            </div></td>
          </tr>
          <tr>
            <td height="47" colspan="2" valign="top" class="roda_pe">&nbsp;</td>
          </tr>
        </table>              </td>
      </tr>
    </table></td>
  </tr>
</table>

<?php

// Coloque a mensagem que irá ser enviada para seu e-mail abaixo:
$msg = "Mensagem enviada em ".date("d/m/Y").".  

Caro(a), $sacado.

Obrigado por escolher o Centro Educacional Bandeirantes - CEBAN  para auxuliar em sua formação profissional.

Você gerou uma ordem de pagamento em nosso site.

Para visualizar seu boleto clique no link abaixo.

http://www.supletivoceban.com.br/boleto_visualizar_imprimir.php?cod_boleto=$cod_boleto   (caso não consiga clicar, copie e cole o endereço ao lado em seu navegador).

Seus dados:

Nome: $sacado
E-mail: $email
Endereço: $lagradouro, $numero_casa, $bairro, $cidade , $estado_uf, $cep
Cidade: $cidade
Estado: $estado_uf
Cep: $cep
CPF: $cpf

Dados do Boleto
Valor do Boleto: $valor
Data de Emissão: $data_emissao
Data de Vencimento: $data_vencimento
Número do Boleto: $nosso_mumero




 
Muito Obrigado por sua preferência!

Centro Educacional Bandeirantes - CEBAN




";
while(list($campo, $valor2) = each($HTTP_GET_VARS)) {
  $msg .= ucwords($campo).": ".$valor2."
";

}

// Agora iremos fazer com que o PHP envie os dados do Formulário para seu e-mail:
mail("$email , cursos@supletivoceban.com.br", "$sacado - Pedido de Compra" , $msg,"From: financeiro@supletivoceban.com.br");

echo "";


?>




<? //responsável por inserir o registro financeiro na tabela "Histórico Financeiro" baseado no id do aluno

$resultado= mysql_query("SELECT * FROM tb_boletos_itau WHERE id_aluno = '$id_aluno' ORDER BY id_boleto DESC LIMIT 1"); // Esta query é responsável por pegar o ultimo registro do banco 
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$id_boleto = mysql_result ($resultado, $i, "id_boleto");
}


$query = "INSERT INTO tb_historico_financeiro(id_aluno, id_boleto, dia_venc, forma_pagto, categoria, valor, status, cob_enviada, observacao )


 values('$id_aluno','$id_boleto','$data_venc','Boleto','Avulso','$valor','Gaveta','Sim','Gerado Via Site')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>



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
