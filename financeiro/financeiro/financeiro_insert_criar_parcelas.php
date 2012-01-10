<?php
//pega sessão id do navegador
session_start( );
$sessao = session_id();
//fim do sessão id

//NOSSO NÚMERO
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
// Fim do código pra gerar o número randõmico do nosso número.
// FIM NOSSO NÚMERO



include "../includes/validacao_pagina_adm.php";
include "../includes/../includes/../includes/../includes/conexao_bd.php";

$id_aluno   = $_POST['id_aluno'];



//Início do Código para pegar os dados da tabela "Alunos" e depois colocar ná tabela Boletos.
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno = '$id_aluno'");
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

        <table width="739" border="0" cellspacing="3" cellpadding="4">
          <tr>
            <td align="center" class="titulo_principal"><p align="center" class="titulo_principal">Gerar Pagamento </p>
                </td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
                <tr>
                  <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1" /></p></td>
                </tr>
            </table></td>
          </tr>
        </table>
        <p>&nbsp;  </p>
        <p class="fonte05"><?php


$dia_venc = implode("-", array_reverse(explode("/", $dia_venc)));

$forma_pagto   = $_POST['forma_pagto'];
$categoria   = $_POST['categoria'];
$valor   = $_POST['valor'];
$status   = $_POST['status'];
$cob_enviada   = $_POST['cob_enviada'];
$observacao   = $_POST['observacao'];
$numero_parcelas   = $_POST['numero_parcelas'];





