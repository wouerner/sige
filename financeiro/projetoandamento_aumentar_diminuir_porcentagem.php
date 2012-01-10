<?php
include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_projeto   = $_GET['id_projeto'];
$funcao   = $_GET['funcao'];

if ($funcao == "aumentar")
{

$query = "Update tb_projeto_andamento Set 

percentual=  percentual + 1

Where id_projeto='$id_projeto'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");


}
else
{


$query = "Update tb_projeto_andamento Set 

percentual=  percentual - 1

Where id_projeto='$id_projeto'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");

}
?>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />



<br />
<h1 align="center" class="titulo_principal">Cadastro Atualizado com sucesso!</h1>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1"><a href="javascript:window.close()" class="links">Voltar para tela inicial</a> </p>



<?
mysql_close($link);
?>


<script>
window.location = 'projetoandamento_listar_abertos.php';
</script>
