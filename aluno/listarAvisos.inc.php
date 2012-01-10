<?php

include 'conexao.php';

$pdo = new PDO(DSN, USER, PASSWD);

$sql = "SELECT * FROM tb_avisos";

$stm = $pdo->prepare($sql);

$stm->execute();

$resposta = $stm->fetchAll();

?> 
<div id = "aviso">
<h2>Avisos</h2>
<table>

	<?php foreach($resposta as $linhas) : ?>	
		
		<tr>
			<td><?php echo $linhas['aviso'] ?>  </td>
		</tr>

	<? endforeach ; ?>

</table>
</div>
