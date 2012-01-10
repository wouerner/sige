<?php

include "../validacao_pagina_adm.php";  	
include "../conexao_bd.php";


$id_aluno = $HTTP_POST_VARS['id_aluno'];
$id_cob = $HTTP_POST_VARS['id_cob'];
$cod_aluno = $HTTP_POST_VARS['cod_aluno'];
$sacado = $HTTP_POST_VARS['sacado'];
$email = $HTTP_POST_VARS['email'];
$lagradouro = $HTTP_POST_VARS['lagradouro'];
$numero_casa = $HTTP_POST_VARS['numero_casa'];
$bairro = $HTTP_POST_VARS['bairro'];
$cidade = $HTTP_POST_VARS['cidade'];
$estado_uf = $HTTP_POST_VARS['estado_uf'];
$cep = $HTTP_POST_VARS['cep'];
$Telefone = $HTTP_POST_VARS['Telefone'];
$cpf = $HTTP_POST_VARS['cpf'];
$Valor = $HTTP_POST_VARS['valor'];
$Data_vencimento = $HTTP_POST_VARS['vencimento'];
$Data_Emissao = $HTTP_POST_VARS['data_hoje'];
$Mensagem = $HTTP_POST_VARS['observacao'];
$sessao = $HTTP_POST_VARS['sessao'];
$nosso_numero = $HTTP_POST_VARS['nosso_numero'];
$fase_boleto = $HTTP_POST_VARS['fase_boleto'];




$query = "INSERT INTO registro_boletos_emitidos (id_aluno, id_cob, cod_aluno, sacado, email, lagradouro, numero_casa, bairro, cidade, estado_uf, cep, Telefone, cpf, Valor, Data_vencimento, Data_Emissao, Mensagem, sessao, nosso_mumero, fase_boleto)


 values('$id_aluno','$id_cob','$cod_aluno','$sacado','$email','$lagradouro','$numero_casa','$bairro','$cidade','$estado_uf','$cep','$Telefone','$cpf','$Valor','$Data_vencimento','$Data_Emissao','$Mensagem','$sessao','$nosso_numero','$fase_boleto')";
 
 
$resultado = mysql_query($query)
or die ("Houve erro na gravação dos dados.");
?>	


<?
$resultado= mysql_query("SELECT * FROM registro_boletos_emitidos WHERE id_aluno = '$id_aluno' AND id_cob = '$id_cob' ORDER BY id_boleto DESC LIMIT 1"); // Esta query é responsável por pegar o ultimo registro do banco 
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$id_boleto = mysql_result ($resultado, $i, "id_boleto");
}


$query = "Update tb_historico_financeiro Set 

id_boleto =  '$id_boleto'

Where id_cob ='$id_cob'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");



?>


<link href="../estilo_sistema.css" rel="stylesheet" type="text/css">
<p align="center">&nbsp;</p>
<p align="center" class="titulo_principal">Boleto Cadastrado com Sucesso </p>
<p align="center" class="links"><a href="boleto_itau.php?sessao=<?php echo $sessao ?>&amp;cod_aluno=<?php echo $cod_aluno ?>&amp;id_boleto=<?php echo $id_boleto ?>">CLIQUE AQUI PARA<br>
VISUALIZAR O BOLETO</a></p>


