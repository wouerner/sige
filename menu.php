
<?php



$b = $_GET['b'];

if (empty($b)) 
{
	$inicio = 'current';
	
}

else
{

$inicio = $_GET['inicio'];
$quem_somos = $_GET['quem_somos'];
$tres = $_GET['tres'];
$cursos = $_GET['cursos'];
$duvidas = $_GET['duvidas'];
$pagamento = $_GET['pagamento'];
$contato = $_GET['contato'];
$restrita = $_GET['restrita'];
$aulas = $_GET['aulas'];
}

?><ul class="menu5"><li class="<? echo "$contato"; ?>" ><a href="contato.php?contato=current&b=b"><b>Contatos</b></a></li>
<li class="<? echo "$pagamento"; ?>" ><a href="pagamento.php?pagamento=current&b=b"><b>Pagamento</b></a></li>
<li class="<? echo "$duvidas"; ?>" ><a href="duvidas.php?duvidas=current&b=b"><b>D&uacute;vidas</b></a></li>
<li class="<? echo "$cursos"; ?>" ><a href="cursos.php?cursos=current&b=b"><b>Cursos</b></a></li>
<li class="<? echo "$quem_somos"; ?>" ><a href="quem_somos.php?quem_somos=current&b=b"><b>Quem Somos</b></a></li>
<li class="<? echo "$inicio"; ?>" ><a href="index.php?inicio=current"><b>In&iacute;cio</b></a></li>
</ul>
