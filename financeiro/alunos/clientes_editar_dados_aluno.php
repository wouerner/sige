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
<script type="text/javascript" language="JavaScript1.2"></script>

<script type="text/javascript" src="../js/jquery.js" language="JavaScript"></script>
<script type="text/javascript" src="../js/jquery.maskedinput.js" language="JavaScript"></script>
<script type="text/javascript" src="../js/matricula.js" language="JavaScript"></script>

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

<?php include "../includes/validacao_pagina_adm.php"; 
include "../includes/conexao_bd.php";

$id_aluno = $HTTP_GET_VARS['id_aluno'];
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno= $id_aluno");


$linhas = mysql_num_rows ($resultado);


?>


<table width="800" border="0" align="center">
  <tr>
    <td align="center" class="titulo_principal"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Editar dados do Aluno </td>
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
    <td height="160">
	

        <?php	for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
$lagradouro = mysql_result ($resultado, $i, "lagradouro");
$numero_casa = mysql_result ($resultado, $i, "numero_casa");		
$bairro = mysql_result ($resultado, $i, "bairro");
$cidade = mysql_result ($resultado, $i, "cidade");
$estado_uf = mysql_result ($resultado, $i, "estado_uf");
$cep = mysql_result ($resultado, $i, "cep");
$data_nasc = mysql_result ($resultado, $i, "data_nasc");
$naturalidade = mysql_result ($resultado, $i, "naturalidade");
$cpf = mysql_result ($resultado, $i, "cpf");
$rg = mysql_result ($resultado, $i, "rg");
$rg_orgao = mysql_result ($resultado, $i, "rg_orgao");
$expedicao = mysql_result ($resultado, $i, "expedicao");
$email = mysql_result ($resultado, $i, "email");
$inicio_curso = mysql_result ($resultado, $i, "inicio_curso");
$termino_curso = mysql_result ($resultado, $i, "termino_curso");
$tipo_curso = mysql_result ($resultado, $i, "tipo_curso");
$situacao_aluno = mysql_result ($resultado, $i, "situacao_aluno");
$polo = mysql_result ($resultado, $i, "polo");
$descricao1 = mysql_result ($resultado, $i, "descricao1");
$telefones = mysql_result ($resultado, $i, "telefones");
$id_aluno = mysql_result ($resultado, $i, "id_aluno");
$senha = mysql_result ($resultado, $i, "senha");
$celular = mysql_result ($resultado, $i, "celular");
$ddd = mysql_result ($resultado, $i, "ddd");
$url_foto = mysql_result ($resultado, $i, "url_foto");
$registro_ativo = mysql_result ($resultado, $i, "registro_ativo");
$nome_do_pai = mysql_result ($resultado, $i, "nome_do_pai");
$nome_do_mae = mysql_result ($resultado, $i, "nome_do_mae");
$data_cadastro = mysql_result ($resultado, $i, "data_cadastro");



}

$data_cadastro = explode("-",$data_cadastro);

