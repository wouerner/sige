<?php

$codigo_aluno  = $HTTP_GET_VARS['codigo_aluno']; 

?>
<html>
	<head>
	
	<head>
	
		<body>


		<a href="../requerimento.php?codigo_aluno=<?php echo $codigo_aluno ; ?>">Ficha Individual do Aluno</a>
			<a href = "#" >Declaração de Conclusão</a>
			<a href = "#" >Declaração de Ensino Fundamental</a>
			<a href = "declaracao_matriculando.php?codigo_aluno=<?php echo $codigo_aluno ; ?>" >Declaração de Ensino Matriculado</a>
	</body>



</html>
