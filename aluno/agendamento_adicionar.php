<?php

include "validacao_pagina_aluno.php"; 
include "../financeiro/conexao_bd.php";

session_start();

$id_aluno = $_GET['id_aluno']  ;



// datas disponiveis
$SQL = "SELECT * FROM tb_agenda_provas  WHERE ativo = 1";  
$query = mysql_query($SQL); 

if (mysql_num_rows($query)==0) echo "baaa";


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

//tipo materias 
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Centro Educacional Bandeirantes - CEBAN </title>
<link href="css/formularios.css" rel="stylesheet" type="text/css" />
<link href="css/links.css" rel="stylesheet" type="text/css" />
<link href="css/fontes_principais.css" rel="stylesheet" type="text/css" />

<link href="css/areaDoAluno.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	$('select#tipoEnsino').change(function(){
		var selecao = $('#tipoEnsino option:selected').text().toLowerCase();



		if(selecao == 'classificação' ){
			alert( 'Em classificação não e necessario preencher materias');
			$('#materias').attr({disabled: true});	
			
		}else{
			$('#materias').attr({disabled: false});	
		
			
		}

	}
	);

} 
	)
	
// ]]>
</script>

</head>

<body>

	<div id = "tudo" >
<?php include "cab.inc.php" ;?>
<?php include "menu.inc.php"; ?>
<?php include "dados.inc.php" ;?>

<div id="atividade">
		<fieldset>
		<legend>Adicionar Agendamento</legend>

		<form action="agendar.php" method="post">

			<label for = "dataDisponivel"> Data Disponivel</label>
			<select name="dataDisponivel" id="dataDisponivel">
                  
				<?php for ($i =0 ; $i <count($datas)  ; $i++ ): ?>
				<option value="<?php echo $datas[$i]['id']; ?>" > <?php echo $datas[$i]['data']; ?> </option> 
				<?php endfor;?>
			</select>
			<br/>

			<label for= "tipoEnsino" >Tipo Ensino</label>
			<select name="tipoEnsino" id="tipoEnsino" >
				<option>selecione</option>
				<?php for ($i =0 ; $i <count($tipoEnsino)  ; $i++ ): ?>
				<option value="<?php echo $tipoEnsino[$i]['id']; ?>" ><?php echo $tipoEnsino[$i]['nome']; ?></option> 
				<?php endfor;?>
			</select>

			<br/>
			<label for = " materias  " >Materias</label>
			<select name= "materias"  id = "materias" >
				<?php for ($i =0 ; $i <count($tipoMaterias)  ; $i++ ): ?>
				<option value="<?php echo $tipoMaterias[$i]['id']; ?>" > <?php echo $tipoMaterias[$i]['nome']; ?> </option> 
				<?php endfor;?>
			</select>
			<br/>	
			<input type="hidden" value = " <?php echo $id_aluno?>  " name="id_aluno" />

			<button type= "submit">agendar</button>
			<a href="agendamento.php">Cancelar </a>

		</form>

		</fieldset>

	</div>
<div id="rodape"></div>
</div>
</body>
</script>

<html>
