<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "validacao_pagina_adm.php";
?>

<html><!-- InstanceBegin template="/Templates/pagina_principal_do_sistema.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerenciamento</title>
<!-- InstanceEndEditable -->

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(imagens/background.gif);
	background-repeat: repeat-y;
	background-color: #FFFFFF;
}
-->
</style>


<script type="text/javascript" language="JavaScript1.2" src="Resource/js/stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2">
<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/css_formularios.css" rel="stylesheet" type="text/css">
<link href="css/css_links.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (LAYOUT DO MEU SISTEMA222.psd) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0" background="imagens/bg_01.gif">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="988" align="center" valign="top"><table width="988" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td colspan="2" background="imagens/layoyt_a_01.jpg"><table width="987" height="161" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="375" height="39" valign="top">&nbsp;</td>
            <td width="638" align="center" valign="middle"><table width="96%" height="68" border="0">
              <tr>
                <td width="91%" align="center"><span class="titulo_principal style1">SISTEMA PARA GEST&Atilde;O FINANCEIRA E <br>
                  CONTROLE DE ALUNOS </span></td>
                <td width="9%" align="center"><a href="logout_adm.php"><img src="imagens/icone_cadeado.gif" alt="Fechar o Sistema" width="39" height="45" border="0" title="Fechar o Sistema"></a></td>
              </tr>
            </table>              </td>
          </tr>
          <tr>
            <td height="41">&nbsp;</td>
            <td align="center"><?php include "formulario_de_busca_de_alunos.php"; ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="149" valign="top">
		
		<?php
		
			
						if ($nivel == 'adm')
				{
				
				
				
				include "menu_lateral.php";
				
				
				}
				else
				{
				
				
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->

<?php
include "validacao_pagina_adm.php";
?>


<script type="text/javascript">


function formatar_mascara(src, mascara) {
	var campo = src.value.length;
	var saida = mascara.substring(0,1);
	var texto = mascara.substring(campo);
	var someros = mascara.substring(/\D/g,"");
	
	if(texto.substring(0,1) != saida) {
		src.value += texto.substring(0,1);
	}
}
</script>





<script> // tag JavaScript   -   ### OBS ### - Todas essas explicações que estão escritas após ( // ) não são necessárias para o funcionamento do códigom, são apenas para explicação do código.

	// // Função de validação do formulário
		function ValidaFormulario () {

	// Função de validação do formulário - Nome
		if (document.formulario.cpf.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Informe seu CPF"); // Mensagem que será exibida quando o campo não for preenchido 
		document.formulario.cpf.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
	return false;
	}
  
   // Função de validação do formulário - Assunto
		if (document.formulario.senha.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Digite sua Senha"); // Mensagem que será exibida quando o campo não for preenchido
		document.formulario.senha.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
		return false;
	}

	
	
	return true;
}
// -->

</script>




<script type="text/JavaScript">
<!--

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>


<script>

		function ValidaFormulario2 () {

		if (document.formulario2.nome_completo.value==""){ 
		alert("Por favor, preencha o campo Nome"); 
		document.formulario2.nome_completo.focus(); 
		return false;
	}


		if (document.formulario2.cpf.value==""){ 
		alert("Por favor, preencha o campo CPF"); 
		document.formulario2.cpf.focus(); 
		return false;
	}

		if (document.formulario2.rg.value==""){ 
		alert("Por favor, preencha o campo RG"); 
		document.formulario2.rg.focus(); 
		return false;
	}


		if (document.formulario2.expedicao.value==""){ 
		alert("Preencha o Campo Expedição"); 
		document.formulario2.expedicao.focus(); 
	return false;
	}

		if (document.formulario2.email.value==""){ 
		alert("Preencha o campo E-mail"); 
		document.formulario2.email.focus(); 
	return false;
	}
	
	
				if (document.formulario2.data_nasc.value==""){ 
		alert("Preencha o campo Data de Nascimento"); 
		document.formulario2.data_nasc.focus(); 
	return false;
	}
  
		if (document.formulario2.naturalidade.value==""){ 
		alert("Preencha o campo Naturalidade"); 
		document.formulario2.naturalidade.focus(); 
	return false;
	}
	
	


		if (document.formulario2.lagradouro.value==""){ 
		alert("Preencha o campo Endereço"); 
		document.formulario2.lagradouro.focus(); 
	return false;
	}


		if (document.formulario2.n_casa.value==""){ 
		alert("Preencha o campo Número"); 
		document.formulario2.n_casa.focus(); 
	return false;
	}
	
		
	if (document.formulario2.bairro.value==""){ 
		alert("Preencha o campo Bairro"); 
		document.formulario2.bairro.focus(); 
	return false;
	}
	
	
	if (document.formulario2.cidade.value==""){ 
		alert("Preencha o campo Cidade"); 
		document.formulario2.cidade.focus(); 
	return false;
	}
	
	if (document.formulario2.uf.value==""){ 
		alert("Preencha o campo Estado"); 
		document.formulario2.uf.focus(); 
	return false;
	}
	
	if (document.formulario2.cep.value==""){ 
		alert("Preencha o campo Cep"); 
		document.formulario2.cep.focus(); 
	return false;
	}
	
	if (document.formulario2.ddd.value==""){ 
		alert("Preencha o campo DDD"); 
		document.formulario2.ddd.focus(); 
	return false;
	}
	
	if (document.formulario2.telefone.value==""){ 
		alert("Preencha o campo Telefones Fixo"); 
		document.formulario2.telefone.focus(); 
	return false;
	}
	
	if (document.formulario2.celular.value==""){ 
		alert("Preencha o campo Celular"); 
		document.formulario2.celular.focus(); 
	return false;
	}
	
	
	
	if (document.formulario2.senha.value==""){ 
		alert("Preencha o campo Senha"); 
		document.formulario2.senha.focus(); 
	return false;
	}
	
	
	return true;
}
// -->


</script>








<table width="485" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#DDDDDD">
  <tr>
    <td width="479" align="center" valign="top" class="style4"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Parceiros</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
            <tr>
              <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
            </tr>
        </table></td>
      </tr>
    </table>      <strong class="sub_titulos">Formul&aacute;rio para cadastrar novos Parceiros </strong></td>
  </tr>
  
  <tr>
    <td align="center"><form name="formulario2" id="formulario2" onSubmit="return ValidaFormulario2()"  method="post" action="parceiros_Insert_bd_form_cadastrar_parceiro.php">
      <table width="441" height="810" border="0" cellpadding="0" cellspacing="5" class="corpo_site">
        <tr>
          <td width="288"><label> <span class="fonte04">Nome Completo:<br>
</span>
                  <input name="nome_completo" type="text" class="css_form_02" id="nome_completo" size="45" maxlength="90" onsubmit="return ValidaFormulario2();"/>
          </label></td>
        </tr>
        <tr>
          <td><span class="fonte_00001"><span class="fonte04">CPF:</span></span><br>
                <input name="cpf" type="text" class="css_form_02" id="cpf" onKeyPress="formatar_mascara(this, '###.###.###-##')" size="18" maxlength="14" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="fonte04">RG:</span><br>
                <input name="rg" type="text" class="css_form_02" id="rg" size="18" maxlength="18" onsubmit="return ValidaFormulario2();"/>
                <br>
                <span class="fonte04">Exped.:</span><br>
                <input name="expedicao" type="text" class="css_form_02" id="expedicao" onKeyPress="formatar_mascara(this, '##/##/####')" size="13" maxlength="10" onsubmit="return ValidaFormulario2();"/>
                <span class="fonte02">Ex:(dd/mm/aaaa)</span></td>
        </tr>
        <tr>
          <td><span class="fonte_00001"><span class="fonte04">E-mail:</span></span>
                <br>
              <input name="email" type="text" class="css_form_02" id="email" size="45" maxlength="254" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="fonte04">Data de Nasc:</span><br>
                <input name="data_nasc" type="text" class="css_form_02" id="data_nasc" onKeyPress="formatar_mascara(this, '##/##/####')" size="13" maxlength="10" onsubmit="return ValidaFormulario2();"/>
                <span class="fonte02">(dd/mm/aaaa)</span> </td>
        </tr>
        <tr>
          <td><span class="fonte04">Natural de:</span>
                <br>
              <input name="naturalidade" type="text" class="css_form_02" id="naturalidade" size="45" maxlength="254" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="fonte04">Endere&ccedil;o: ex: Av, Rua</span> 
                <br>
              <input name="lagradouro" type="text" class="css_form_02" id="lagradouro" size="45" maxlength="254" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="formulario"> <span class="fonte04">Numero:</span> <br>
                  <input name="n_casa" type="text" class="css_form_02" id="n_casa" size="18" maxlength="90" onsubmit="return ValidaFormulario2();"/>
          </span></td>
        </tr>
        <tr>
          <td><span class="fonte_00001"><span class="fonte04">Bairro:</span></span>
                <br>
              <input name="bairro" type="text" class="css_form_02" id="bairro" size="45" maxlength="254" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="formulario"> <span class="fonte04">Cidade:</span><br>
                  <input name="cidade" type="text" class="css_form_02" id="cidade" size="40" maxlength="90" onsubmit="return ValidaFormulario2();"/>
          </span></td>
        </tr>
        <tr>
          <td><span class="formulario"> <span class="fonte04">UF:</span> <br>
                  <select name="uf" class="css_form_02" id="uf" onsubmit="return ValidaFormulario2();">
                    <option value="" selected="selected">Escolha...</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AM">AM</option>
                    <option value="AP">AP</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MG">MG</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="PR">PR</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SE">SE</option>
                    <option value="SP">SP</option>
                    <option value="TO">TO</option>
                  </select>
          </span></td>
        </tr>
        <tr>
          <td><span class="fonte04">CEP:</span> <br>
                <input name="cep" type="text" class="css_form_02" id="cep" size="18" maxlength="9" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="fonte04">DDD: </span> <br>
                <input name="ddd" type="text" class="css_form_02" id="ddd" size="4" maxlength="2" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="fonte04">Tel. Fixo:</span><br>
                <input name="telefone" type="text" class="css_form_02" id="telefone"  onkeypress="formatar_mascara(this, '####-###')" size="12" maxlength="9" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="fonte04">Tel. Celular:</span><span class="fonte_00001"><br>
            </span>
                <input name="celular" type="text" class="css_form_02" id="celular" onKeyPress="formatar_mascara(this, '####-###')" size="12" maxlength="9" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td><span class="fonte04">Senha</span><span class="fonte_00001">:<br>
            </span>
                <input name="senha" type="password" class="css_form_02" id="senha" size="13" maxlength="10" onsubmit="return ValidaFormulario2();"/></td>
        </tr>
        <tr>
          <td height="50" align="center"><label>
            <input name="submit" type="submit" class="em_cima" value="          CADASTRAR          " />
          </label></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>

<p>&nbsp;</p>
<p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="35" colspan="2" align="center" valign="middle"><?php include "roda_pe.php"; ?></td>
        </tr>
    </table></td>
    <td valign="top"><table width="100%" height="151" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>