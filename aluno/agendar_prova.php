
<form action="dados_do_aluno_agendamento_de_prova_Insert_bd.php" method="post">
               
                  <select name="data_escolhida" id="data_escolhida"  class="required">
                  
  <option value="">Escolha Uma Data</option>
                  
<?php

$SQL = "SELECT * FROM tb_agenda_provas ";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query)):  


$data_quebrada = explode('-', $x[data_disponivel]);

$data2 = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];

?>
<?php echo "<option value='$x[data_disponivel]'>$data2</option>" ?>
<?php endwhile; ?>
</form>
