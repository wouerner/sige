<?php
//pega sessão id do navegador
session_start( );
$sessao = session_id();
//fim do sessão id

include "validacao_pagina_adm.php";
include "conexao_bd.php";


//inicio de numeros ramdomicos
function initRand ()
{
   static $randCalled = FALSE;
   if (!$randCalled)
   {
        srand((double) microtime() * 1000000);
        $randCalled = TRUE;
    }
}
function randNum ($low, $high)
{
     initRand();
     $rNum = rand($low, $high);
     return $rNum;
}

// Exemplo de uso. 
// setando o mínimo é o máximo que o número aleatório deve chegar
$num_imagem = randNum(00000001,99999999);

// exibindo uma imagem (imagem_1.jpg, imagem_2.jpg, etc.)

//fim dos numeros ramdomicos

$junta_duas_variaveis = "$sessao$num_imagem" ;




/*$nome_completo   = $_POST['Nome_Completo'];
$lagradouro   = $_POST['lagradouro'];
$numero_casa   = $_POST['numero_casa'];
$bairro   = $_POST['bairro'];
$cidade   = $_POST['cidade'];
$estado_uf   = $_POST['estado_uf'];
$cep   = $_POST['cep'];
$data_nasc   = $_POST['data_nasc'];
$cpf   = $_POST['cpf'];
$rg   = $_POST['rg'];
$email   = $_POST['email'];
$inicio_curso   = $_POST['inicio_curso'];
$termino_curso   = $_POST['termino_curso'];
$tipo_curso   = $_POST['tipo_curso'];
$situacao_aluno   = $_POST['situacao_aluno'];

$polo   = $_POST['polo'];
$descricao1  = $_POST['descricao1'];
$telefones   = $_POST['telefones'];
$senha   = $_POST['senha'];
$naturalidade   = $_POST['naturalidade'];
$ddd   = $_POST['ddd'];
$celular   = $_POST['celular'];
$expedicao   = $_POST['expedicao'];
$registro_ativo   = 's';
$url_foto = '_avatar.jpg';
$codigo_aluno = "$junta_duas_variaveis";
$data_cadastro = date("Y/m/d");
$nome_do_pai   = $_POST['nome_do_pai'];
$nome_do_mae   = $_POST['nome_do_mae'];*/


//dados pessoais
$nome_completo  = $_POST['nome_completo'];
$cpf            = $_POST['cpf'];
$rg             = $_POST['rg'];
$data_nasc      = $_POST['data_nasc'];
$rg_orgao       = $_POST['rg_orgao'];
$expedicao      = $_POST['expedicao'];
$naturalidade   = $_POST['naturalidade'];
$naturalidade_uf = $_POST['natural_uf'];
$nome_pai =       $_POST['nome_pai'];
$nome_mae =       $_POST['nome_mae'];

//

//dados endereco e contato
$lagradouro    = $_POST['logradouro'];
//$numero_casa   = $_POST['numero_casa'];
//$bairro        = $_POST['bairro'];
$cidade        = $_POST['cidade'];
$estado_uf     = $_POST['estado_uf'];
$cep           = $_POST['cep'];
$email         = $_POST['email'];
$telefones     = $_POST['tel_fixo'];
//$ddd           = $_POST['ddd'];
$celular       = $_POST['tel_celular'];
//

//sistema
$inicio_curso    = 'Após Primeiro Pagamento';
//$termino_curso   = $_POST['termino_curso'];
$tipo_curso      = $_POST['tipo_curso'];
$situacao_aluno  = $_POST['situacao_aluno'];
//$polo            = $_POST['polo'];
$descricao1      = $_POST['descricao1'];
$senha           = $_POST['senha'];
$registro_ativo  = 'n';
$url_foto        = '_avatar.jpg';
$codigo_aluno    = "$junta_duas_variaveis";
$data_cadastro   = date("Y/m/d");


//verifica se o cpf já consta na base de dados:

$query_cpf = "SELECT cpf FROM tb_alunos WHERE cpf ='$cpf'";
$query_cpf= mysql_query($query_cpf); 
$query_cpf =  mysql_fetch_assoc($query_cpf);

if($query_cpf['cpf']== $cpf){ 
	echo "cpf: $cpf já existe na base de dados. Se aluno menor de idade: ver se o responsavel já não tem cadastro no sistema.<br/>";
	exit;
}
//fim da verificação


$query = "INSERT INTO tb_alunos(nome_completo, 
				lagradouro,   
				cidade, 
				estado_uf, 
				cep, 
				data_nasc, 
				cpf, 
				rg, 
				rg_orgao,
				email, 
				inicio_curso, 
				tipo_curso, 
				situacao_aluno, 
				descricao1, 
				telefones, 
				id_aluno, 
				senha, 
				naturalidade, 
				naturalidade_uf, 
				celular, 
				expedicao, 
				nome_do_pai , 
				nome_do_mae ,
				registro_ativo, 
				url_foto, 
				codigo_aluno, 
				data_cadastro)
		 values('$nome_completo','$lagradouro','$cidade','$estado_uf','$cep','$data_nasc','$cpf','$rg','$rg_orgao','$email','$inicio_curso','$tipo_curso','$situacao_aluno','$descricao1','$telefones','NULL','$senha','$naturalidade', '$naturalidade_uf', '$celular' , '$expedicao' ,'$nome_pai','$nome_mae', '$registro_ativo', '$url_foto', '$codigo_aluno','$data_cadastro')";


/*$query = "INSERT INTO tb_alunos(nome_completo, lagradouro, numero_casa, bairro, cidade, estado_uf, cep, data_nasc, cpf, rg, email, inicio_curso, termino_curso, tipo_curso, situacao_aluno,  polo, descricao1, telefones, id_aluno, senha, naturalidade, ddd, celular, expedicao, registro_ativo, url_foto, codigo_aluno, data_cadastro, nome_do_pai, nome_do_mae)


	values('$nome_completo','$lagradouro','$numero_casa','$bairro','$cidade','$estado_uf','$cep','$data_nasc','$cpf','$rg','$email','$inicio_curso','$termino_curso','$tipo_curso','$situacao_aluno','$polo','$descricao1','$telefones','$id_aluno','$senha','$naturalidade','$ddd','$celular' , '$expedicao' , '$registro_ativo', '$url_foto', '$codigo_aluno','$data_cadastro','$nome_do_pai','$nome_do_mae')";*/
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>


<?
mysql_close($link);
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
          <table width="739" border="0" cellspacing="3" cellpadding="4">
            <tr>
              <td align="center"><span class="titulo_principal">Cadastre um Novo Aluno</span></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
                  <tr>
                    <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
                  </tr>
              </table></td>
            </tr>
          </table>


<div align="center">
  <p>&nbsp;</p>
  <p class="titulo_principal">ALUNO CADASTRADO COM SUCESSO.</p>
  <p>&nbsp;</p>
  <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a><a href="pagina_principal_02.php" class="links"></a> </p>
</div>
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