if ($categoria == "Parcelas") // Se categoria for igual a parcelas vai gerar um numero X de parcelas.
{
		for($i=0;$i<$numero_parcelas;$i++){ //Começo do Comenado para repetir X vezes o numero de parcelas
		$i2 = 1;

		$parcela_numero = $i+$i2;
		

	
	
//Multiplica os messes de acordo com a o numero de parcelas	
//Início Criar registro para o próximo Mês na tabela Histórico Financeiro
//inserindo um novo registro com quase as mesmas informações do mês anterior
$data_base = "$dia_venc";
$data_quebrada = explode('-',$data_base);
        $dia = "$data_quebrada[2]";
        $mes = "$data_quebrada[1]";
        $ano = "$data_quebrada[0]";
        // Soma mes e dias a data atual 
        $nova_data = mktime(0, 0, 0, $mes + $i, $dia, $ano);
        // Imprime a nova data no formato DD/MM/YYYY
		$dia_venc2 = date("Y/m/d", $nova_data);
	
	
	
	
		
		if ($forma_pagto == "Boleto") //Se a forma de pagamento for igual a Boleto
		{
		
		//Insere todos os dados na tabela histórico financeiro.
		//Ainda não tem chave primária do id do boleto para fazer o vinculo.
		$query = "INSERT INTO tb_historico_financeiro (id_aluno, dia_venc, forma_pagto, categoria, valor, status, cob_enviada, observacao, numero_parcelas, parcela_numero) 
		
		VALUES ('$id_aluno','$dia_venc2','$forma_pagto','$categoria','$valor','$status','$cob_enviada','$observacao','$numero_parcelas','$parcela_numero')";
					  
		
		$resultado = mysql_query($query)
		or die ("Houve erro na gravação dos dados.");
		//fechamento da gravação de dados na tabela Histórico Financeiro
		
		
		//Início de gravação de dados na tabela Boletos Itaú
		
		

//NOSSO NÚMERO DO BOLETO
// Inicio do código pra gerar o número randõmico do nosso número.
// setando o mínimo é o máximo que o número aleatório deve chegar
$num_imagem = randNum(00000001,99999999);
// Fim do código pra gerar o número randõmico do nosso número.
		
		
//Dados para inserir na tabela Boleto Itaú


$cod_boleto = "$sessao$num_imagem$id_aluno";
$fase_boleto = "Aberto";
$data_emissao = date("d/m/Y");
$nosso_mumero = "$num_imagem";
		
		
		

$query = "INSERT INTO tb_boletos_itau (codigo_aluno, id_aluno, sacado, lagradouro, numero_casa, bairro, cidade, estado_uf, cep, cpf, email, nosso_mumero, fase_boleto, valor, data_vencimento, data_emissao, cod_boleto, numero_parcelas, parcela_numero)
 values('$codigo_aluno','$id_aluno','$sacado','$lagradouro','$numero_casa','$bairro','$cidade','$estado_uf','$cep','$cpf','$email','$nosso_mumero','$fase_boleto','$valor','$dia_venc2','$data_emissao','$cod_boleto','$numero_parcelas','$parcela_numero')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");



//Pega os últimos registros na tabela Boleto Itaú e coloca na Tabela Histórico Financeiro
//responsável por inserir o registro financeiro na tabela "Boletos Itau" baseado no id do aluno
$resultado5= mysql_query("SELECT * FROM tb_boletos_itau WHERE id_aluno = '$id_aluno' ORDER BY id_boleto DESC LIMIT $numero_parcelas"); // Esta query é responsável por pegar o ultimo registro do banco 
$linhas5 = mysql_num_rows ($resultado5);
$id_boleto = mysql_result ($resultado5, $i5, "id_boleto");



//responsável por pegar o ultimo registro da tabela "Histórico Financeiro para depois poder Atualizar o campo id_boleto na prória tabela
$resultado6= mysql_query("SELECT * FROM tb_historico_financeiro WHERE id_aluno = '$id_aluno' ORDER BY id_cob DESC LIMIT $numero_parcelas"); // Esta query é responsável por pegar o ultimo registro do banco 
$linhas6 = mysql_num_rows ($resultado6);
$id_cob = mysql_result ($resultado6, $i6, "id_cob");




//Update
$query = "Update tb_historico_financeiro Set 

id_boleto =  '$id_boleto'

Where id_cob = '$id_cob'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");

		
		
		echo "<br>";echo "<br>";
		echo "$parcela_numero";		
		echo " PARCELAS COM BOLETOS GERADAS COM SUCESSO!";
		echo "<br>";
		
		}
		else
		
		
		
		{
				//SE A PARCELA NÃO FOR BOLETO VAI GERAR A SEGUINTE ROTINA
				//Insere todos os dados na tabela histórico financeiro.
				$query = "INSERT INTO tb_historico_financeiro (id_aluno, dia_venc, forma_pagto, categoria, valor, status, cob_enviada, observacao, numero_parcelas, parcela_numero) 
				
				VALUES ('$id_aluno','$dia_venc2','$forma_pagto','$categoria','$valor','$status','$cob_enviada','$observacao','$numero_parcelas','$parcela_numero')";
							  
				
				$resultado = mysql_query($query)
				or die ("Houve erro na gravação dos dados.");
				//fechamento da gravação de dados na tabela Histórico Financeiro
				
				echo "<br>";echo "<br>";
		echo "$parcela_numero"; 	 			
		echo " PARCELAS DE $forma_pagto GERADAS COM SUCESSO!";
		echo "<br>";
				
			}


										  }//Fim do Comenado para repetir X vezes o numero de parcelas
		
		
		
		

}

else


