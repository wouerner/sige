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
include('../includes/../includes/../includes/../includes/conexao_bd.php');

$id_cob  = $HTTP_GET_VARS['id_cob'];
$id_aluno  = $HTTP_GET_VARS['id_aluno'];


//realiza query na tabela ALUNOS
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno= $id_aluno");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
$cpf = mysql_result ($resultado, $i, "cpf");
$rg = mysql_result ($resultado, $i, "rg");
$email = mysql_result ($resultado, $i, "email");
$tipo_curso = mysql_result ($resultado, $i, "tipo_curso");
$url_foto = mysql_result ($resultado, $i, "url_foto");
}


//realiza query na tabela HISTÓRICO FINANCEIRO
$resultado3= mysql_query ("SELECT * FROM tb_historico_financeiro WHERE id_cob = $id_cob");
$linhas3 = mysql_num_rows ($resultado3);

for($i3=0; $i3<$linhas3; $i3++)
{
$dia_venc = mysql_result ($resultado3, $i3, "dia_venc");
$data_quebrada = explode('-', $dia_venc);
$data2 = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];


$valor_hist = mysql_result ($resultado3, $i3, "valor");
$observacao = mysql_result ($resultado3, $i3, "observacao");
}

?>


<script>

		function ValidaFormulario2 () {

	
  
		if (document.formulario2.Valor.value==""){ 
		alert("Preencha o campo Valor"); 
		document.formulario2.Valor.focus(); 
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




<table width="722" height="336" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center"><table width="739" border="0" cellspacing="3" cellpadding="4">
        <tr>
          <td align="center" class="titulo_principal">Editar dados da Cobran&ccedil;a</td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
              <tr>
                <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <span class="fonte04">Voc&ecirc; pode alterar a data de vencimento e/ou valor do boleto caso precise.</span></td>
    </tr>
  <tr>
    <td height="66" colspan="2" align="center"><span class="sub_titulos"><? echo $nome_completo ?></span><br />
      <span class="fonte02">CPF:</span> <span class="links"><? echo $cpf ?></span></td>
    </tr>
  <tr>
    <td width="278" align="center"></td>
    <td width="461" align="left"><form name="formulario2" id="formulario2" onSubmit="return ValidaFormulario2()" method="post" action="financeiro_editar_dados_Pagamento_sem_boleto_Update.php">
      <p><span class="fonte02">Data de Vencimento:</span> <br />
          <input name="vencimento" type="text" class="css_form_02" id="vencimento" title="Digite o Valor a ser Pago" onKeyPress="formatar_mascara(this, '##/##/####')" size="10" maxlength="10" value="<? echo $data2 ?>"/>
          <?php echo "<input type='hidden' name='cod_boleto' value='$cod_boleto'>" ?> <?php echo "<input type='hidden' name='id_cob' value='$id_cob'>" ?> <?php echo "<input type='hidden' name='id_aluno' value='$id_aluno'>" ?> </p>
      <p><span class="fonte02">Valor:</span> <br />
          <input name="valor" type="text" class="css_form_02" id="valor" onKeyPress="return(MascaraMoeda(this,'.','.',event))" value="<? echo $valor_hist ?>" size="10" maxlength="10" onsubmit="return ValidaFormulario2();" />
      </p>
      <p>
        <input name="observacao" type="text" class="css_form_02" id="observacao"  value="<? echo $observacao  ?>" size="85" maxlength="250" onsubmit="return ValidaFormulario2();" />
      </p>
      <p>
        <input name="submit" type="submit" class="em_cima" value=" ATUALIZAR" />
      </p>
    </form></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>

<?
mysql_close($link);
?>

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