<!DOCTYPE html>
<html> 
<head>
<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container" >
	<?php include '../includes/cabecalho.inc.php' ; ?>
<div class = "row" >
<div class = "span3">
	<?php include '../includes/menu_lateral.php' ; ?>
</div>
<div class = "span13" >
	<fieldset>
		<legend>Adicionar Avisos</legend>
		<form action = "salvarAviso.php" method = "post" class = "form-stacked" >
		<label> Escreva o avisos que sera mostrado a todos os alunos.</label>
		<br/>
		<textarea rows="10" cols="50" name="aviso"></textarea> 	
		<br/>
		<button type= "submit" class = "btn" >Salvar</button>
			
		</form>
	</fieldset>

</div>
</div>
</body>

</html>
