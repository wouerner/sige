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

<link href="css_corpo_site.css" rel="stylesheet" type="text/css" />
<link href="css_formulario_login.css" rel="stylesheet" type="text/css" />



<script>

		function ValidaFormulario2 () {

		if (document.formulario2.Nome_Completo.value==""){ 
		alert("Por favor, preencha o campo Nome"); 
		document.formulario2.Nome_Completo.focus(); 
		return false;
	}

		if (document.formulario2.E_mail.value==""){ 
		alert("Por favor, preencha o campo E - mail"); 
		document.formulario2.E_mail.focus(); 
		return false;
	}

		if (document.formulario2.Telefone.value==""){ 
		alert("Por favor, preencha o campo Telefone com DDD"); 
		document.formulario2.Telefone.focus(); 
		return false;
	}
	

		if (document.formulario2.CPF.value==""){ 
		alert("Por favor, preencha o campo CPF"); 
		document.formulario2.CPF.focus(); 
		return false;
	}

		if (document.formulario2.Mensagem.value==""){ 
		alert("Por favor, Escreva sua Mensgem"); 
		document.formulario2.Mensagem.focus(); 
		return false;
	}
	
	
	
	
	

	
	
	
	
	return true;
}
// -->


</script>






<style type="text/css">
<!--
.style17 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #0033FF; font-weight: bold; }
.style18 {color: #FF0000; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
<link href="css/formularios.css" rel="stylesheet" type="text/css" />
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
<table width="587" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="bottom" bgcolor="#d9e6ef"><table width="587" height="40" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="35">&nbsp;</td>
        <td width="552"><img src="imagens/titulo_contato.gif" width="134" height="27" /></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td align="center">
	
	</td>
  </tr>
  <tr>
    <td align="center" valign="top"><br />
    <table width="93%" border="0" cellspacing="0" class="corpo_site">
      <tr>
        <td width="2%" height="16" valign="middle" bgcolor="#8FBEE8">&nbsp;</td>
        <td width="98%" align="center" valign="middle" bgcolor="#8FBEE8"><span class="titulo_branco_01">FORMUL&Aacute;RIO DE ENVIO </span></td>
      </tr>
      <tr>
        <td height="138" colspan="2" valign="top" class="texto_corpo"><form name="formulario2" id="formulario2" method="post" action="envia_comercial.php"  onSubmit="return ValidaFormulario2()" >
            <table width="100%" border="0" align="center" cellpadding="3" cellspacing="4" class="texto_01">
              <tr>
                <td width="280" align="right" class="fonte_002">Seu Nome:</span></td>
                <td width="480" align="left"><input name="Nome_Completo" type="text" id="Nome_Completo" class="css_form_01" title="Preencha com seu Nome Completo" onsubmit="return Verifica_CPF(this)"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte_002">Seu e-mail:</td>
                <td align="left"><input name="E_mail" type="text" id="E_mail" class="css_form_01" title="Preencha com seu E-mail"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte_002">Tel. Fixo com DDD: </td>
                <td align="left"><input name="Telefone" type="text" id="Telefone" class="css_form_01" title="Preencha com seu Telefone"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte_002">CPF:</td>
                <td align="left"><input name="CPF" type="text" class="css_form_01" size="24" maxlength="11" title="Preencha com seu CPF"/>
                  &nbsp;<span class="fonte_002">(sem pontos e tra&ccedil;os) </span></td>
              </tr>
              <tr>
                <td align="right" valign="top" class="fonte_002">Sua Mensagem: </span></td>
                <td align="left"><textarea name="Mensagem" cols="45" rows="10" class="css_form_01" id="Mensagem" onkeydown="total_letras(this.form.acabamento,this.form.total_caracteres,235);" onkeyup="total_letras(this.form.acabamento,this.form.total_caracteres,235);" title="Deixe uma observação caso Precise."></textarea>
                    <br /></td>
              </tr>
              <tr>
                <td height="30" align="right">&nbsp;</td>
                <td><label>
                <input name="Submit" type="submit" class="css_form_01" value="   Enviar Sua Mensagem   " />
                </label></td>
              </table>
        </form></td>
      </tr>
      <tr>
        <td height="21" colspan="2" valign="top" class="texto_corpo">&nbsp;</td>
      </tr>
      <tr>
        <td height="264" colspan="2" valign="top" class="texto_corpo"><p class="corpo_texto_geral_01"><strong>Diretor:</strong> Deyvisson Barbosa Silva </p>
          <p class="corpo_texto_geral_01"><strong>Secret&aacute;ria:</strong> Eliz&acirc;ngela e Maria</p>
          <p class="corpo_texto_geral_01"><strong>Telefones:</strong> (61) 3386-2422 / 3386-6781 </p>
          <p class="corpo_texto_geral_01"><strong>Fax:</strong> (61) 3386-6781 </p>
          <p class="corpo_texto_geral_01"><strong>E-mails:</strong></p>
          <blockquote>
            <p class="corpo_texto_geral_01">dire&ccedil;&atilde;o: <a href="mailto:diretor@ceban.com.br">diretor@ceban.com.br</a><br />
              secretaria: <a href="mailto:secretaria@ceban.com.br">secretaria@ceban.com.br</a><br />
              <span class="corpo_texto_geral_01">tutoria: <a href="mailto:tutoria@ceban.com.br">tutoria@ceban.com.br </a></span><br />
            </p>
          </blockquote></td>
      </tr>
      <tr>
        <td height="12" valign="top" bgcolor="#8FBEE8">&nbsp;</td>
        <td height="12" align="center" valign="middle" bgcolor="#8FBEE8"><span class="titulo_branco_01">INSCREVA-SE AQUI </span></td>
      </tr>
      <tr>
        <td height="20" colspan="2" align="center" valign="top"></td>
      </tr>
      <tr>
        <td height="24" colspan="2" align="center" valign="top" class="roda_pe"><a href="matricular_agora.php" target="_self"><img src="imagens/icone_faca_sua_inscricao.gif" width="230" height="56" border="0" title="Clique aqui para fazer sua inscrição e gerar seu boleto bancário."/></a></td>
      </tr>
      <tr>
        <td height="47" colspan="2" valign="top" class="roda_pe">&nbsp;</td>
      </tr>
      <tr>
        <td height="47" colspan="2" valign="top" class="roda_pe">&nbsp;</td>
      </tr>
    </table></td></tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
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
