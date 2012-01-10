<table width="400" height="44" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="267">
	
	
<?php  	
include('financeiro/conexao_bd.php');

$SQL = "SELECT * FROM tb_dados_site WHERE id = '6'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query)) {  
?>
<style type="text/css">
<!--
.style1 {
	color: #FFfff;
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
-->
</style>

</head>

<body>


<marquee id=marqueex scrollamount=4  scrolldelay=100 direction="left" height=50>
<div align="center"><span class="style1"><? echo "$x[contato_tel_01]"; ?></span>  
  <?php } ?>
  <?php mysql_close($link); ?>
</div>
</marquee>


</td>
  </tr>
</table>
