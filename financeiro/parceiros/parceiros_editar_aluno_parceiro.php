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



<?php 
include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$cod_aluno = $_GET['cod_aluno'];
$resultado= mysql_query ("SELECT * FROM tb_socios_alunos WHERE cod_aluno = '$cod_aluno'");


$linhas = mysql_num_rows ($resultado);




$id_parceiro = $_GET['id_parceiro'];

$resultado2= mysql_query ("SELECT * FROM tb_socios WHERE id_parceiro = '$id_parceiro'");
$linhas2 = mysql_num_rows ($resultado2);

for($i2=0; $i2<$linhas2; $i2++)

{
$id_parceiro = mysql_result ($resultado2, $i2, "id_parceiro");
$nome_completo_par = mysql_result ($resultado2, $i2, "nome_completo");
$cod_parceiro = mysql_result ($resultado2, $i2, "cod_parceiro");
}

?>

<table width="800" border="0" align="center">
  <tr>
    <td align="center" class="titulo_principal"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Editar dados do Aluno do Parceiro <? echo "$nome_completo_par"; ?> (<? echo "$id_parceiro"; ?>) </td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
            <tr>
              <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
            </tr>
        </table></td>
      </tr>
    </table>
      </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="160" valign="top">
	

<?php	for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
$cpf = mysql_result ($resultado, $i, "cpf");
$data_nasc2 = mysql_result ($resultado, $i, "data_nasc");
		$data_quebrada = explode('-', $data_nasc2);
		$data_nasc = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];

$tipo_curso = mysql_result ($resultado, $i, "tipo_curso");
$data_cadastro2 = mysql_result ($resultado, $i, "data_cadastro");
		$data_quebrada = explode('-', $data_cadastro2);
		$data_cadastro = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];


$documentos = mysql_result ($resultado, $i, "documentos");
$pagamentos = mysql_result ($resultado, $i, "pagamentos");
$historico = mysql_result ($resultado, $i, "historico");
$publicacao = mysql_result ($resultado, $i, "publicacao");
$certificado = mysql_result ($resultado, $i, "certificado");
$escola = mysql_result ($resultado, $i, "escola");
$id_aluno_parceiro = mysql_result ($resultado, $i, "id_aluno_parceiro");
$observacao = mysql_result ($resultado, $i, "observacao");
$id_parceiro = mysql_result ($resultado, $i, "id_parceiro");




}
?>    

