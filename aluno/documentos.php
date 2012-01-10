<?php

session_start();

require 'conexao.php';



			$sql = 'SELECT * FROM tb_documentos WHERE id_aluno ='.$_SESSION['aluno']['id_aluno'];
						
			$stmt = $pdo->query($sql);

			
			$pdo = null;


?>



<?php include "header.inc.php" ; ?>

<body>
<div id = "tudo" >
<?php include "cab.inc.php" ;?>
<?php include "menu.inc.php"; ?>
<?php include "dados.inc.php" ;?>

<div id = "atividade">	
	<table id = "docs">
		<?php	foreach ($stmt as $linha): ?>
			<tr> <td  class ="<?php echo  $linha['fotos']? "ok": "falta" ;?>" >Fotos</td> 
				<td><?php echo $linha['fotos']? "ok": "falta" ; ?> </td></tr>

			<tr> <td class = "<?php echo $linha['rg_certidao']? "ok": "falta" ; ?>" >RG/Certidão </td>
				<td><?php echo $linha['rg_certidao']? "ok": "falta" ; ?> </td></tr>

			<tr> <td class ="<?php echo $linha['cpf']? "ok": "falta" ; ?>" >CPF </td> 
				<td><?php echo $linha['cpf']? "ok": "falta" ; ?></td> </tr>

			<tr> <td class ="<?php echo $linha['titulo_eleitor']? "ok": "falta" ; ?>" > Titulo do eleitor</td> 
				<td><?php echo $linha['titulo_eleitor']? "ok": "falta" ; ?> </td></tr>
			<tr> <td class ="<?php echo $linha['reservista']? "ok": "falta" ; ?>" >*Reservista </td>
				<td><?php echo $linha['reservista']? "ok": "falta" ; ?> </td></tr>

			<tr> <td class="<?php echo $linha['historico_certificado']? "ok": "falta" ; ?>">Historico/Certificado </td>
				 <td><?php echo $linha['historico_certificado']? "ok": "falta" ; ?> </td></tr>

			<tr> <td class = "<?php echo $linha['compr_residencia']? "ok": "falta" ; ?>">Comprovante de Residencia</td> 
				<td><?php echo $linha['compr_residencia']? "ok": "falta" ; ?> </td></tr>
		<?php endforeach ; ?>

	</table>

<p><i>*Alunos do sexo feminino favor ignorar o documento: reservista.</i></p>
<p><i>*Caso esteja faltando algum documentos entregue o mais rápido possivel afim de evitar bloqueio no andamento do curso e nas avaliações.</i></p>
<p><i>*O aluno que não possuir histórico escolar será submetido ao exame de <strong>classificação</strong>.</i></p>

</div>

<div id="rodape"></div>
</div>

</body>

</html>

