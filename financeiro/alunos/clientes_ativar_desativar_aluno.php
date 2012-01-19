<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$id_aluno   = $HTTP_GET_VARS['id_aluno'];
$funcao   = $HTTP_GET_VARS['funcao'];


if ($funcao == "ativar")
{

$query = "Update tb_alunos Set 

registro_ativo =  's'

Where id_aluno='$id_aluno'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");


}
else
{

$query = "Update tb_alunos Set 

registro_ativo =  'n'

Where id_aluno='$id_aluno'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");
}

mysql_close($link);
header('location:../alunos/clientes_listar_gaveta.php');
exit();


?>