<form method="post" action="parceiros_editar_aluno_parceiro_update.php">
  <table width="735" height="472" border="0" align="center" cellpadding="4">
    <tr>
      <td width="145" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Cliente: </td>
      <td width="568" bgcolor="#F5FFF4" class="sub_titulos"><span class="fonte01">
        <label><?php echo "<input type='hidden' name=id_aluno_parceiro value='$id_aluno_parceiro'>" ?> <?php echo "<input type='hidden' name=id_parceiro value='$id_parceiro'>" ?>
        <input name="nome_completo" type="text" class="css_form_02" id="nome_completo" title="Digite o Valor a ser Pago" size="80" maxlength="254" value="<? echo $nome_completo ?>"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">CPF:</td>
      <td bgcolor="#F5FFF4"><input name="cpf" type="text" class="css_form_02" id="cpf" title="Digite o Valor a ser Pago" onKeyPress="formatar_mascara(this, '###.###.###-##')" size="17" maxlength="14" value="<? echo $cpf ?>"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Data de Nascimento: </td>
      <td bgcolor="#F5FFF4"><input name="data_nasc" type="text" class="css_form_02" id="data_nasc" title="Digite o Valor a ser Pago" onKeyPress="formatar_mascara(this, '##/##/####')" size="14" maxlength="10" value="<? echo $data_nasc ?>"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Tipo do Curso: </td>
      <td bgcolor="#F5FFF4"><select name="tipo_curso" class="css_form_02" id="tipo_curso" onsubmit="return ValidaFormulario();">
        <option value="<? echo "$tipo_curso"; ?>" selected="selected"><? echo "$tipo_curso"; ?></option>
        <option value="Sem Hist&oacute;rico">Sem Hist&oacute;rico</option>
        <option value="1&ordf; a 8&ordf;">1&ordf; a 8&ordf;</option>
        <option value="5&ordf; ao 3&ordm;">5&ordf; ao 3&ordm;</option>
        <option value="6&ordf; ao 3&ordm;">6&ordf; ao 3&ordm;</option>
        <option value="7&ordf; ao 3&ordm;">7&ordf; ao 3&ordm;</option>
        <option value="8&ordf; ao 3&ordm;">8&ordf; ao 3&ordm;</option>
        <option value="1&ordm; ao 3&ordm;">1&ordm; ao 3&ordm;</option>
        <option value="2&ordm; ao 3&ordm;">2&ordm; ao 3&ordm;</option>
        <option value="3&ordm; ao 3&ordm;">3&ordm; ao 3&ordm;</option>
                  <option value="TTI">TTI</option>
                  <option value="TST">TST</option>
                  <option value="TMA">TMA</option>
                  <option value="OUTROS">OUTROS</option>
                            </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Data de Cadastro </td>
      <td bgcolor="#F5FFF4"><input name="data_cadastro" type="text" class="css_form_02" id="data_cadastro" title="Digite o Valor a ser Pago" onKeyPress="formatar_mascara(this, '##/##/####')" size="13" maxlength="10" value="<? echo $data_cadastro ?>"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Documentos:</td>
      <td bgcolor="#F5FFF4"><select name="documentos" class="css_form_02" id="documentos" onsubmit="return ValidaFormulario();">
          <option value="<? echo $documentos ?>"><? echo $documentos ?></option>
          <option value="Completo">Completo</option>
          <option value="Incompleto">Incompleto</option>
          <option value="Aguardando">Aguardando</option>
                            </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Pagamentos:</td>
      <td bgcolor="#F5FFF4"><select name="pagamentos" class="css_form_02" id="pagamentos" onsubmit="return ValidaFormulario();">
        <option value="<? echo $pagamentos ?>"><? echo $pagamentos ?></option>
        <option value="Recebido">Recebido</option>
        <option value="Parcial">Parcial</option>
        <option value="Aguardando">Aguardando</option>
        <option value="Cancelado">Cancelado</option>
              </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Hist&oacute;rico</td>
      <td bgcolor="#F5FFF4"><select name="historico" class="css_form_02" id="historico" onsubmit="return ValidaFormulario();">
        <option value="<? echo $historico ?>"><? echo $historico ?></option>
        <option value="Emitido">Emitido</option>

        <option value="Dispon&iacute;vel">Dispon&iacute;vel</option>
        <option value="Retirado">Retirado</option>
		<option value="Aguardando">Aguardando</option>
              </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Publica&ccedil;&atilde;o:</td>
      <td bgcolor="#F5FFF4"><input name="publicacao" type="text" class="css_form_02" id="publicacao" title="Digite o Valor a ser Pago" onKeyPress="formatar_mascara(this, '##/##/####')" size="30" maxlength="160" value="<? echo $publicacao ?>"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Certificado:</td>
      <td bgcolor="#F5FFF4"><select name="certificado" class="css_form_02" id="certificado" onsubmit="return ValidaFormulario();">
        <option value="<? echo $certificado ?>"><? echo $certificado ?></option>
		<option value="Emitido">Emitido</option>
        <option value="Conclu&iacute;do">Conclu&iacute;do</option>
        <option value="Dispon&iacute;vel">Dispon&iacute;vel</option>
        <option value="Finalizado">Finalizado</option>
		<option value="Aguardando">Aguardando</option>
              </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Escola</td>
      <td bgcolor="#F5FFF4"><input name="escola" type="text" class="css_form_02" id="escola" title="Digite o Valor a ser Pago" value="<? echo $escola ?>" size="30" maxlength="160"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Obsrva&ccedil;&atilde;o:</td>
      <td bgcolor="#F5FFF4"><textarea name="observacao" cols="35" rows="4" class="css_form_02" id="observacao"><? echo $observacao ?></textarea></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">&nbsp;</td>
      <td bgcolor="#F5FFF4"><input name="submit" type="submit" class="em_cima" value="          ATUALIZAR          " /></td>
    </tr>
  </table>


      </form>
	  
	  
	  
	     
</td>
  </tr>
  <tr>
    <td height="110">
	
	
	
<?
mysql_close($link);
?></td>
  </tr>
  <tr>
    <td align="center"><a href="javascript:history.back(1)" class="style5">Voltar para tela inicial</a></td>
  </tr>
</table>

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