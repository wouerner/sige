<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');

include '../includes/validacao_pagina_adm.php' ;
?>

<html>
<head>
<title>Gerenciamento</title>

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

<?php include '../includes/css.inc.php' ; ?>

</head>
<body>

<div class = "container" >

<?php include '../includes/cabecalho.inc.php' ; ?>

<div class = "row">
	<div class = "span3" >
		<?php
						if ($nivel == 'adm')
				{
				include "../includes/menu_lateral.php";
				
				}
				else
				{
				//direciona para a página inicial dos usuários cadastrados
				include "menu_lateral_secretaria.php";
				
				}
?>
		</div> 

	<div class = "span13">

        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->

<?php
include "../includes/validacao_pagina_adm.php";

include "../includes/conexao_bd.php";

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






	// Função de validação do formulário - Nome
		if (document.formulario.categoria.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Selecione uma modalidade para a Parcela"); // Mensagem que será exibida quando o campo não for preenchido 
		document.formulario.categoria.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
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



 <script language="javascript">
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

 <p align="center" class="titulo_principal">Datas Cadastradas</p>
     </table>
   </tr>
 </table>
 <table width="751" border="0" align="center">
  <tr>
   
	<form name="formulario" id="formulario" onSubmit="return ValidaFormulario()" method="post" action="agendamento_provas_cadastrar_data_Form_cadastrar_data_Insert_bd.php">


		<h4>Insira uma data para o calend&aacute;rio de provas </h4>
	
      <input name="data_disponivel" type="text" class="css_form_02" id="data_disponivel" onKeyPress="formatar_mascara(this, '##/##/####')" size="15" maxlength="10"  onsubmit="return ValidaFormulario();"/>

      <label><span class="fonte02">(dd/mm/aaaa)
      <input name="id_aluno" type="hidden" id="id_aluno" size="100" maxlength="125" value="<?php //echo $id_aluno ; ?>" />
      </label>

      <input name="status" type="hidden" id="status" size="15" maxlength="10"  value="Aberto" />
      <input name="cob_enviada" type="hidden" id="cob_enviada" size="15" maxlength="10"  value="N&atilde;o" />
      </span>

      <input type="submit" class="em_cima btn" value="INSERIR DATA" />
</form>

<?php mysql_close($link); ?>
</body>
</html>
