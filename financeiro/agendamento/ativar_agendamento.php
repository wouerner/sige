<?php
//include "../validacao_pagina_adm.php";
include "../includes/conexao_bd.php";

$idData = $_POST['id_data'];
$status = $_POST['status'];

$sql = "UPDATE tb_agenda_provas SET ativo = $status WHERE tb_agenda_provas.id_data = $id_data";

$resutlado = mysql_query($sql);

header('Location:../agendamento/agendamento_provas_cadastrar_data.php');
exit();
?>
