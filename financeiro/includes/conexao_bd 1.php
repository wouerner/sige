<?php
$link = mysql_connect('localhost', 'ceban', 'ceban33288815');if (!$link) {die('N�o conseguiu conectar: ' . mysql_error());}
// seleciona o banco ceban
$db_selected = mysql_select_db('ceban', $link);if (!$db_selected) {die ('N�o pode selecionar o banco supletivoceban : ' . mysql_error());}
?>