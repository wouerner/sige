<?php

include 'conexao.php';

$aviso = $_POST['aviso'];

$pdo = new PDO (DSN, USER, PASSWD);

$sql = "INSERT INTO tb_avisos (aviso) VALUES (?)";

$stm = $pdo->prepare($sql);

$stm->bindParam(1,$aviso);

$stm->execute();

header('location:listarAvisos.php');
exit();

?>
