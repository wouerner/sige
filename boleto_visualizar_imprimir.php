<?php

include "financeiro/conexao_bd.php";
$cod_boleto  = $HTTP_GET_VARS['cod_boleto'];
$cod_aluno  = $HTTP_GET_VARS['cod_aluno'];
$id_boleto  = $HTTP_GET_VARS['id_boleto'];

$resultado2 = mysql_query("SELECT * FROM tb_boletos_itau WHERE cod_boleto = '$cod_boleto'");
$linhas = mysql_num_rows ($resultado2);

for($i=0; $i<$linhas; $i++)
{
$sacado = mysql_result ($resultado2, $i, "sacado");
$email = mysql_result ($resultado2, $i, "email");
$lagradouro = mysql_result ($resultado2, $i, "lagradouro");
$numero_casa = mysql_result ($resultado2, $i, "numero_casa");
$bairro = mysql_result ($resultado2, $i, "bairro");
$cidade = mysql_result ($resultado2, $i, "cidade");
$estado  = mysql_result ($resultado2, $i, "estado_uf");
$cep = mysql_result ($resultado2, $i, "cep");
$cpf_cnpj = mysql_result ($resultado2, $i, "cpf");
$valor = mysql_result ($resultado2, $i, "valor");
$vencimento = mysql_result ($resultado2, $i, "data_vencimento");
$data = mysql_result ($resultado2, $i, "data_emissao");
$nossonumero = mysql_result ($resultado2, $i, "nosso_mumero");
$fase_boleto = mysql_result ($resultado2, $i, "fase_boleto");
}
			  

			if($fase_boleto==Fechado)
			{
			
			echo "<strong>O pagamento deste boleto já esta confirmado em nosso sistema. Obrigado.</strong>";
			}
			else
			{
			include "boleto_visualizar_imprimir_02.php";
			}
			?>