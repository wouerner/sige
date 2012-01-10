    	<?php  	
include('financeiro/conexao_bd.php');
?>
 <img src="imagens/mini_logo.gif" width="155" height="53">

<?php 

$SQL = "SELECT * FROM tb_dados_site WHERE id = '1'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query)) {  
?>
      <? echo "<p>$x[endereco]</p>"; ?> 
      <? echo "<p>$x[e_mail]</p>"; ?> 
      <? echo "<p>$x[telefone]</p>"; ?>
      <?php } ?>
<?php
mysql_close($link);
?>
  

       <p>Copyright 2010 - Todos os direitos reservados</p>
