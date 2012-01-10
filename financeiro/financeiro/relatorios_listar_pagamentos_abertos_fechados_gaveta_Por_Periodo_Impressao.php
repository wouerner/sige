<?php
include "../includes/validacao_pagina_adm.php";  	
include "../includes/../includes/../includes/../includes/conexao_bd.php";
$status_pagt = $_GET['status_pagt'];
$data1 = $_GET['data1'];
$data2 = $_GET['data2'];

?>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/estilo_sistema.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #000099;
}
.style3 {	color: #FFFFFF;
	font-size: 9px;
	font-weight: bold;
}
.style4 {color: #000099}
-->
</style>
<body style="background-color: #FFFFFF">




  <table width="951" border="0">
    <tr>
      <td height="98" align="center"><span class="titulo_principal">Relat&oacute;rio Financeiro<br>
      </span><span class="links">Relat&oacute;rio de 
	  
	  <strong> 
	  <? $data_quebrada2 = explode('-', $data1);
	  $data_inicio = $data_quebrada2[2].'/'.$data_quebrada2[1].'/'.$data_quebrada2[0];
	  echo "$data_inicio";
	  ?>
	  </strong>
	  
	  at&eacute; 
	  
	  <strong>  
	  <? $data_quebrada3 = explode('-', $data2);
	  $data_final = $data_quebrada3[2].'/'.$data_quebrada3[1].'/'.$data_quebrada3[0];
	  echo "$data_final";
	  ?>
	  </strong>
	  
	  com o status <strong> <? echo "$status_pagt"; ?><br>
      <br>
      </strong>consta o valor de R$ <strong>
<?php
$SQL3 = "SELECT sum(valor) AS soma FROM tb_historico_financeiro WHERE status = '$status_pagt'  AND dia_venc BETWEEN '$data1' AND '$data2' ";  
$query3 = mysql_query($SQL3);  
while($dados3=mysql_fetch_array($query3))

{
echo "".$dados3['soma']."";
}
?>
      </strong></span></td>
    </tr>
</table>

  <table width="953" height="19" border="0" cellpadding="0" cellspacing="2" bgcolor="#006600" onMouseOver="this.className='fundo';" onMouseOut="this.className='NULL';">
    <tr>
      <td width="250" align="center" class="menu_01"><span class="style3">NOME DO ALUNO </span></td>
      <td width="111" align="center" class="menu_01"><span class="style3"><strong>CATEGORIA</strong></span></td>
      <td width="115" align="center" class="menu_01"><span class="style3"><strong>FORMA PAGT&ordm;</strong></span></td>
      <td width="90" align="center" class="menu_01"><span class="style3"><strong>VENCIMENTO</strong></span></td>
      <td width="82" align="center" class="menu_01"><span class="style3"><strong>VALOR</strong></span></td>
      <td width="105" align="center" class="menu_01"><span class="style3"><strong>N&ordm; BOLETO </strong></span></td>
      <td width="187" align="center" class="menu_01"><span class="style3"><strong>OBSERVA&Ccedil;&Atilde;O</strong></span></td>
    </tr>
  </table>

    <?php

$SQL = "SELECT * FROM tb_historico_financeiro WHERE status = '$status_pagt'  AND dia_venc BETWEEN '$data1' AND '$data2' ORDER BY dia_venc"; 
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{


$SQL2 = "SELECT * FROM tb_alunos WHERE  id_aluno = '$x[id_aluno]'"; 
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{

?>
    
    <link href="css_destaques.css" rel="stylesheet" type="text/css" />
  <table width="948" height="24" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td align="center"><table width="944" height="19" border="0" cellpadding="0" cellspacing="2" bgcolor="#F5FFF4" onMouseOver="this.className='fundo';" onMouseOut="this.className='NULL';" >
          <tr>
            <td width="248" class="fonte03"><strong><? echo "$x2[nome_completo]" ?></strong></td>
            <td width="108" align="center" class="fonte03"><span class="style4"><? echo "$x[categoria]"; ?></span></td>
            <td width="116" align="center" class="fonte03"><span class="style4"><? echo "$x[forma_pagto]"; ?></span></td>
            <td width="88" align="center" class="fonte03">
			
			<span class="style4">
			<? $data_quebrada = explode('-', $x[dia_venc]);
			$data_vencimento = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];
			echo "$data_vencimento";
			?>
			</span>
			
			</td>
            <td width="84" align="center" class="fonte03"><span class="style4">R$ <? echo "$x[valor]"; ?></span></td>
            <td width="103" align="center" class="fonte03">
			
			<span class="style4">
			
			<?php
			$SQL4 = "SELECT * FROM tb_boletos_itau WHERE  id_boleto = '$x[id_boleto]'"; 
			$query4 = mysql_query($SQL4);  
			while($x4 = mysql_fetch_array($query4))  
			{
			echo "$x4[nosso_mumero]"; 
			}
			?>
			
			</span>
			
			</td>
            <td width="181" align="center" class="fonte03"><span class="style4"><? echo "$x[observacao]"; ?></span></td>
          </tr>
      </table></td>
    </tr>
  </table>
  
    <?php } ?>
    <?php } ?>
    
    
      <?
mysql_close($link);
?>