<?php

include "../includes/validacao_pagina_adm.php";  	
include('../includes/../includes/../includes/../includes/conexao_bd.php');


$id_cob  = $HTTP_GET_VARS['id_cob'];
$id_boleto  = $HTTP_GET_VARS['id_boleto']; 
$id_aluno  = $HTTP_GET_VARS['id_aluno']; 

?>

<style type="text/css">
<!--
.style2 {	font-size: 18;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<link href="estilo_sistema.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {font-size: 18px}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style8 {font-weight: bold}
.style10 {font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
<div align="center">
  <p class="sub_titulos">&nbsp;</p>
  <p class="sub_titulos">&nbsp; </p>
  <p class="sub_titulos">Deseja enviar uma confirma&ccedil;&atilde;o de Pagamento para o<br />
  e-mail pr&eacute;-cadastrado de <strong class="titulo_principal"><?
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno = '$id_aluno'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
}

echo "$nome_completo";
?></strong>?</p>
  <table width="206" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="101"><p align="center" class="links style2 style3 style6"><a href="financeiro_enviar_confirmacao_pagamento.php?id_cob=<? echo "$id_cob"; ?>" target="_self">SIM</a></p></td>
      <td width="105" align="center"><span class="links style2 style3 style8"><span class="style10"><a href="javascript:history.back(3)">N&Atilde;O</a></span></span></td>
    </tr>
  </table>
  <p>&nbsp; </p>
</div>
<?php

$status_c = 'Fechado';

$data_hoje = date("Y/m/d");

$status_c = 'Fechado';

$fase_boleto = 'Fechado';


$SQL = "SELECT * FROM tb_historico_financeiro WHERE id_cob = $id_cob";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{	

$SQL2 = "SELECT * FROM tb_alunos WHERE id_aluno = $x[id_aluno]";  
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{

$cond_categoria   = "$x[categoria]";

?>

<?php
if ($cond_categoria == "Avulso")
{

$query3 = "Update tb_historico_financeiro Set 


status= '$status_c',
pagou_dia= '$data_hoje'

Where id_cob = '$id_cob'";
          
$resultado = mysql_query($query3)

or die ("Houve erro na gravação dos dados.");


$query6 = "Update tb_boletos_itau Set 


fase_boleto = '$fase_boleto'

Where id_boleto = '$id_boleto'";
          
$resultado6 = mysql_query($query6)

or die ("Houve erro na gravação dos dados.");




}
else
{


//Capiturando a data de hoje Colocando-a no campo referente o dia de fechamento
// Altarando também o campo referente ao fechamento do arquivo

$query3 = "Update tb_historico_financeiro Set 

id_cob=  '$id_cob',
status= '$status_c',
pagou_dia= '$data_hoje'

Where id_cob='$id_cob'";
          
$resultado = mysql_query($query3)

or die ("Houve erro na gravação dos dados.");







//inserindo um novo registro com quase as mesmas informações do mês anterior

$data_base = "$x[dia_venc]";

$data_quebrada = explode('-',$data_base);

        $dia = "$data_quebrada[2]";

        $mes = "$data_quebrada[1]";

        $ano = "$data_quebrada[0]";

        // Soma mes e dias a data atual 
        $nova_data = mktime(0, 0, 0, $mes + 1, $dia, $ano);
        // Imprime a nova data no formato DD/MM/YYYY
		$dt = date("Y/m/d", $nova_data);


$id_cli   = "$x2[id_cli]";
$dia_venc   = "$dt";
$valor   = "$x[valor]";
$forma_pagto   = "$x[forma_pagto]";
$categoria   = "$x[categoria]";
$status = "Aberto";
$cob_enviada = "Não";


$query5 = "INSERT INTO tb_historico_financeiro (id_cli, dia_venc, valor, forma_pagto, categoria, status, cob_enviada)


values('$id_cli','$dia_venc','$valor','$forma_pagto','$categoria','$status','$cob_enviada')";
	          

$resultado5 = mysql_query($query5)
or die ("Houve erro na gravação dos dados.");





 }
 }

}
?>

<?
mysql_close($link);
?>