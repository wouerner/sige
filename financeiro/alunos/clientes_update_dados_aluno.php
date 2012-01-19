<?php
include "../includes/validacao_pagina_adm.php"; 
include "../includes/conexao_bd.php";

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
mysql_close($link);
header('location:clientes_editar_dados_aluno.php?id_aluno='.$id_aluno);
exit();
?>
