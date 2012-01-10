<?php
$id_cli  = $HTTP_GET_VARS['id_cli']; 

include "validacao_pagina_adm.php";  	
include('conexao_bd.php');


$resultado= mysql_query ("SELECT * FROM clientes WHERE id_cli = '$id_cli'");
$linhas = mysql_num_rows ($resultado);

?>

<?php for($i=0; $i<$linhas; $i++)
{
$nome_cli = mysql_result ($resultado, $i, "nome_cli");
}
?>


<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<body style="background-color: transparent">


  <table width="537" border="0">
    <tr>
      <td align="center"><span class="titulo_principal">Ticks Abertos Para: <?php echo "$nome_cli" ?></span></td>
    </tr>
  </table>
<?php
include "validacao_pagina_adm.php";  	
include('conexao_bd.php');


 

$SQL = "SELECT * FROM tb_tickts WHERE id_cli = '$id_cli' AND status_tkt = 'aberto'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{
?>









      
      
      
      <link href="css_destaques.css" rel="stylesheet" type="text/css" />
  </p>
  </blockquote>
  <table width="100" border="1" cellpadding="0" cellspacing="0" bordercolor="#F7F7F7">
    <tr>
      <td><table width="546" border="0">
        <tr>
          <td width="93" align="right" bgcolor="#F5FFF4" class="fonte02">T&iacute;tulo: </td>
          <td colspan="4" bgcolor="#F5FFF4" class="sub_titulos"><strong><? echo "$x[titulo_tkt]"; ?></strong></td>
        </tr>
        <tr>
          <td width="93" align="right" bgcolor="#F5FFEC" class="fonte02">Aberto em:</td>
          <td width="104" bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte02"><? echo "$x[data_abertura]"; ?></strong></td>
          <td width="129" align="right" bgcolor="#F5FFEC" class="fonte02">Prioridade:</td>
          <td width="118" bgcolor="#F5FFEC" class="sub_titulos"><strong class="fonte01"><? echo "$x[nivel_prio]"; ?></strong></td>
          <td width="80" bgcolor="#F5FFEC" class="links"><a href="tickt_confirm_fechar.php?id_tkt=<? echo "$x[id_tkt]" ?>">Fechar Tickt </a></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#F5FFF4" class="fonte02">Detalhes:</td>
          <td colspan="4" bgcolor="#F5FFF4"><span class="fonte01"><? echo "$x[descricao_tkt]"; ?></span></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php } ?>

  </div>
</body>
<?
mysql_close($link);
?>