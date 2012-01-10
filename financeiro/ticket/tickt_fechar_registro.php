<?php
include "validacao_pagina_adm.php"; 
include "conexao_bd.php";

$id_tkt = $HTTP_GET_VARS['id_tkt'];
$status_tkt = 'Fechado';

$query = "Update tb_tickts Set 

id_tkt=  '$id_tkt',
status_tkt= '$status_tkt'

Where id_tkt='$id_tkt'";
          
$resultado = mysql_query($query)

or die ("Houve erro na gravação dos dados.");

?>

<?php

$resultado= mysql_query ("SELECT * FROM tb_tickts Where id_tkt='$id_tkt'");
$linhas = mysql_num_rows ($resultado);

?>



  <?php	for($i=0; $i<$linhas; $i++)
{
$id_cli = mysql_result ($resultado, $i, "id_cli");





}
?>    




<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<body style="background-color: transparent">


  <table width="100%" border="0">
    <tr>
      <td align="center"><p class="titulo_principal">&nbsp;</p>
        <p class="titulo_principal">Tickt foi fechado com Sucesso</p>
        <p class="links"><a href="tickt_listar_abertos_cada_cli.php?id_cli=<? echo"$id_cli"; ?> ">Retornar a Lista de Tickts Abertos</a>  </p>
        <p class="titulo_principal"><br>
      </p></td>
    </tr>
  </table>









      


  </div>
</body>
<?
mysql_close($link);
?>