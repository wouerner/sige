<?php

include "validacao_pagina_aluno.php"; 
include "financeiro/conexao_bd.php";


$id_aluno = $_GET['id_aluno']  ;



// datas disponiveis
$SQL = "SELECT * FROM tb_agenda_provas ";  
$query = mysql_query($SQL); 

$datas = array();
$cont = 0;

while($x = mysql_fetch_array($query)){  

$data_quebrada = explode('-', $x['data_disponivel']);

$datas[$cont]['data']= $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];
$datas[$cont]['id']  = $x['id_data'];

$cont++;
}


//tipo ensino
$SQL = "SELECT * FROM tb_tipo_ensino ";  
$query = mysql_query($SQL); 


$tipoEnsino = array()  ;

$cont = 0;

while($x = mysql_fetch_array($query)){ 
	
	$tipoEnsino[$cont]['id'] = $x['id']; 
	$tipoEnsino[$cont]['nome'] = $x['nome']; 

	$cont++;
} 

//tipo ensino
$SQL = "SELECT * FROM tb_tipo_materias ";  
$query = mysql_query($SQL); 


$tipoMaterias = array()  ;
$cont = 0;

while($x = mysql_fetch_array($query)){ 
	
	$tipoMaterias[$cont]['id'] = $x['id']; 
	$tipoMaterias[$cont]['nome'] = $x['nome']; 

	$cont++;
} 

?>


<html>
<head>
	<title>Agendar provas - CEBAN</title>
</head>

<body>

	<div id = " tudo " >
		<fieldset>
		<legend>Adicionar Agendamento</legend>

		<form action="dados_do_aluno_agendamento_de_prova_Insert_bd.php" method="post">

			<label for = "dataDisponivel"> Data Disponivel</label>
			<select name="dataDisponivel" id="dataDisponivel">
                  
				<?php for ($i =0 ; $i <count($datas)  ; $i++ ): ?>
				<option value="<?php echo $datas[$i]['id']; ?>" > <?php echo $datas[$i]['data']; ?> </option> 
				<?php endfor;?>
			</select>

			<label for= " tipoEnsino  " >Tipo Ensino</label>
			<select name = "tipoEnsino" id = " tipoEnsino  " >
				<?php for ($i =0 ; $i <count($tipoEnsino)  ; $i++ ): ?>
				<option value="<?php echo $tipoEnsino[$i]['id']; ?>" > <?php echo $tipoEnsino[$i]['nome']; ?> </option> 
				<?php endfor;?>
			</select>

			<label for = " materias  " >Materias</label>
			<select name= "materias"  id = " materias  " >
				<?php for ($i =0 ; $i <count($tipoMaterias)  ; $i++ ): ?>
				<option value="<?php echo $tipoMaterias[$i]['id']; ?>" > <?php echo $tipoMaterias[$i]['nome']; ?> </option> 
				<?php endfor;?>
			</select>
			
			<input type="hidden" value = " <?php echo $id_aluno?>  " name="id_aluno" />

			<button type= "submit">agendar</button>

		</form>

		</fieldset>

	</div>

</body>

<html>
