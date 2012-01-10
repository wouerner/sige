<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Curso Preparat&oacute;rio para Supletivo a Dist&acirc;ncia</title>
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
<style type="text/css">
<!--
.fonte02 {	color: #666666;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
}
.login001 {	color: #024D91;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.style3 {font-size: 18px}
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
<table width="558" height="40" border="0" cellpadding="0" cellspacing="0" bgcolor="#D9E6EF">
  <tr>
    <td width="35">&nbsp;</td>
    <td width="552"><img src="imagens/titulo_area_do_aluno.gif" width="234" height="29" /></td>
  </tr>
</table>
<p>
  <?php include "validacao_pagina_aluno.php"; 
include "financeiro/conexao_bd.php";
$resultado= mysql_query ("SELECT * FROM tb_alunos Where cpf='$cpf' AND registro_ativo = 's'");
$linhas = mysql_num_rows ($resultado);


?>
  <?php	for($i=0; $i<$linhas; $i++)
{
$id_aluno_c = mysql_result ($resultado, $i, "id_aluno");
$nome_completo_c = mysql_result ($resultado, $i, "nome_completo");
$lagradouro_c = mysql_result ($resultado, $i, "lagradouro");		
$numero_casa_c = mysql_result ($resultado, $i, "numero_casa");
$bairro_c = mysql_result ($resultado, $i, "bairro");
$cidade_c = mysql_result ($resultado, $i, "cidade");
$estado_uf_c = mysql_result ($resultado, $i, "estado_uf");
$cep_c = mysql_result ($resultado, $i, "cep");
$data_nasc_c = mysql_result ($resultado, $i, "data_nasc");
$cpf_c = mysql_result ($resultado, $i, "cpf");
$rg_c = mysql_result ($resultado, $i, "rg");
$email_c = mysql_result ($resultado, $i, "email");
$inicio_curso_c = mysql_result ($resultado, $i, "inicio_curso");
$termino_curso_c = mysql_result ($resultado, $i, "termino_curso");
$tipo_curso_c = mysql_result ($resultado, $i, "tipo_curso");
$situacao_aluno_c = mysql_result ($resultado, $i, "situacao_aluno");

$polo_c = mysql_result ($resultado, $i, "polo");
$descricao1_c = mysql_result ($resultado, $i, "descricao1");
$telefones_c = mysql_result ($resultado, $i, "telefones");
$senha_c = mysql_result ($resultado, $i, "senha");
$ddd_c = mysql_result ($resultado, $i, "ddd");
$celular_c = mysql_result ($resultado, $i, "celular");
$url_foto = mysql_result ($resultado, $i, "url_foto");
$codigo_aluno = mysql_result ($resultado, $i, "codigo_aluno");
}
?>
</p>
<table width="464" height="637" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="711" height="53" align="center" class="login001"><span class="titulos_das_paginas_01">Bem Vindo a &Aacute;rea do Aluno.</span><br />
      <span class="corpo_texto_geral_01">Aqui voc&ecirc; poder&aacute; imprimir seu contrato, fazer um simulado e ainda ter acesso a nossa biblioteca. </span></td>
  </tr>
  <tr>
    <td height="334" align="center" valign="top"><table width="430" cellpadding="2" cellspacing="2" bordercolor="#FFFFFF" bgcolor="#F4F8FF">
      <tr>
        <td colspan="3" align="center" class="style7"><table width="100%" height="118" border="0">
          <tr>
            <td width="25%" rowspan="4" align="center"><? echo "<img src= fotos_do_aluno_3x4/$url_foto width='87' height='116' border='0'/>";?></td>
            <td width="75%" class="login001"><?php echo "$nome_completo_c" ?></td>
          </tr>
          <tr>
            <td><span class="fonte02"><strong>Fone: </strong></span><span class="login001"><strong>(<?php echo "$ddd_c" ?>) <?php echo "$telefones_c" ?> / <?php echo "$celular_c" ?></strong></span></td>
          </tr>
          <tr>
            <td><span class="fonte02"><strong>E-mail: </strong></span><span class="login001"><strong><?php echo "$email_c" ?></strong></span></td>
          </tr>
          <tr>
            <td><span class="texto_corpo"><span class="fonte02"><strong>Endere&ccedil;o: </strong></span></span><span class="login001"><strong> </strong><br />
                      <?php echo "$lagradouro_c , $bairro_c, $cidade_c , $estado_uf_c , $cep_c" ?></span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="10" align="right" class="texto_03">&nbsp;</td>
        <td width="196" align="left" class="texto_corpo"><span class="fonte02"><strong>CPF:</strong></span> <span class="login001"><?php echo "$cpf_c" ?></span></td>
        <td align="left" class="texto_corpo"><span class="fonte02"><strong>RG:</strong></span><span class="login001"> <?php echo "$rg_c" ?></span></td>
      </tr>
      <tr>
        <td align="right" class="texto_03">&nbsp;</td>
        <td align="left"><span class="fonte02"><strong> In&iacute;cio: </strong></span><span class="login001"><strong> </strong><?php echo "$inicio_curso_c" ?></span></td>
        <td align="left"><span class="texto_corpo"><span class="fonte02"><strong>Simulado: </strong></span></span><span class="login001"><?php echo "$termino_curso_c" ?></span></td>
      </tr>
      <tr>
        <td align="right" class="texto_03">&nbsp;</td>
        <td align="left" class="texto_corpo"><span class="fonte02"><strong>Tipo do Curso:</strong></span> <span class="login001"><?php echo "$tipo_curso_c" ?></span></td>
        <td align="left" class="texto_corpo"><span class="fonte02"><strong>Pagamento: </strong></span><span class="login001"><strong> </strong><?php echo "$situacao_aluno_c" ?></span></td>
      </tr>
      <tr>
        <td align="right" class="texto_03">&nbsp;</td>
        <td colspan="2" align="left" class="texto_03"><strong class="fonte02">Polo:</strong><span class="login001"> <?php echo "$polo_c" ?></span></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="texto_03">&nbsp;</td>
        <td colspan="2" align="left" valign="top" class="texto_corpo"><span class="fonte02"><strong>Obs: </strong></span><span class="login001"><strong> </strong><?php echo "$descricao1_c" ?></span></td>
      </tr>
    </table>
        <p class="texto_corpo"><?php



// pega o endereço do diretório

$diretorio = getcwd(); 
// abre o diretório
$ponteiro  = opendir($diretorio);
// monta os vetores com os itens encontrados na pasta
while ($nome_itens = readdir($ponteiro)) {    $itens[] = $nome_itens;}



// ordena o vetor de itens
sort($itens);
// percorre o vetor para fazer a separacao entre arquivos e pastas 
foreach ($itens as $listar) {
// retira "./" e "../" para que retorne apenas pastas e arquivos
   if ($listar!="." && $listar!=".."){ 

// checa se o tipo de arquivo encontrado é uma pasta
   		if (is_dir($listar)) { 
		// caso VERDADEIRO adiciona o item à variável de pastas			
		$pastas[]=$listar; 		
		} else{ 
// caso FALSO adiciona o item à variável de arquivos			
$arquivos[]=$listar;
		}
	   }
}
		  

// lista as pastas se houverem
if ($pastas != "" ) { 
foreach($pastas as $listar){
   print "Pasta: <a href='$listar'>$listar</a><br>";}
   }
// lista os arquivos se houverem
if ($arquivos != "") {
foreach($arquivos as $listar){
print " » <a href='$listar' target='_blank' >$listar</a><br>";}   
}
?>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="19" align="center" valign="top"><p><a href="logout_aluno.php" class="login001">Fechar Login</a> </p>
        <p>&nbsp;</p>
      <p align="center"> </p>
      <p align="center">
        <?
mysql_close($link);
?>
      </p></td>
  </tr>
</table>
<p>&nbsp; </p>
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