{
// SE A CATEGORIA FOR DIFERENTE DE PARCELAS VAI EXECUTAR A SEGUINTE ROTINA
// SE A CATEGORIA FOR DIFERENTE DE PARCELAS VAI EXECUTAR A SEGUINTE ROTINA
// SE A CATEGORIA FOR DIFERENTE DE PARCELAS VAI EXECUTAR A SEGUINTE ROTINA




		if ($forma_pagto == "Boleto") //Se a forma de pagamento for igual a Boleto
		{
		
		//Insere todos os dados na tabela histórico financeiro.
		//Ainda não tem chave primária do id do boleto para fazer o vinculo.
		$query = "INSERT INTO tb_historico_financeiro (id_aluno, dia_venc, forma_pagto, categoria, valor, status, cob_enviada, observacao, numero_parcelas, parcela_numero) 
		
		VALUES ('$id_aluno','$dia_venc','$forma_pagto','$categoria','$valor','$status','$cob_enviada','$observacao','$numero_parcelas','$parcela_numero')";
					  
		
		$resultado = mysql_query($query)
		or die ("Houve erro na gravação dos dados.");
		//fechamento da gravação de dados na tabela Histórico Financeiro
		
		
		//Início de gravação de dados na tabela Boletos Itaú
		
		

//NOSSO NÚMERO DO BOLETO
// Inicio do código pra gerar o número randõmico do nosso número.
// setando o mínimo é o máximo que o número aleatório deve chegar
$num_imagem = randNum(00000001,99999999);
// Fim do código pra gerar o número randõmico do nosso número.
		
		
//Dados para inserir na tabela Boleto Itaú


$cod_boleto = "$sessao$num_imagem$id_aluno";
$fase_boleto = "Aberto";
$data_emissao = date("d/m/Y");
$nosso_mumero = "$num_imagem";
		
		
		

$query = "INSERT INTO tb_boletos_itau (codigo_aluno, id_aluno, sacado, lagradouro, numero_casa, bairro, cidade, estado_uf, cep, cpf, email, nosso_mumero, fase_boleto, valor, data_vencimento, data_emissao, cod_boleto)
 values('$codigo_aluno','$id_aluno','$sacado','$lagradouro','$numero_casa','$bairro','$cidade','$estado_uf','$cep','$cpf','$email','$nosso_mumero','$fase_boleto','$valor','$dia_venc','$data_emissao','$cod_boleto')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");



//Pega os últimos registros na tabela Boleto Itaú e coloca na Tabela Histórico Financeiro
//responsável por inserir o registro financeiro na tabela "Boletos Itau" baseado no id do aluno
$resultado5= mysql_query("SELECT * FROM tb_boletos_itau WHERE id_aluno = '$id_aluno' ORDER BY id_boleto DESC LIMIT 1"); // Esta query é responsável por pegar o ultimo registro do banco 
$linhas5 = mysql_num_rows ($resultado5);
$id_boleto = mysql_result ($resultado5, $i5, "id_boleto");



//responsável por pegar o ultimo registro da tabela "Histórico Financeiro para depois poder Atualizar o campo id_boleto na prória tabela
$resultado6= mysql_query("SELECT * FROM tb_historico_financeiro WHERE id_aluno = '$id_aluno' ORDER BY id_cob DESC LIMIT 1"); // Esta query é responsável por pegar o ultimo registro do banco 
$linhas6 = mysql_num_rows ($resultado6);
$id_cob = mysql_result ($resultado6, $i6, "id_cob");




//Update
$query = "Update tb_historico_financeiro Set 

id_boleto =  '$id_boleto'

Where id_cob = '$id_cob'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");

		
		
		echo "<br>";echo "<br>";
		echo "MENSALIDADE COM BOLETOS GERADAS COM SUCESSO!";
		echo "<br>";
		
		}
		else
		
		
		
		{
				//SE A PARCELA NÃO FOR BOLETO VAI GERAR A SEGUINTE ROTINA
				//Insere todos os dados na tabela histórico financeiro.
				
				
				$query = "INSERT INTO tb_historico_financeiro (id_aluno, dia_venc, forma_pagto, categoria, valor, status, cob_enviada, observacao) 
				
				VALUES ('$id_aluno','$dia_venc','$forma_pagto','$categoria','$valor','$status','$cob_enviada','$observacao')";
							  
				
				$resultado = mysql_query($query)
				or die ("Houve erro na gravação dos dados.");
				//fechamento da gravação de dados na tabela Histórico Financeiro
				
				echo "<br>";echo "<br>";
	
		echo "MENSALIDADE DE $forma_pagto GERADAS COM SUCESSO!";
		echo "<br>";
				
			}












}
?>
						

          
          
<?
mysql_close($link);
?></p>
        <p>&nbsp;</p>
        <p>&nbsp;        </p>
        <p>&nbsp;</p>
        <p><a href="pagina_principal.php" target="_self"><img src="imagens/botao_voltar.gif" width="48" height="16" border="0" /></a></p>
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