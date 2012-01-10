<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/pagina_principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerenciamento</title>
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

<?php


include "financeiro/conexao_bd.php";


$id_aluno = $HTTP_GET_VARS['id_aluno'];
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno = $id_aluno");
$linhas = mysql_num_rows ($resultado);

?>

<?php for($i=0; $i<$linhas; $i++)
{

$nome_aluno = mysql_result ($resultado, $i, "nome_completo");
}
?>    







<script language="JavaScript" type="text/javascript">
    function mostra(){
        if (document.getElementById("campo").style.display == "none") {
            document.getElementById("campo").style.display = "block";
        }
		if (document.getElementById("campo").style.display == "block") {
            document.getElementById("campo").style.display = "block";
        } 
		else {
            document.getElementById("campo").style.display = "none";
        }
    }
	
	function esconde(){
        if (document.getElementById("campo").style.display == "block") {
            document.getElementById("campo").style.display = "none";
        } 
		else {
            document.getElementById("campo").style.display = "none";
        }
    }
</script>















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


   // Função de validação do formulário - Assunto
		if (document.formulario.dia_venc.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Por favor, preencha o campo Dia de Vencimento"); // Mensagem que será exibida quando o campo não for preenchido
		document.formulario.dia_venc.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
		return false;
	}



   // Função de validação do formulário - Assunto
		if (document.formulario.forma_pagto.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Por favor, selecione uma Forma de Pagamento"); // Mensagem que será exibida quando o campo não for preenchido
		document.formulario.forma_pagto.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
		return false;
	}


		if (!document.formulario.categoria[0].checked && !document.formulario.categoria[1].checked) {
		alert("Escolha a Categoria de Pagamento!")
		return false;
		}
		




  


	// Função de validação do formulário - Nome
		if (document.formulario.valor.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Preencha o campo Valor"); // Mensagem que será exibida quando o campo não for preenchido 
		document.formulario.valor.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
	return false;
	}
  



	
	
	return true;
}
// -->

</script>



 <script language="JavaScript" type="text/javascript">
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
      </script>








 <table width="739" border="0" cellspacing="3" cellpadding="4">
   <tr>
     <td align="center" class="titulo_principal"><p align="center" class="titulo_principal">&nbsp;</p>
       </td>
   </tr>
   <tr>
     <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
         <tr>
           <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
         </tr>
     </table></td>
   </tr>
 </table>
 <table width="751" border="0" align="center">
  <tr>
    <td><form name="formulario" id="formulario" onsubmit="return ValidaFormulario()" method="post" action="financeiro_insert_criar_parcelas.php">




<table width="745" height="186" border="0" align="center">
  <tr>
    <td width="142" align="right" class="fonte01">&nbsp;</td>
    <td width="626" colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td align="right" class="fonte01">&nbsp;</td>
    <td colspan="2"><a href="#" onclick="mostra()">mostrar</a></td>
    </tr>
  <tr>
    <td height="52" align="right" class="fonte01">Mensalidades:</td>
    <td>      <span class="fonte02">
      <input name="categoria" type="radio" onclick="esconde()" value="Mensal" />
      </span><span class="sub_titulos">(Mensalidade)</span><span class="fonte02"> Escolha esta op&ccedil;&atilde;o para o sistema gera automaticamente uma nova mensalidade toda vez que uma mensalidade for quitada. (Infinitamente).</span></td>
    </tr>
  <tr>
    <td height="47" align="right" class="fonte01">Parcelas:</td>
    <td><p class="fonte02">
<input type="radio" name="categoria" value="Parcelas" onclick="mostra()" />
<span class="sub_titulos"> (Parcelas)</span>      
Caso Escolha &ldquo;Parcelas&rdquo; o sistema ir&aacute; gerar somente o n&uacute;mero de parcelas que voc&ecirc; definir. Por Exemplo; 15 parcelas de R$ 55,50 ao final das 15 parcelas o sistema n&atilde;o ir&aacute; mais gerar cobran&ccedil;as.</p></td>
  </tr>
</table>


</div>
<div id="campo" style="display:none">


<table width="745" border="0" align="center">
  <tr>
    <td width="142" align="right" class="fonte01"><p>Numero de Parcelas: </p></td>
    <td width="626"><p>
      <select name="numero_parcelas" id="numero_parcelas" class="css_form_02"  onsubmit="return ValidaFormulario();">
          <option>Quantas Parcelas?</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
                </select>
</p></td>
  </tr>
</table>


</div>





<table width="745" border="0" align="center">
  <tr>
    <td width="142" align="right" class="fonte01">Valor R$ </td>
    <td colspan="2">
      <input name="valor" type="text" class="css_form_02" id="valor" onkeypress="return(MascaraMoeda(this,'.','.',event))" size="20" maxlength="11" onsubmit="return ValidaFormulario2();" />
</td>
  </tr>
  <tr>
    <td align="right" class="fonte01">Observa&ccedil;&atilde;o:</td>
    <td colspan="2"><textarea name="observacao" cols="30" rows="3" class="css_form_02" id="observacao"></textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td width="426" align="center">
      <input name="submit" type="submit" class="em_cima" value="       INSERIR PARCELA          " />
</td>
    <td width="200">&nbsp;</td>
  </tr>
</table>

    </form></td>
  </tr>
  <tr>
    <td align="center"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="javascript:history.back(1)" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p></td>
  </tr>
</table>




<?
mysql_close($link);
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
