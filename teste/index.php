<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

















<script language="javascript">
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
                  alert("Escolha Uma Categoria!")
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








 <table width="739" border="0" cellspacing="3" cellpadding="4">
   <tr>
     <td align="center" class="titulo_principal"><p align="center" class="titulo_principal">Gerar Pagamento para:</p>
       <p align="center" class="titulo_principal"><?php echo "$nome_aluno"?></p></td>
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
    <td><form name="formulario" id="formulario" onSubmit="return ValidaFormulario()" method="post" action="index2.php">




<table width="745" height="186" border="0" align="center">
  <tr>
    <td width="142" align="right" class="fonte01"><span class="formulario">Data de Vencimento:</span></td>
    <td width="626" colspan="2"><input name="dia_venc" type="text" class="css_form_02" id="dia_venc" onKeyPress="formatar_mascara(this, '##/##/####')" size="15" maxlength="10"  onsubmit="return ValidaFormulario();"/>
      <span class="fonte02">(dd/mm/aaaa)

      <input name="id_aluno" type="hidden" id="id_aluno" size="100" maxlength="125" value="<? echo "$id_aluno" ?>" />

      <input name="status" type="hidden" id="status" size="15" maxlength="10"  value="Aberto" />
      <input name="cob_enviada" type="hidden" id="cob_enviada" size="15" maxlength="10"  value="N&atilde;o" /></td>
    </tr>
  <tr>
    <td align="right" class="fonte01">Forma de Pagamento:</td>
    <td colspan="2"><select name="forma_pagto" id="forma_pagto" class="css_form_02"  onsubmit="return ValidaFormulario();">
      <option value="Boleto" selected="selected">Boleto</option>
      <option value="Transfer&ecirc;ncia">Transfer&ecirc;ncia</option>
      <option value="Dep&oacute;sito">Dep&oacute;sito</option>
      <option value="Dinheiro">Dinheiro</option>
      <option value="Cheque">Cheque</option>
      <option value="Cart&atilde;o">Cart&atilde;o</option>
      <option value="Outros">Outros</option>
        </select></td>
    </tr>
  <tr>
    <td height="52" align="right" class="fonte01">Mensalidades:</td>
    <td>      <span class="fonte02">
      <input name="categoria" type="radio" onClick="esconde()" value="Mensal" />
      Escolha esta op&ccedil;&atilde;o para o sistema gera automaticamente uma nova mensalidade toda vez que uma mensalidade for quitada. (Infinitamente).</span></td>
    </tr>
  <tr>
    <td height="47" align="right" class="fonte01">Parcelas:</td>
    <td><p class="fonte02">
<input type="radio" name="categoria" value="Parcelas" onClick="mostra()" />      
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
          <option value="2">1</option>
          <option value="3">2</option>
          <option value="4">3</option>
          <option value="5">4</option>
          <option value="6">5</option>
          <option value="7">6</option>
          <option value="8">7</option>
          <option value="9">8</option>
          <option value="10">9</option>
          <option value="11">10</option>
          <option value="12">11</option>
          <option value="13">12</option>
          <option value="14">13</option>
          <option value="15">14</option>
          <option value="16">15</option>
          <option value="17">16</option>
          <option value="18">17</option>
          <option value="19">18</option>
          <option value="20">19</option>
          <option value="22">20</option>
          <option value="22">21</option>
          <option value="23">22</option>
          <option value="24">23</option>
          <option value="25">24</option>

                </select>
</td>
  </tr>
</table>


</div>





<table width="745" border="0" align="center">
  <tr>
    <td width="142" align="right" class="fonte01">Valor R$ </td>
    <td colspan="2">
      <input name="valor" type="text" class="css_form_02" id="valor" onKeyPress="return(MascaraMoeda(this,'.','.',event))" size="20" maxlength="11" onsubmit="return ValidaFormulario2();" />
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
    <td align="center">
	
	
      <p>&nbsp;</p>
	  
	  
    <p><a href="javascript:history.back(1)" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p></td>
  </tr>
</table>




</body>
</html>
