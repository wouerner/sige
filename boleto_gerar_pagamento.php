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

<?
include "financeiro/conexao_bd.php";
$codigo_aluno = $HTTP_GET_VARS['codigo_aluno'];

$resultado2 = mysql_query("SELECT * FROM tb_alunos WHERE codigo_aluno = '$codigo_aluno'");
$linhas = mysql_num_rows ($resultado2);

for($i=0; $i<$linhas; $i++)
{
$sacado = mysql_result ($resultado2, $i, "nome_completo");
$lagradouro = mysql_result ($resultado2, $i, "lagradouro");
$numero_casa = mysql_result ($resultado2, $i, "numero_casa");
$bairro = mysql_result ($resultado2, $i, "bairro");
$bairro  = mysql_result ($resultado2, $i, "bairro");
$cidade = mysql_result ($resultado2, $i, "cidade");
$estado_uf = mysql_result ($resultado2, $i, "estado_uf");
$cep = mysql_result ($resultado2, $i, "cep");
$cpf = mysql_result ($resultado2, $i, "cpf");
$email = mysql_result ($resultado2, $i, "email");
$id_aluno = mysql_result ($resultado2, $i, "id_aluno");
$telefone = mysql_result ($resultado2, $i, "telefones");

}

?>

<?php

$data_base = date("Y/m/d");
$data_base2 = date("d/m/Y");

$data_quebrada = explode('/', $data_base);

        $ano = "$data_quebrada[0]";

        $mes = "$data_quebrada[1]";

        $dia = "$data_quebrada[2]";

        // Soma mes e dias a data atual 
        $nova_data = mktime(0, 0, 0, $mes, $dia + 10, $ano);
        // Imprime a nova data no formato DD/MM/YYYY
		$dt = date("d/m/Y", $nova_data);
		



?>		









<link href="css_principal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style3 {font-weight: bold}
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






<script>

		function ValidaFormulario2 () {

	
  
		if (document.formulario2.valor.value==""){ 
		alert("Por Favor Confirme o Curso que Deseja."); 
		document.formulario2.valor.focus(); 
	return false;
	}
	
	


		if (document.formulario2.Data_vencimento.value==""){ 
		alert("Preencha o campo Data_vencimento"); 
		document.formulario2.Data_vencimento.focus(); 
	return false;
	}

		
	
	
	return true;
}
// -->


</script>
	
<table width="558" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="middle"><table width="558" height="40" border="0" cellpadding="0" cellspacing="0" bgcolor="#D9E6EF">
      <tr>
        <td width="35">&nbsp;</td>
        <td width="552"><img src="imagens/titulo_pagamento.gif" width="181" height="30" /></td>
      </tr>
    </table></td>
  </tr>
  

  <tr>
    <td align="center" valign="top"><table width="543" height="33" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="909" valign="top"><br />
          <table width="55%" border="0" align="center" cellspacing="0" class="corpo_site">
          <tr>
            <td width="2%" height="16" valign="middle" bgcolor="#D9E6EF">&nbsp;</td>
            <td width="98%" valign="middle" bgcolor="#D9E6EF"><div align="center"><span class="titulos_das_paginas_02">Entre com seus dados para que seja poss&iacute;vel <br />
              Gerar o Boleto </span></div></td>
          </tr>
          <tr>
            <td height="277" colspan="2" valign="top" class="texto_corpo">


			
			<form name="formulario2" id="formulario2" onsubmit="return ValidaFormulario2()" method="post" action="boleto_gera_cad_envia.php">
 