$data_cadastro= $data_cadastro[2]."/".$data_cadastro[1]."/".$data_cadastro[0];
?>


        <form method="post" action="clientes_update_dados_aluno.php">
          <table width="735" border="0" align="center" cellpadding="4">
    <tr>
      <td width="106" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Aluno: </td>
      <td width="619" bgcolor="#F5FFF4" class="sub_titulos"><span class="fonte01">
        <input type="hidden" name="id_aluno" value="<?php echo "$id_aluno" ?>"/>  
		<input name="nome_completo" type="text" class="css_form_02" id="nome_completo"  value="<?php echo "$nome_completo"; ?>" size="70" maxlength="90"/>    </td>
    </tr>
    <tr>
      <td width="106" align="right" bgcolor="#F5FFEC" class="fonte02">Rua/Av.</td>
      <td bgcolor="#F5FFEC" class="sub_titulos"><input name="lagradouro" type="text" class="css_form_02" id="lagradouro"  value="<?php echo "$lagradouro" ?>" size="70" maxlength="254"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">N&uacute;mero casa: </td>
      <td bgcolor="#F5FFF4"><input name="numero_casa" type="text" class="css_form_02" id="numero_casa"  value="<?php echo "$numero_casa" ?>" size="10" maxlength="15"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Bairro:</td>
      <td bgcolor="#F5FFEC"><input name="bairro" type="text" class="css_form_02" id="bairro"  value="<?php echo "$bairro" ?>" size="70" maxlength="90"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Cidade:</td>
      <td bgcolor="#F5FFF4"><input name="cidade" type="text" class="css_form_02" id="cidade"  value="<?php echo "$cidade" ?>" size="70" maxlength="90"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Estado:</td>
      <td bgcolor="#F5FFEC"><span class="formulario">
        <select name="estado_uf" class="css_form_02" id="estado_uf">
          <option value="<?php echo "$estado_uf" ?>"><?php echo "$estado_uf" ?></option>
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
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Cep:</td>
      <td bgcolor="#F5FFF4"><input name="cep"type="text" class="css_form_02" id="cep"  value="<?php echo "$cep" ?> " size="10" maxlength="9"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">DDD:</td>
      <td bgcolor="#F5FFEC"><input name="ddd" type="text" class="css_form_02" id="ddd"  value="<?php echo "$ddd" ?>" size="10" maxlength="2"/></td>
    </tr> 
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Telefone</td>
      <td bgcolor="#F5FFF4"><input name="telefones" type="text" class="css_form_02" id="telefones"  value="<?php echo "$telefones" ?>" size="70" maxlength="10"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Celular </td>
      <td bgcolor="#F5FFEC"><input name="celular" type="text" class="css_form_02" id="celular"  value="<?php echo "$celular" ?>" size="70" maxlength="10"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">E-mail:</td>
      <td bgcolor="#F5FFF4"><input name="email" class="css_form_02" id="email"  value="<?php echo "$email" ?>" type="text" size="70" maxlength="254"text/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">CPF:</td>
      <td bgcolor="#F5FFEC"><input name="cpf" type="text" class="css_form_02" id="cpf"  value="<?php echo "$cpf" ?>" size="70" maxlength="16"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">RG:</td>
      <td bgcolor="#F5FFF4"><input name="rg" type="text" class="css_form_02" id="rg"  value="<?php echo "$rg"?>" size="70" maxlength="16"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">RG Orgão:</td>
      <td bgcolor="#F5FFF4"><input name="rg_orgao" type="text" class="css_form_02" id="rg"  value="<?php echo "$rg_orgao"?>" size="70" maxlength="16"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Data Nascimento:</td>
      <td bgcolor="#F5FFF4"><input name="data_nasc" type="text" class="css_form_02" id="data_nasc"  value="<?php echo "$data_nasc" ?>" size="70" maxlength="16"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Naturalidade:</td>
      <td bgcolor="#F5FFF4"><input name="naturalidade" type="text" class="css_form_02" id="naturalidade"  value="<?php echo "$naturalidade" ?>" size="70" maxlength="16"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02"><p>Expedi&ccedil;&atilde;o:</p>        </td>
      <td bgcolor="#F5FFF4"><input name="expedicao" type="text" class="css_form_02" id="expedicao"  value="<?php echo "$expedicao" ?>" size="70" maxlength="15"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">None do Pai: </td>
      <td bgcolor="#F5FFF4"><input name="nome_do_pai" type="text" class="css_form_02" id="nome_do_pai"  value="<?php echo "$nome_do_pai" ?>" size="70" maxlength="160"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Nome da M&atilde;e </td>
      <td bgcolor="#F5FFF4"><input name="nome_do_mae" type="text" class="css_form_02" id="nome_do_mae"  value="<?php echo "$nome_do_mae" ?>" size="70" maxlength="160"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">In&iacute;cio do Curso: </td>
      <td bgcolor="#F5FFF4"><input name="inicio_curso" type="text" class="css_form_02" id="inicio_curso"  value="<?php echo "$inicio_curso" ?>" size="70" maxlength="254"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Pagamento</td>
      <td bgcolor="#F5FFF4"><input name="situacao_aluno" type="text" class="css_form_02" id="situacao_aluno"  value="<?php echo "$situacao_aluno" ?>" size="70" maxlength="254"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">P&oacute;lo:</td>
      <td bgcolor="#F5FFF4"><input name="polo" type="text" class="css_form_02" id="polo"  value="<?php echo "$polo" ?>" size="70" maxlength="254"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">T&eacute;rmino do Curso: </td>
      <td bgcolor="#F5FFF4"><input name="termino_curso" type="text" class="css_form_02" id="termino_curso"  value="<?php echo "$termino_curso" ?>" size="70" maxlength="10"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Senha de Login: </td>
      <td bgcolor="#F5FFF4"><input name="senha" type="text" class="css_form_02" id="senha"  value="<?php echo "$senha" ?>" size="70" maxlength="254"/></td>

    </tr>
    <tr>
	<td align="right" bgcolor="#F5FFF4" class="fonte02">Tipo de Cruso*</td>
	<td>	
            	<select name="tipo_curso" class="css_form_01"id="tipo_curso" >
		<option value="<?php echo $tipo_curso ;?>" selected="selected"><?php echo $tipo_curso; ?></option>
        		<option value="Ensino Medio">Ensino Medio</option>
        	        <option value="Fundamental">Fundamental</option>
        	        <option value="Fundamental e Medio">Fundamental e Medio</option>
        	       	<option value="2&ordm; e 3 º Ano">2&ordm; e 3 º Ano</option>
             		<option value="3&ordm; Ano">3&ordm; Ano</option>
             		<option value="Materias">Materias</option>
             		<option value="Dependencia">Dependencia</option>

		</select>

	</td>

   </tr>


    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Data Cadastro: </td>
      <td bgcolor="#F5FFF4"><input name="data_cadastro" type="text" class="css_form_02" id="data_cadastro"  value="<?php echo "$data_cadastro" ?>" size="70" maxlength="254"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Odseva&ccedil;&atilde;o:</td>
      <td bgcolor="#F5FFF4"><textarea name="descricao1" cols="35" rows="4" class="css_form_02" value="<?php echo "$descricao1" ?>"><?php echo "$descricao1" ?></textarea></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">&nbsp;</td>
      <td bgcolor="#F5FFF4">&nbsp;</td>
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
    <td>
	
	
	
<?
mysql_close($link);
?></td>
  </tr>
  <tr>
    <td align="center"><p><a href="pagina_principal.php" target="_self">
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
    </a></p>      
      <a href="pagina_principal_02.php" class="style5"></a></td>
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
