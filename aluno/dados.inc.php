<!-- Dados do Aluno-->
<div id ="dadosDoAluno" >

<table>
    	<caption>Aluno:<strong><h3>  <?php echo $_SESSION['aluno']['nome'] ?></h3> </strong> </caption>

<tr><td></td></tr>
	<tr>
	   <td>CPF: <strong><?php echo $_SESSION['aluno']['cpf']; ?></strong></td>
	</tr>
	<tr>
    <td>TELEFONE: <strong><?php echo $_SESSION['aluno']['telefone'] ?> </strong></td>
	</tr>

	<tr>
    <td>E-MAIL: <strong><?php echo $_SESSION['aluno']['email'] ; ?></strong></td>
	</tr>

	<tr>
     <td>CURSO: <strong><?php echo $_SESSION['aluno']['curso']; ?></strong></td>
	</tr>

	<tr>
        <td>OBSERVAÇÃO: <strong><?php echo $_SESSION['aluno']['observacao'] ; ?></strong> </td>
	</tr>
</table>

</div>
<!-- FIM dados do aluno-->
