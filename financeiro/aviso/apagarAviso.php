<?php

include 'conexao.php';

$pdo = new PDO( DSN, USER, PASSWD ) ;

$sql = "DELETE FROM tb_avisos WHERE id = ?";

$stm = $pdo->prepare($sql);

$stm->bindParam(1, $aviso);

$stm->execute();

header('location:listarAvisos.php');
exit();

?> 
