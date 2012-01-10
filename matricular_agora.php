<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Curso Supletivo</title>
<!-- InstanceEndEditable -->

<script language="JavaScript" type="text/javascript">AC_FL_RunContent = 0;</script>
<script language="JavaScript" src="AC_RunActiveContent.js" type="text/javascript"></script>
<script language="JavaScript" src="js/jquery.js" type="text/javascript"></script>
<script language="JavaScript" src="js/jquery.validate.js" type="text/javascript"></script>
<script languagt="JavaScript" src="js/jquery.maskedinput.js" type="text/javascript"></script>
<script language="JavaScript" src="js/matricula.js" type="text/javascript"></script>

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
<link href="css/formulario_cadastro.css" rel="stylesheet" type="text/css" />
<link href="css_corpo_site.css" rel="stylesheet" type="text/css" />
<link href="css_formulario_login.css" rel="stylesheet" type="text/css" />
<link href="css/formularios.css" rel="stylesheet" type="text/css" />

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
</table>
</table>	




<!--  Feito por:Wouerner.eti.br formulario de cadastro de aluno-->
	
<div  id="todo">	
<!-- Formulario de cadastro   de alunos-->
	
<form name="form_cadastro_aluno" id="form_cadastro_aluno"   method="post" action="aluno_insert_bd_env_copy_mail.php">
	<fieldset>
	<legend>Ficha de Matícula</legend>
<!-- Informações  -->
	<fieldset>
	<legend>Informações</legend>
	<p>
<span class="titulos_das_paginas_01">Matricule-se agora mesmo!</span>
<br/>
<span class="fonte_002">Preencha o formulário abaixo com seus dados, logo entraremos em contato para confirmação do seu cadastro. <br>
                <strong>* Os campos são de preenchimento obrigatório e verdadeiros</strong></span>

<p><a class="sub_titulo_01" title="02 Fotos 3x4
01 Cópia do RG
01 Cópia do CPF
01 Cópia do Título de Eleitor
01 Cópia do ultimo histór. Escolar
01 Cópia do Cart. Reservista
01 Cópia do Comp. Endereço" href="#">É necessário o envio de cópias dos seguintes documentos: </a><br>
	            <span class="fonte_002">Cart. Identidade / 
            CPF / 
             Título de Eleitor / 
            Histórico Escolar / Cart. Reservista / Comprovante de Residência / 02 Fotos 3x4</span></p>

	</fieldset>

<!-- Dados Aluno  -->
	<fieldset>
	<legend>Dados Pessoais</legend>

		<label class="fonte_002" for="nome_completo" title= "Nome Completo">Nome Completo*</label>
		<input type="text" class="css_form_01" name="nome_completo" id="nome_completo" maxlength="90" size="45" />
<br/>
		<label class="fonte_002">Data Nasc.:*</label>
		<input type="text" class="css_form_01 data" maxlength="10" size="13" id="data_nasc"  name="data_nasc">
<br/>
		<label class="fonte_002">CPF*</label>
		<input type="text"  class="css_form_01 cpf" name="cpf"    maxlength="14" size="18"/>

		<label  class="fonte_002"for="rg">RG* </label>
		<input type="text" class="css_form_01" id ="rg" name="rg" maxlength="18" size="18"/>

		<label class="fonte_002"for="rg_orgao">Orgão expedidor*</label>
		<input type="text" class="css_form_01" id ="rg_orgao" name="rg_orgao" maxlength="18" size="5"/>

		<label class="fonte_002">Exped.*</label>
		<input type="text" class="css_form_01 data" name="expedicao" maxlength="10" size="13" />
<br/>
		<label class="fonte_002">Natural de*</label>
		<input type="text"  class="css_form_01" maxlength="254" size="70" id="naturalidade"  name="naturalidade">

		<label  class="fonte_002"for="natural_uf">UF*</label>
		<select class="css_form_01" name="natural_uf"  id="natural_uf" >
	              <option value="DF" selected="selected">DF</option>
        	      <option value="AC">AC</option >  <option value="AL">AL</option>   <option value="AM">AM</option>
	              <option value="AP">AP</option>   <option value="BA">BA</option>   <option value="CE">CE</option>
    	  	      <option value="DF">DF</option>   <option value="ES">ES</option>   <option value="GO">GO</option>
       		      <option value="MA">MA</option>   <option value="MG">MG</option>   <option value="MT">MT</option>
        	      <option value="MS">MS</option>   <option value="PA">PA</option>    <option value="PB">PB</option>
        	      <option value="PE">PE</option>    <option value="PI">PI</option>  <option value="PR">PR</option>
	              <option value="RJ">RJ</option>   <option value="RN">RN</option>   <option value="RO">RO</option>
        	      <option value="RR">RR</option>   <option value="RS">RS</option>    <option value="SC">SC</option>
   		      <option value="SE">SE</option>   <option value="SP">SP</option>    <option value="TO">TO</option>
              </select>
