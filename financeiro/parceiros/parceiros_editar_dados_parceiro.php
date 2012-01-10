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

<?php include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_parceiro = $HTTP_GET_VARS['id_parceiro'];
$resultado= mysql_query ("SELECT * FROM tb_socios WHERE id_parceiro= $id_parceiro");


$linhas = mysql_num_rows ($resultado);


?>
<table width="800" border="0" align="center">
  <tr>
    <td align="center" class="titulo_principal"><table width="739" border="0" cellspacing="3" cellpadding="4">
      <tr>
        <td align="center" class="titulo_principal">Editar dados do Parceiro </td>
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
$n_casa = mysql_result ($resultado, $i, "n_casa");		
$bairro = mysql_result ($resultado, $i, "bairro");
$cidade = mysql_result ($resultado, $i, "cidade");
$uf = mysql_result ($resultado, $i, "uf");
$cep = mysql_result ($resultado, $i, "cep");
$data_nasc = mysql_result ($resultado, $i, "data_nasc");
$naturalidade = mysql_result ($resultado, $i, "naturalidade");
$cpf = mysql_result ($resultado, $i, "cpf");
$rg = mysql_result ($resultado, $i, "rg");
$expedicao = mysql_result ($resultado, $i, "expedicao");
$email = mysql_result ($resultado, $i, "email");
$telefone = mysql_result ($resultado, $i, "telefone");
$id_parceiro = mysql_result ($resultado, $i, "id_parceiro");
$senha = mysql_result ($resultado, $i, "senha");
$celular = mysql_result ($resultado, $i, "celular");
$ddd = mysql_result ($resultado, $i, "ddd");
$url_foto = mysql_result ($resultado, $i, "url_foto");
$registro_ativo = mysql_result ($resultado, $i, "registro_ativo");



}
?>    


<form method="post" action="parceiros_update_dados_parceiro.php">
  <table width="735" border="0" align="center" cellpadding="4">
    <tr>
      <td width="106" align="right" bgcolor="#F5FFF4" class="fonte02">Nome do Cliente: </td>
      <td width="619" bgcolor="#F5FFF4" class="sub_titulos"><span class="fonte01">
        <label><?php echo "<input type='hidden' name=id_parceiro value='$id_parceiro'>" ?> <?php echo "<input name='nome_completo'  value='$nome_completo' type='text' id='nome_completo' size='70' maxlength='90'/>" ?> </label>
      </span></td>
    </tr>
    <tr>
      <td width="106" align="right" bgcolor="#F5FFEC" class="fonte02">Rua/Av.</td>
      <td bgcolor="#F5FFEC" class="sub_titulos"><?php echo "<input name='lagradouro'  value='$lagradouro' type='text' id='lagradouro' size='70' maxlength='254'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">N&uacute;mero casa: </td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='n_casa'  value='$n_casa'type='text' id='n_casa' size='10' maxlength='5'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Bairro:</td>
      <td bgcolor="#F5FFEC"><?php echo "<input name='bairro'  value='$bairro'type='text' id='bairro' size='70' maxlength='90'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Cidade:</td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='cidade'  value='$cidade'type='text' id='cidade' size='70' maxlength='90'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Estado:</td>
      <td bgcolor="#F5FFEC"><span class="formulario">
        <select name="uf" id="uf">
          <option value="<?php echo "$uf" ?>"><?php echo "$uf" ?></option>
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
      <td bgcolor="#F5FFF4"><?php echo "<input name='cep'  value='$cep'type='text' id='cep' size='10' maxlength='9'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">DDD:</td>
      <td bgcolor="#F5FFEC"><?php echo "<input name='ddd'  value='$ddd'type='text' id='ddd' size='10' maxlength='2'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Telefone</td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='telefone'  value='$telefone'type='text' id='telefone' size='70' maxlength='45'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">Celular </td>
      <td bgcolor="#F5FFEC"><?php echo "<input name='celular'  value='$celular'type='text' id='celular' size='70' maxlength='9'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">E-mail:</td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='email'  value='$email'type='text' id='email' size='70' maxlength='254'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFEC" class="fonte02">CPF:</td>
      <td bgcolor="#F5FFEC"><?php echo "<input name='cpf'  value='$cpf'type='text' id='cpf' size='70' maxlength='16'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">RG:</td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='rg'  value='$rg'type='text' id='rg' size='70' maxlength='16'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Data Nascimento:</td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='data_nasc'  value='$data_nasc' type='text' id='data_nasc' size='70' maxlength='16'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Naturalidade:</td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='naturalidade'  value='$naturalidade'type='text' id='naturalidade' size='70' maxlength='16'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02"><p>Expedi&ccedil;&atilde;o:</p>        </td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='expedicao'  value='$expedicao'type='text' id='expedicao' size='70' maxlength='15'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">Senha de Login: </td>
      <td bgcolor="#F5FFF4"><?php echo "<input name='senha'  value='$senha' type='text' id='senha' size='70' maxlength='254'/>" ?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#F5FFF4" class="fonte02">&nbsp;</td>
      <td bgcolor="#F5FFF4"><input name="submit" type="submit" value="          ATUALIZAR          " /></td>
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
    <td align="center"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p>      <a href="pagina_principal_02.php" class="style5"></a></td>
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