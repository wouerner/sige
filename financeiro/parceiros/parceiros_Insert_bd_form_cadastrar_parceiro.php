<?php
//pega sessão id do navegador
session_start( );
$sessao = session_id();
//fim do sessão id
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
              <td align="center" class="titulo_principal">Parceiros</td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
                  <tr>
                    <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
                  </tr>
              </table></td>
            </tr>
          </table>
<?php
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




$nome_completo   = $_POST['nome_completo'];
$lagradouro   = $_POST['lagradouro'];
$n_casa   = $_POST['n_casa'];
$bairro   = $_POST['bairro'];
$cidade   = $_POST['cidade'];
$uf   = $_POST['uf'];
$cep   = $_POST['cep'];
$data_nasc   = $_POST['data_nasc'];
$cpf   = $_POST['cpf'];
$rg   = $_POST['rg'];
$email   = $_POST['email'];
$telefone   = $_POST['telefone'];
$senha   = $_POST['senha'];
$naturalidade   = $_POST['naturalidade'];
$ddd   = $_POST['ddd'];
$celular   = $_POST['celular'];
$expedicao   = $_POST['expedicao'];
$registro_ativo   = 's';
$url_foto = '_avatar.jpg';
$cod_parceiro = "$junta_duas_variaveis";




$query = "INSERT INTO tb_socios (nome_completo, lagradouro, n_casa, bairro, cidade, uf, cep, rg, expedicao,  naturalidade, cpf, data_nasc, ddd, telefone, celular, email, senha, registro_ativo, url_foto, cod_parceiro)


 values('$nome_completo','$lagradouro','$n_casa','$bairro','$cidade','$uf','$cep','$rg','$expedicao','$naturalidade','$cpf','$data_nasc','$ddd','$telefone','$celular','$email','$senha','$registro_ativo','$url_foto','$cod_parceiro')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>



<script LANGUAGE="Javascript">


        parent.scroll(0,0);

</script>



<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p class="fonte05">PARCEIRO CADASTRADO COM SUCESSO.</p>
  <p>&nbsp;</p>
  
  <p>&nbsp;</p>
  <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p>
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