<br/>
		<label  class="fonte_002"for="nome_pai" title= "nome pai">Nome Pai</label>
		<input type="text" class="css_form_01"name="nome_pai" id="nome_pai" maxlength="90" size="45" />
<br/>
		<label  class="fonte_002"for="nome_mae" title= "nome mãe">Nome Mãe</label>
		<input type="text" class="css_form_01"name="nome_mae" id="nome_mae" maxlength="90" size="45" />
	</fieldset>

<!-- Contato -->
	<fieldset>
	<legend>Contato e Endereço</legend>

		<label class="fonte_002">E-mail*</label>
		<input type="text" class="css_form_01" name="email" maxlength="254" size="45"/><br />
	
	
		<label class="fonte_002">Telefone Fixo:</label>
		<input type="text" class="css_form_01 telefone" name="tel_fixo"  maxlength="14" size="12"/>

		<label class="fonte_002">Telefone Celular:</label>
		<input type="text" class="css_form_01 telefone" name="tel_celular"  maxlength="14" size="12"/>

<br />
		<label class="fonte_002">Endereço</label>
		<input type="text"  class="css_form_01" maxlength="254" size="70" id="logradouro"  name="logradouro">

<br />
		<label class="fonte_002">Cidade*</label>
		<input type="text" class="css_form_01"name="cidade"/>

		<label class="fonte_002">UF*</label>
		<select name="estado_uf"  class="css_form_01"id="estado_uf" >
	              <option value="DF" selected="selected">DF</option>
        	      <option value="AC">AC</option >  <option value="AL">AL</option>   <option value="AM">AM</option>
	              <option value="AP">AP</option>   <option value="BA">BA</option>   <option value="CE">CE</option>
    	  	      <option value="DF">DF</option>   <option value="ES">ES</option>   <option value="GO">GO</option>
       		      <option value="MA">MA</option>   <option value="MG">MG</option>   <option value="MT">MT</option>
        	      <option value="MS">MS</option>   <option value="PA">PA</option>    <option value="PB">PB</option>
        	      <option value="PE">PE</option>    <option value="PI">PI</option>  <option value="PR">PR</option>
	              <option value="RJ">RJ</option>   <option value="RN">RN</option>   <option value="RO">RO</option>
        	      <option value="RR">RR</option>   <option value="RS">RS</option>    <option value="SC">SC</option>
   		      <option value="SE">SE</option>   <option value="SP">SP</option>    <option value="TO">TO</option>
              </select>

		<label class="fonte_002">CEP</label>
		<input type="text"  class="css_form_01" maxlength="9" size="18" id="cep"  name="cep">
	</fieldset>

	<fieldset>
	<legend>Sistema</legend>

		<label class="fonte_002">Senha* </label>
		<input type="password"  class="css_form_01"maxlength="10" size="13" id="senha"  name="senha"/>
<br />
		<label class="fonte_002">Tipo de Curso*</label>
            	<select name="tipo_curso" class="css_form_01"id="tipo_curso" >
        		<option value="Ensino Medio" selected="selected">Ensino Medio</option>
        	        <option value="Fundamental">Fundamental</option>
        	        <option value="Fundamental e Medio">Fundamental e Medio</option>
        	       	<option value="2&ordm; e 3 º Ano">2&ordm; e 3 º Ano</option>
             		<option value="3&ordm; Ano">3&ordm; Ano</option>
             		<option value="Materias">Materias</option>
             		<option value="Dependencia">Dependencia</option>

		</select>
<br />
		<label class="fonte_002">Pagamento*</label>
		<select name="situacao_aluno"  class="css_form_01" id="situacao_aluno" >
        	      	<option value="boleto">Boleto</option>
	              	<option value="Cheque">Cheque</option>
              		<option value="Dinheiro">Dinheiro</option>
              		<option value="cartão">Cartão</option>
                </select>
<br />
		<label class="fonte_002">Descrição</label><br/>
		<textarea name="descricao1" class="css_form_01"cols="35" rows="4" id="descricao1" /></textarea><br />
	        <input name="submit" type="submit" class="css_form_01"id = "enviar" value="CADASTRAR ">
	</fieldset>
</form>	
</div>
</body>
</html>
