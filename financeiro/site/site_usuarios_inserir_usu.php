<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');

include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$senha_sistema   = $_POST['senha_sistema'];
$conf_senha   = $_POST['conf_senha'];

if ($senha_sistema == $conf_senha)

{
$nome   = $_POST['nome'];
$email_sistema   = $_POST['email_sistema'];
$senha_sistema   = $_POST['senha_sistema'];

$nivel   = $_POST['nivel'];

$query = "INSERT INTO senhas_adm (nome, email_sistema, senha_sistema, nivel)

values('$nome','$email_sistema','$senha_sistema','$nivel')";
	          

$resultado = mysql_query($query)
or die ("Houve erro na grava��o dos dados.");

echo "<br> <br> <br> <br> <div align='center'class='fonte05'>Cadastro Realizado Com sucesso</div><br> <br>";


echo "<br> <br> <br><div align='center'><a href='pagina_principal.php' target='_self'><img src='imagens/botao_voltar.gif' width='48' height='16' border='0' /></a></div>";

} 


else

{
echo "<br> <br> <br> <br> <div align='center'class='fonte05'>Digite a mesma senha nos dois campos referente a senha</div><br> <br> ";

echo "<br> <br> <br><div align='center'><a href='javascript:history.go(-1)' target='_self'><img src='imagens/botao_voltar.gif' width='48' height='16' border='0' /></a></div>";

} 

mysql_close($link);
header('location:../site/site_usuarios_listar_todos_usus.php');
exit();
?>
            
