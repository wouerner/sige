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

?>

<table width="739" border="0" cellspacing="3" cellpadding="4">
  <tr>
    <td align="center" class="titulo_principal"><p align="center" class="titulo_principal">Enviar Confirma&ccedil;&atilde;o de Pagamento? </p></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
      <tr>
        <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p class="fonte05">Deseja enviar uma confirma&ccedil;&atilde;o de Pagamento <br />
  para o e-mail pr&eacute;-cadastrado? </p>
<table width="273" height="21" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="101"><p align="center" class="links style2 style3 style6"><a href="financeiro_enviar_confirmacao_pagamento.php?id_cob=<? echo "$id_cob"; ?>" target="_self">SIM</a></p></td>
      <td width="105" align="center"><span class="links style2 style3 style8"><span class="style10"><a href="pagina_principal.php">N&Atilde;O</a></span></span></td>
    </tr>
  </table>
<?php

$status_c = 'Fechado';

$data_hoje = date("Y/m/d");



$SQL = "SELECT * FROM tb_historico_financeiro WHERE id_cob = $id_cob";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{	

$SQL2 = "SELECT * FROM tb_alunos WHERE id_aluno = $x[id_aluno]";  
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{

$cond_categoria   = "$x[categoria]";
$id_boleto   = "$x[id_boleto]";
?>

<?php


if ($cond_categoria == "Parcela" or $cond_categoria == "Avulso")
{

//atualiza o Hitórico de pagamento  para fechado
$query3 = "Update tb_historico_financeiro Set 

status= '$status_c',
pagou_dia= '$data_hoje'

Where id_cob='$id_cob'";
          
$resultado = mysql_query($query3)

or die ("Houve erro na gravação dos dados.");


//atualiza o estado do boleto para fechado
$query7 = "Update tb_boletos_itau Set  

fase_boleto = '$status_c'

Where id_boleto = '$id_boleto'";
          
$resultado7 = mysql_query($query7)

or die ("Houve erro na gravação dos dados.");




}
else
{


//Capiturando a data de hoje Colocando-a no campo referente o dia de fechamento
// Altarando também o campo referente ao fechamento do arquivo

$query3 = "Update tb_historico_financeiro Set 

id_cob=  '$id_cob',
status= '$status_c',
pagou_dia= '$data_hoje'

Where id_cob='$id_cob'";
          
$resultado = mysql_query($query3)

or die ("Houve erro na gravação dos dados.");



//atualiza o estado do boleto para fechado
$query7 = "Update tb_boletos_itau Set  

fase_boleto = '$status_c'

Where id_boleto = '$id_boleto'";
          
$resultado7 = mysql_query($query7)

or die ("Houve erro na gravação dos dados.");



//Início Criar registro para o próximo Mês na tabela Histórico Financeiro
//inserindo um novo registro com quase as mesmas informações do mês anterior

$data_base = "$x[dia_venc]";

$data_quebrada = explode('-',$data_base);

        $dia = "$data_quebrada[2]";

        $mes = "$data_quebrada[1]";

        $ano = "$data_quebrada[0]";

        // Soma mes e dias a data atual 
        $nova_data = mktime(0, 0, 0, $mes + 1, $dia, $ano);
        // Imprime a nova data no formato DD/MM/YYYY
		$dt = date("Y/m/d", $nova_data);


$id_aluno   = "$x2[id_aluno]";
$dia_venc   = "$dt";
$valor   = "$x[valor]";
$forma_pagto   = "$x[forma_pagto]";
$categoria   = "$x[categoria]";
$status = "Aberto";
$cob_enviada = "Não";


$query5 = "INSERT INTO tb_historico_financeiro (id_aluno, dia_venc, valor, forma_pagto, categoria, status, cob_enviada)


values('$id_aluno','$dia_venc','$valor','$forma_pagto','$categoria','$status','$cob_enviada')";
	          

$resultado5 = mysql_query($query5)
or die ("Houve erro na gravação dos dados.");
//Fim Criar novo Registro do Próximo Mês na tabela Hitórico Financeiro







//Início para inserir novo boleto do próximo Mês na tabela BOLETOS

// Inicio do código pra gerar o número randõmico do nosso número.
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
// setando o mínimo é o máximo que o número aleatório deve chegar
$num_imagem = randNum(00000001,99999999);

// Fim do código pra gerar o número randõmico do nosso número.


//Início do Código para pegar os dados da tabela "Alunos" e depois colocar ná tabela Boletos.
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno = '$x[id_aluno]'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$codigo_aluno = mysql_result ($resultado, $i, "codigo_aluno");
$id_aluno = mysql_result ($resultado, $i, "id_aluno");
$sacado = mysql_result ($resultado, $i, "nome_completo");
$lagradouro = mysql_result ($resultado, $i, "lagradouro");
$numero_casa = mysql_result ($resultado, $i, "numero_casa");
$bairro = mysql_result ($resultado, $i, "bairro");
$cidade = mysql_result ($resultado, $i, "cidade");
$estado_uf = mysql_result ($resultado, $i, "estado_uf");
$cep = mysql_result ($resultado, $i, "cep");

$cpf = mysql_result ($resultado, $i, "cpf");
$email = mysql_result ($resultado, $i, "email");


}
//Fim do Código para pegar os dados da tabela "Alunos" e depois colocar ná tabela Boletos.



$cod_boleto = "$sessao$num_imagem$x[id_aluno]";
$fase_boleto = "Aberto";
$data_emissao = date("d/m/Y");


$nosso_mumero = "$num_imagem";
$data_vencimento = date("d/m/Y", $nova_data);



$query33 = "INSERT INTO tb_boletos_itau (codigo_aluno, id_aluno, sacado, lagradouro, numero_casa, bairro, cidade, estado_uf, cep, cpf, email, nosso_mumero, fase_boleto, valor, data_vencimento, data_emissao, cod_boleto)


 values('$codigo_aluno','$id_aluno','$sacado','$lagradouro','$numero_casa','$bairro','$cidade','$estado_uf','$cep','$cpf','$email','$nosso_mumero','$fase_boleto','$valor','$data_vencimento','$data_emissao','$cod_boleto')";
	          

$resultado33 = mysql_query($query33)
or die ("Houve erro na gravação dos dados.");



//responsável por inserir o registro financeiro na tabela "Boletos Itau" baseado no id do aluno

$resultado44= mysql_query("SELECT * FROM tb_boletos_itau WHERE id_aluno = '$id_aluno' ORDER BY id_boleto DESC LIMIT 1"); // Esta query é responsável por pegar o ultimo registro do banco 
$linhas44 = mysql_num_rows ($resultado44);

for($i44=0; $i44<$linhas44; $i44++)
{
$id_boleto = mysql_result ($resultado44, $i44, "id_boleto");
}



//responsável por pegar o ultimo registro da tabela "Histórico Financeiro para depois poder Atualizar o campo id_boleto na prória tabela
$resultado2= mysql_query("SELECT * FROM tb_historico_financeiro WHERE id_aluno = '$id_aluno' ORDER BY id_cob DESC LIMIT 1"); // Esta query é responsável por pegar o ultimo registro do banco 
$linhas2 = mysql_num_rows ($resultado2);

for($i2=0; $i2<$linhas2; $i2++)
{
$id_cob = mysql_result ($resultado2, $i2, "id_cob");
}


//Update
$query11 = "Update tb_historico_financeiro Set 

id_boleto =  '$id_boleto'

Where id_cob = '$id_cob'";
          
$resultado11 = mysql_query($query11)

or die ("Houve erro na gravação dos dados.");

//Fim para inserir nobo boleto do próximo mês na tabela boletos




 }
 }

}
?>

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