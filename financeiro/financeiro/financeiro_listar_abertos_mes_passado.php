  <style type="text/css">
<!--
a:link {
	color: #009900;
	text-decoration: none;
}
a:visited {
	color: #009900;
	text-decoration: none;
}
a:active {
	color: #009900;
	text-decoration: none;
}
a:hover {
	color: #990000;
	text-decoration: underline;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	background-color: #FFFFFF;
}
.style1 {color: #000099}
.style3 {color: #000099; font-weight: bold; }
-->


  </style>

<link href="../css/estilo_sistema.css" rel="stylesheet" type="text/css" />
<table width="785" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="775" border="0" cellpadding="0" cellspacing="0" bgcolor="#FEF1F1">
      <tr >
        <td width="294" align="center" class="fonte03"><strong>CLIENTE</strong></td>
        <td width="75" align="center" class="fonte03"><strong>VENCIMENTO</strong></td>
        <td width="63" align="center" class="fonte03"><strong>VALOR</strong></td>
        <td width="56" align="center" class="fonte03"><strong>FORMA</strong></td>
        <td width="64" align="center" class="fonte03"><strong>NOSSO N&ordm;</strong></td>
        <td width="49" align="center" class="fonte03"><strong>ENV.</strong></td>
        <td width="112" align="center" class="fonte03"><strong>CATEG.</strong></td>
        <td width="62" align="center" class="fonte03">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
	
	
<?php
include '../includes/validacao_pagina_adm.php';  	
include('../includes/../includes/../includes/../includes/../includes/conexao_bd.php');




$mes = date("m");
$ano = date("Y");
$mes_ant = "$mes";


$SQL = "SELECT * FROM tb_historico_financeiro WHERE dia_venc <= '$ano-$mes_ant-%' and status = 'aberto'";   
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{	

$id_boleto = "$x[id_boleto]";

$SQL2 = "SELECT * FROM tb_alunos WHERE id_aluno = $x[id_aluno]";  
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{




$data_quebrada = explode('-', $x['dia_venc']);

$data_vencimento = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];


?>
<table width="775" height="17" border="0" cellpadding="1" cellspacing="1" bgcolor="#FEF1F1" onmouseover="this.className='fundo';" onmouseout="this.className='NULL';">
  <tr>
    <td width="290" class="fonte03"><strong><? echo "$x2[nome_completo]" ?></strong></td>
    <td width="73" align="center" class="fonte03"><strong><span class="style1"><? echo "$data_vencimento"; ?></span></strong></td>
    <td width="61" align="right" class="fonte03"><strong><span class="style1">R$ <? echo "$x[valor]"; ?></span></strong></td>
    <td width="52" align="center" class="fonte03"><strong><span class="style1"><? echo "$x[forma_pagto]"; ?></span></strong></td>
    <td width="59" align="center" class="fonte03"><span class="style3">
      <?
$resultado= mysql_query ("SELECT * FROM tb_boletos_itau WHERE id_boleto = '$id_boleto'");
$linhas = mysql_num_rows ($resultado);

for($i=0; $i<$linhas; $i++)
{
$nosso_mumero = mysql_result ($resultado, $i, "nosso_mumero");
$cod_boleto = mysql_result ($resultado, $i, "cod_boleto");
}

echo "$nosso_mumero";
?>
    </span></td>
    <td width="49" align="center" class="fonte03"><strong><span class="style1"><? echo "$x[cob_enviada]"; ?></span></strong></td>
    <td width="83" align="center" class="fonte03"><strong><span class="style1"><? echo "$x[categoria]"; ?>  
	
	
			<? if($x['categoria'] == 'Parcelas')
		{
		echo "$x[parcela_numero]/$x[numero_parcelas]";
		}
		else
		{
		}
		?>
	
	
	</span></strong></td>
    <td width="17" align="center" class="fonte03"><p><strong><a href="financeiro_confirmar_antes_fechar_acresc_proximo.php?id_cob=<? echo "$x[id_cob]"; ?>&amp;id_boleto=<? echo "$x[id_boleto]"; ?>" target="_parent"><img src="../imagens/ico_excluir.gif" alt="Fechar Pagamento" title="Fechar Pagamento" width="14" height="13" border="0" /></a></strong></p></td>
    <td width="27" align="center" class="fonte03"><a href="financeiro_editar_dados_boleto_pagamento.php?cod_boleto=<? echo "$cod_boleto" ?>&amp;id_aluno=<? echo "$x[id_aluno]" ?>&amp;id_cob=<? echo "$x[id_cob]" ?>" target="_parent">
      <?php	if($nosso_mumero == '0')
			{
			include ('financeiro_listar_abertos_mes_corrente_Icone_Alterar_pagamento_sem_Boleto_02.php');
			}
			else
			{
			include ('financeiro_listar_abertos_mes_corrente_Icone_Alterar_pagamento_sem_Boleto_01.php');
			}
	
	?>
    </a></td>
    <td width="33" align="center" class="fonte03"><a href="boleto_itau/boleto_itau.php?cod_boleto=<? echo "$cod_boleto" ?>&amp;id_aluno=<? echo "$x[id_aluno]" ?>&amp;id_cob=<? echo "$x[id_cob]" ?>" target="_blank">
      <?php	if($nosso_mumero == '0')
			{
			include ('financeiro_listar_abertos_mes_corrente_Icone_Enviar_lembrete_pagamento.php');
			}
			else
			{
			include ('financeiro_listar_abertos_mes_corrente_Icone_boleto_url_gerar.php');
			}
	
	?>
    </a></td>
  </tr>
</table>
<?php } ?> <?php } ?>


<?
mysql_close($link);
?>


	<br /></td>
  </tr>
</table>

</body>
