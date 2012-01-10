<?php

session_start();


?>


<?php include "header.inc.php" ; ?>
</head>

<body>

<div id = "tudo">
<?php include "cab.inc.php" ;?>
<?php include "menu.inc.php"; ?>
<?php include "dados.inc.php" ;?>

                    <?php $id_aluno   = $_SESSION['aluno']['id_aluno'];    ?>

<!--  notas -->

<?php include "boletim.inc.php"?>

<!-- fim notas-->
<div id="rodape"></div>
</div>

</body>
</html>
