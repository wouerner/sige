<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "../includes/validacao_pagina_adm.php";
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
				
				
				
				include "../includes/menu_lateral.php";
				
				
				}
				else
				{
				
				
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				
				}
		
		
		
		
		?> </td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->

<?php
include "../includes/validacao_pagina_adm.php";

include "../includes/../includes/../includes/../includes/conexao_bd.php";


$id_aluno = $HTTP_GET_VARS['id_aluno'];
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno = $id_aluno");
$linhas = mysql_num_rows ($resultado);

?>

<?php for($i=0; $i<$linhas; $i++)
{

$nome_aluno = mysql_result ($resultado, $i, "nome_completo");
}
?>    







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
       <p align="center" class="fonte05"><?php echo "$nome_aluno"?></p></td>
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
    <td><form name="formulario" id="formulario" onSubmit="return ValidaFormulario()" method="post" action="financeiro_insert_criar_parcelas.php">




<table width="745" height="186" border="0" align="center">
  <tr>
    <td width="142" align="right" class="fonte01"><span class="formulario">Data de Vencimento:</span></td>
    <td width="626" colspan="2"><input name="dia_venc" type="text" class="css_form_02" id="dia_venc" onKeyPress="formatar_mascara(this, '##/##/####')" size="15" maxlength="10"  onsubmit="return ValidaFormulario();"/>
      <span class="fonte02"><span class="fonte02">(dd/mm/aaaa)</span>
      <input name="id_aluno" type="hidden" id="id_aluno" size="100" maxlength="125" value="<? echo "$id_aluno" ?>" />

      <input name="status" type="hidden" id="status" size="15" maxlength="10"  value="Aberto" />
      <input name="cob_enviada" type="hidden" id="cob_enviada" size="15" maxlength="10"  value="N&atilde;o" /></td>
    </tr>
  <tr>
    <td align="right" class="fonte01">Forma de Pagamento:</td>
    <td colspan="2"><select name="forma_pagto" id="forma_pagto" class="css_form_02"  onsubmit="return ValidaFormulario();">
      <option>Forma de Pagamento</option>
      <option value="Boleto">Boleto</option>
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
      </span><span class="sub_titulos">(Mensalidade)</span><span class="fonte02"> Escolha esta op&ccedil;&atilde;o para o sistema gera automaticamente uma nova mensalidade toda vez que uma mensalidade for quitada. (Infinitamente).</span></td>
    </tr>
  <tr>
    <td height="47" align="right" class="fonte01">Parcelas:</td>
    <td><p class="fonte02">
<input type="radio" name="categoria" value="Parcelas" onClick="mostra()" />
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
    <td align="center"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="pagina_principal.php" target="_self">
      <?php
				
						if ($nivel == 'adm')
				{
				
				
				
				include "botao_voltar.php";
				
				
				}
				else
				{
				
				
				//direciona para a p&aacute;gina inicial dos usu&aacute;rios cadastrados
				
				include "botao_voltar_secretaria.php";
				
				}
		
		
		
		
		?>
    </a><a href="javascript:history.back(2)" target="_self"></a></p></td>
  </tr>
</table>




<?
mysql_close($link);
?>
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