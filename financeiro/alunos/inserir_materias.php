<?php 

//include "../includes/validacao_pagina_adm.php";
include "../includes/../includes/conexao_bd.php";


$boletim =  $_POST['boletim'];
$materia = $_POST['materia'];
$tipo_ensino = $_POST['tipo_ensino'];
$id_aluno = $_POST['id_aluno'];

$aproveitamento = $_POST['aproveitamento'];


if (isset($aproveitamento)) {$aproveitamento = true; } 

else{  $aproveitamento = false ;}


$sql_materia = "SELECT * FROM tb_materia WHERE boletim = $boletim AND materia = $materia AND tipo_ensino = $tipo_ensino"; 

$resultado_materia = mysql_query($sql_materia);

if ( mysql_num_rows($resultado_materia) > 0 ){

	echo "ja existe esta mareria";
	exit();

}



$query = "INSERT INTO `tb_materia`(`id`, `materia`, `avaliacao`, `tipo_ensino`, `aproveitamento`,`boletim`) VALUES ('NULL','$materia','NULL','$tipo_ensino','$aproveitamento','$boletim')"; 


mysql_query($query) or die('N�o foi possivel incluir a materia');

header('Location: boletim_ver_adcionar_notas.php?id_aluno='.$id_aluno); 
?>
