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
<title>Curso Pr&aacute;tico - Jundia&iacute; - SP</title>
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
<!-- InstanceBeginEditable name="head" -->



<?php
include "validacao_pagina_adm.php";
include "conexao_bd.php";

$id_parceiro   = $_GET['id_parceiro'];
$data_hoje = date("Y/m/d");

$resultado= mysql_query ("SELECT * FROM tb_socios WHERE id_parceiro = '$id_parceiro'");
$linhas = mysql_num_rows ($resultado);

?>

<?php for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");

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

	

	
				if (document.formulario2.data_nasc.value==""){ 
		alert("Preencha o campo Data de Nascimento"); 
		document.formulario2.data_nasc.focus(); 
	return false;
	}
  
				if (document.formulario2.tipo_curso.value==""){ 
		alert("Escolha o Tipo do Curso"); 
		document.formulario2.tipo_curso.focus(); 
	return false;
	}

		
	return true;
}
// -->


</script>



<link href="financeiro/css/estilo_sistema.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<!-- InstanceEndEditable -->
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
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/fundo2.gif">
  <tr>
    <td height="606" align="center" valign="top"><table width="812" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="44"class="titulos_pagina"><table width="739" border="0" cellspacing="3" cellpadding="4">
          <tr>
            <td align="center" class="titulo_principal">Sistema de Parceiros</td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
                <tr>
                  <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="116" align="center"><form name="formulario2" id="formulario2" onSubmit="return ValidaFormulario2()"  method="post" action="parceiros_cadastrar_alunos_parceiros_insert_bd.php"><table width="611" height="235" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="17" align="center" bgcolor="#D9E6EF" class="sub_titulos">CADASTRAR UM NOVO ALUNO DO PARCEIRO <br>
<? echo "$nome_completo" ?> </td>
            </tr>
          
          <tr>
            <td height="218" align="center" bgcolor="#E1ECF2"><table width="542" height="231" border="0" cellpadding="0" cellspacing="3">
              <tr>
                <td width="118" align="right" class="fonte03"><p>Nome Completo:</p>                  </td>
                <td width="373" align="left"><input name="nome_completo" type="text" class="css_form_02" id="nome_completo" size="70" maxlength="90" onsubmit="return ValidaFormulario2();"/>
                  <input name="id_parceiro" type="hidden" id="id_parceiro" value="<? echo $id_parceiro ?>" size="66" maxlength="254" onsubmit="return ValidaFormulario2();" onFocus="this.className='em_cima'" onBlur="this.className='css_form_02'"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">CPF:</td>
                <td align="left"><input name="cpf" type="text" class="css_form_02" id="cpf" onKeyPress="formatar_mascara(this, '###.###.###-##')" size="18" maxlength="14" onsubmit="return ValidaFormulario2();"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Data de Nascimento: </td>
                <td align="left"><input name="data_nasc" type="text" class="css_form_02" id="data_nasc" onKeyPress="formatar_mascara(this, '##/##/####')" size="13" maxlength="10" onsubmit="return ValidaFormulario2();"/>
                  <span class="fonte02">(dd/mm/aaaa) </span></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Curso:</td>
                <td align="left"><select name="tipo_curso" class="css_form_02" id="tipo_curso" onsubmit="return ValidaFormulario2();">
                  <option value="">Escolha um curso</option>
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
                <td align="right" class="fonte03">Data do Cadastro: </td>
                <td align="left"><input name="data_cadastro" type="text" class="css_form_02" id="data_cadastro" title="Digite o Valor a ser Pago" onKeyPress="formatar_mascara(this, '##/##/####')" size="13" maxlength="10" value="<? echo $data_hoje ?>"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Documentos:</td>
                <td align="left"><select name="documentos" class="css_form_02" id="documentos" onsubmit="return ValidaFormulario();">
                  <option value="Aguardando" selected>Aguardando</option>
                  <option value="Completo">Completo</option>
                  <option value="Incompleto">Incompleto</option>
                  
                </select></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Pagamentos:</td>
                <td align="left"><select name="pagamentos" class="css_form_02" id="pagamentos" onsubmit="return ValidaFormulario();">
                  <option value="Aguardando">Aguardando</option>
                  <option value="Recebido">Recebido</option>
                  <option value="Parcial">Parcial</option>
                  <option value="Cancelado">Cancelado</option>
                </select></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Hist&oacute;rico:</td>
                <td align="left"><select name="historico" class="css_form_02" id="historico" onsubmit="return ValidaFormulario();">
                  <option value="Aguardando">Aguardando</option>
                  <option value="Emitido">Emitido</option>
                  <option value="Enviado">Enviado</option>
                  <option value="Dispon&iacute;vel">Dispon&iacute;vel</option>
                  <option value="Retirado">Retirado</option>
                </select></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Publica&ccedil;&atilde;o:</td>
                <td align="left"><input name="publicacao" type="text" class="css_form_02" id="publicacao" title="Digite o Valor a ser Pago" onKeyPress="formatar_mascara(this, '##/##/####')" size="30" maxlength="160" value="<? echo $publicacao ?>"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Certificado:</td>
                <td align="left"><select name="certificado" class="css_form_02" id="certificado" onsubmit="return ValidaFormulario();">
                  <option value="Aguardando">Aguardando</option>
                  <option value="Emitido">Emitido</option>
                  <option value="Conclu&iacute;do">Conclu&iacute;do</option>
                  <option value="Dispon&iacute;vel">Dispon&iacute;vel</option>
                  <option value="Finalizado">Finalizado</option>
                </select></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Escola:</td>
                <td align="left"><input name="escola" type="text" class="css_form_02" id="escola" title="Digite o Valor a ser Pago" value="<? echo $escola ?>" size="30" maxlength="160"/></td>
              </tr>
              <tr>
                <td align="right" class="fonte03">Observa&atilde;o</td>
                <td align="left"><textarea name="observacao" cols="35" rows="4" class="css_form_02" id="observacao"></textarea>				  </td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td align="left"><input name="submit" type="submit" class="em_cima" value="          CADASTRAR          " /></td>
              </tr>
            </table></td>
            </tr>
        </table>
          </form></td>
      </tr>
      <tr>
        <td align="center"><p>&nbsp;</p>
          <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0"></a></p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">
	
	  <blockquote>
	    <blockquote>&nbsp;</blockquote>
	  </blockquote></td>
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