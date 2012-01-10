<?php
include "../includes/validacao_pagina_adm.php";

include "../includes/../includes/../includes/../includes/conexao_bd.php";


$id_cli = $HTTP_GET_VARS['id_cli'];
$resultado= mysql_query ("SELECT * FROM clientes WHERE id_cli= '18'");
$linhas = mysql_num_rows ($resultado);

?>

<?php for($i=0; $i<$linhas; $i++)
{
$id_cli = mysql_result ($resultado, $i, "id_cli");
$nome_cli = mysql_result ($resultado, $i, "nome_cli");
}
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


<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />
<p>&nbsp;</p>
<p align="center" class="titulo_principal">INSERIR<br />
<?php echo "$nome_cli"?></p>
<table width="800" border="0" align="center">
  <tr>
    <td height="377"><form name="formulario" id="formulario" onsubmit="return ValidaFormulario()" method="post" action="parcelas_avulsas_insert_bd.php">
<table width="796" height="389" border="0" align="center">
  <tr>
    <td width="142" align="right" class="fonte01"><span class="formulario">Data de Vencimento:</span></td>
    <td height="40" colspan="3"><input name="dia_venc" type="text" id="dia_venc" size="15" maxlength="10" onkeypress="formatar_mascara(this, '##/##/####')"  onsubmit="return ValidaFormulario();"/>
      <span class="fonte02">(dd/mm/aaaa)
      <label>
      <input name="id_cli" type="hidden" id="id_cli" size="100" maxlength="125" value="<? echo "$id_cli" ?>" />
      </label>
      </span></td>
    </tr>
  <tr>
    <td align="right" class="fonte01">Forma de Pagamento:<span class="formulario2"></span></td>
    <td height="40" colspan="3"><select name="forma_pagto" id="forma_pagto" class="validate-selection"  onsubmit="return ValidaFormulario();">
      <option>Escolha uma Op&ccedil;&atilde;o </option>
      <option value="Boleto">Boleto</option>
      <option value="Transfer&ecirc;ncia">Transfer&ecirc;ncia</option>
      <option value="Dep&oacute;sito">Dep&oacute;sito</option>
      <option value="Dinheiro">Dinheiro</option>
        </select></td>
    </tr>
  <tr>
    <td align="right" class="fonte01"><label for="checkbox_row_13">Categoria</label></td>
    <td height="47" colspan="2"><select name="categoria" id="categoria" class="validate-selection"  onsubmit="return ValidaFormulario();">
      <option>Escolha uma Op&ccedil;&atilde;o </option>
      <option value="Mensal">Mensalidade</option>
      <option value="Parcela">Parcelas</option>
      <option value="Avulso" selected="selected">Avulso</option>
        </select></td>
    </tr>
  <tr>
    <td align="right" class="fonte01">Status</td>
    <td height="37" colspan="2"><select name="status" id="status" class="validate-selection"  onsubmit="return ValidaFormulario();">
      <option value="Aberto">Aberto</option>
      <option value="Fechado">Fechado</option>
        </select></td>
  </tr>
  <tr>
    <td align="right" class="fonte01">Cobran&ccedil;a Enviada </td>
    <td height="34" colspan="2"><select name="cob_enviada" id="cob_enviada" class="validate-selection"  onsubmit="return ValidaFormulario();">
      <option value="N&atilde;o">N&atilde;o</option>
      <option value="-" selected="selected">Sim</option>
                    </select></td>
  </tr>
  <tr>
    <td align="right" class="fonte01"><span class="formulario">Pagou Dia </span></td>
    <td height="40" colspan="2"><input name="pagou_dia" type="text" id="pagou_dia" size="15" maxlength="10" onkeypress="formatar_mascara(this, '##/##/####')"  onsubmit="return ValidaFormulario();"/>
      <span class="fonte02">(dd/mm/aaaa)
      <label> </label>
      </span></td>
  </tr>
  <tr>
    <td align="right" class="fonte01"><label for="checkbox_row_15">Valor R$ </label></td>
    <td height="38" colspan="2"><input name="valor" type="text" id="valor" size="15" maxlength="10"  onsubmit="return ValidaFormulario();" /> 
      <span class="fonte02">(Aten&ccedil;&atilde;o: Separe as casas decimais com &quot;ponto&quot; ao inv&eacute;s de virgula)
        <label> </label>
    </span></td>
    </tr>
  <tr>
    <td align="right" class="fonte01">Observa&ccedil;&atilde;o:</td>
    <td height="19" colspan="2"><label>
      <textarea name="observacao" cols="30" rows="3" id="observacao"></textarea>
    </label></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td width="426" height="40" align="center"><label>
      <input type="submit" value="       INSERIR PAGAMENTO          " />
    </label></td>
    <td width="200">&nbsp;</td>
    </tr>
</table>
</form></td>
  </tr>
  <tr>
    <td align="center"><p>&nbsp;</p>
    <p><a href="pagina_principal_02.php" class="style2">Voltar para tela inicial</a></p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<?
mysql_close($link);
?>