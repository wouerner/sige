<?php
include "../financeiro/conexao_bd.php";

            $cpf = $_POST['cpf'];
            $senha = $_POST['senha'];

 $sql = "SELECT * FROM tb_alunos Where cpf='$cpf' AND registro_ativo = 's'";
            $resultado = mysql_query($sql);
			
$linhas=mysql_num_rows($resultado);

if($linhas==0) //testa se a consulta retornou algum registro
{
$aviso_erro = "O CPF digitado n�o foi encontrado em nosso banco de dados!";}


else
{

if ($senha!=mysql_result($resultado, 0, "senha"))//confere senha

{
$aviso_erro = "A Senha esta incorreta! Redirecionando em 2 segundos ...";
}


else //usu�rio e senhas corretos. Vaos cria os cookies
{

setcookie("cpf_", $cpf,   time()+86400*1);
setcookie("senha_", $senha,     time()+86400*1);


//direciona para a p�gina inicial dos usu�rios cadastrados
header ("Location:dados_do_aluno.php");
exit();


}
}

mysql_close($link);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Curso Preparat&oacute;rio para Supletivo a Dist&acirc;ncia</title>
</head>

<body>
<?php echo $aviso_erro 
?>
</body>
</html>