<table width="486" border="0" align="center" cellpadding="3" cellspacing="4">
  <tr>
    <td colspan="3" class="corpo_texto_geral_01">
	
	



     
      Caro(a)<strong> <? echo $sacado ?>,</strong> para que voc&ecirc; consiga gerar o boleto digite o valor e se for preciso, altere a data de vencimento para uma que lhe seja mais conveniente. </td>
    </tr>
  <tr>
    <td width="123" align="right">&nbsp;</td>
    <td colspan="2">
	
	
	<input name="codigo_aluno" type="hidden" id="codigo_aluno" value="<? echo $codigo_aluno  ?>"/>
	<input name="id_aluno" id="id_aluno" type="hidden" value="<? echo $id_aluno ?>"/>
	<input name="sacado" id="sacado" type="hidden" value="<? echo $sacado ?>"/>
    <input name="lagradouro" id="lagradouro" type="hidden" value="<? echo $lagradouro ?>"/>
	<input name="numero_casa" id="numero_casa" type="hidden" value="<? echo $numero_casa ?>"/>
	<input name="bairro" id="bairro" type="hidden" value="<? echo $bairro ?>"/>
	<input name="ddd" id="ddd" type="hidden" value="<? echo $ddd ?>"/>
	<input name="telefone" id="telefone" type="hidden" value="<? echo $telefone ?>"/>

	<input name="cidade" id="cidade" type="hidden" value="<? echo $cidade ?>"/>
	<input name="estado_uf" id="estado_uf" type="hidden" value="<? echo $estado_uf ?>"/>
	<input name="cep" id="cep&quot;&quot;" type="hidden" value="<? echo $cep ?>"/>
	<input name="cpf" id="" type="hidden" value="<? echo $cpf ?>"/>
	<input name="email" id="" type="hidden" value="<? echo $email ?>"/>	</td>
  </tr>
  <tr>
    <td height="44" colspan="3" align="center" valign="middle"><table width="97%" height="89" border="1">
      <tr>
        <td width="27%" height="45" align="right"><span class="data_e_autor">Curso:</span></td>
        <td width="73%" align="left" valign="middle"><select name="valor" id="valor"  class="required">
            <option value="">Escolha Um Curso</option>
<?php
include "financeiro/conexao_bd.php";
$SQL2 = "SELECT * FROM tabela_cursos";  
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{
?>
            <? echo "<option value='$x2[valor_curso]'>$x2[nome_do_curso] (R$ $x2[valor_curso])</option>" ?>
            <?php } ?>
          </select></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><span class="data_e_autor">Data de Vencimento: </span></td>
        <td align="left" valign="middle"><span class="fonte_002">
          <input name="data_vencimento" type="hidden" class="required" id="data_vencimento" title="Digite o Valor a ser Pago" onkeypress="formatar_mascara(this, '##/##/####')" size="20" maxlength="10" value="<? echo $data_base ?>"/><? echo $dt ?>
          <input name="data_Emissao" type="hidden" id="data_Emissao" value="<? echo $data_base2  ?>"/>
        </span></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td width="133">&nbsp;</td>
    <td width="210" class="fonte_002">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td colspan="2">
      
        <input type="submit" name="Submit" value="   Gerar Boleto   " />     </td>
  </tr>
</table>
</form>		</td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#8FBEE8" class="sub_titulo_01">&nbsp;</td>
            <td valign="top" bgcolor="#8FBEE8" class="sub_titulo_01">&nbsp;</td>
          </tr>
          <tr>
            <td height="47" colspan="2" valign="top" class="roda_pe">&nbsp;</td>
          </tr>
          <tr>
            <td height="47" colspan="2" valign="top" class="roda_pe">&nbsp;</td>
          </tr>
        </table>             </td>
      </tr>
    </table></td>
  </tr>
</table>
				  <script type="text/javascript">
						function formCallback(result, form) {
							window.status = "valiation callback for form '" + form.id + "': result = " + result;
						}
						
						var valid = new Validation('local', {immediate : true, onFormValidate : formCallback});
						Validation.addAllThese([
							['validate-password', 'Your password must be more than 6 characters and not be \'password\' or the same as your name', {
								minLength : 7,
								notOneOf : ['password','PASSWORD','1234567','0123456'],
								notEqualToField : 'field1'
							}],
							['validate-password-confirm', 'Your confirmation password does not match your first password, please try again.', {
								equalToField : 'field8'
							}]
						]);
					</script>
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
