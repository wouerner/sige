<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";


$id_adm = $HTTP_GET_VARS['id_adm'];

 $query = "DELETE FROM senhas_adm WHERE id_adm=$id_adm";
	           $resultado	=  mysql_query($query);

header('location:site_usuarios_listar_todos_usus.php');
exit();
?>
