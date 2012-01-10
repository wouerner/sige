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
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" --><?php
include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_aluno = $_POST['id_aluno'];
$nome_completo = $_POST['nome_completo'];
$lagradouro = $_POST['lagradouro'];
$numero_casa = $_POST['numero_casa'];	
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado_uf = $_POST['estado_uf'];
$cep = $_POST['cep'];
$data_nasc = $_POST['data_nasc'];
$naturalidade = $_POST['naturalidade'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$rg_orgao = $_POST['rg_orgao'];
$expedicao = $_POST['expedicao'];
$email = $_POST['email'];
$inicio_curso = $_POST['inicio_curso'];
$termino_curso = $_POST['termino_curso'];
$tipo_curso = $_POST['tipo_curso'];
$situacao_aluno = $_POST['situacao_aluno'];
$polo = $_POST['polo'];
$descricao1 = $_POST['descricao1'];
$telefones = $_POST['telefones'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$ddd = $_POST['ddd'];
$nome_do_pai = $_POST['nome_do_pai'];
$nome_do_mae = $_POST['nome_do_mae'];

$data_cadastro=$_POST["data_cadastro"];

$data_cadastro = explode("/",$data_cadastro);
$data_cadastro= $data_cadastro[2]."-".$data_cadastro[1]."-".$data_cadastro[0];

$query = "Update tb_alunos Set 


nome_completo = '$nome_completo',
lagradouro = '$lagradouro',
numero_casa = '$numero_casa',	
bairro = '$bairro',
cidade = '$cidade',
estado_uf = '$estado_uf',
cep = '$cep',
data_nasc = '$data_nasc',
naturalidade = '$naturalidade',
cpf = '$cpf',
rg = '$rg',
rg_orgao = '$rg_orgao',
expedicao = '$expedicao',
email = '$email',
inicio_curso = '$inicio_curso',
termino_curso = '$termino_curso',
tipo_curso = '$tipo_curso',
situacao_aluno = '$situacao_aluno',
polo = '$polo',
descricao1 = '$descricao1',
telefones = '$telefones',
senha = '$senha',
celular = '$celular',
ddd = '$ddd',
nome_do_pai = '$nome_do_pai',
nome_do_mae = '$nome_do_mae',
data_cadastro = '$data_cadastro'


Where id_aluno = '$id_aluno'";

	          

$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");



?>


<?
mysql_close($link);
?>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />



<table width="739" border="0" cellspacing="3" cellpadding="4">
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
<h1 align="center" class="style1"></h1>
<h1 align="center" class="fonte05">Cadastro Atualizado com sucesso!</h1>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1">



<form name="form_voltar" action="clientes_busca_alunos.php" method = "post" > 
<input type="hidden" name = "palavra" value="<?php echo $nome_completo ; ?>"/>
<input type="hidden" name = "tipo_aluno" value="s"/>

<input type="submit" value="Voltar"/>

</form>
<a href="pagina_principal.php" target="_self">

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
</a><a href="pagina_principal_02.php" class="links"></a> </p>

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
