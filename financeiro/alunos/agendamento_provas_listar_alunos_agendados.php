<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";


$SQL = "SELECT 
        ag.id AS id_agendamento,
	tp_en.nome AS tipo_ensino , 
	tp_m.nome AS materia ,
	ag_p.data_disponivel AS data_agendamento,
        al.nome_completo AS nome ,
        al.id_aluno AS id_alunos


	FROM 
	tb_agenda_provas_alunos_agendados AS ag , 
	tb_tipo_ensino AS tp_en , 
	tb_tipo_materias AS tp_m , 
	tb_agenda_provas AS ag_p,
        tb_alunos AS al

	WHERE 
	ag.materia = tp_m.id
	AND ag.tipo_ensino = tp_en.id
	AND ag_p.id_data = ag.data_escolhida
       AND al.id_aluno = ag.id_aluno	
       ORDER BY  data_agendamento,nome
	";

$alunoQuery = mysql_query($SQL); 


$alunoAgendamentos= array()  ;
$cont = 0;

//nao me culpe o chefe mandou fazer o mais rapido possivel ...
while($x = mysql_fetch_array($alunoQuery)){ 
	$alunoAgendamentos[ $x['id_alunos'] ] [$cont] ['id_aluno' ]= $x['id_alunos']; 
	$alunoAgendamentos[ $x['id_alunos'] ] [$cont] ['id_agendamento' ]= $x['id_agendamento']; 
	$alunoAgendamentos[ $x['id_alunos'] ][$cont]['tipo_ensino' ]= $x['tipo_ensino']; 
	$alunoAgendamentos[ $x['id_alunos'] ][$cont]['materia' ]= $x['materia']; 
	$alunoAgendamentos[ $x['id_alunos'] ][$cont]['nome' ]= $x['nome']; 
	$alunoAgendamentos[ $x['id_alunos'] ][$cont]['data_agendamento' ]= $x['data_agendamento']; 
	
	$cont++;
} 


?>

<html>
<head>
<title>Gerenciamento</title>

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, post-check=0, pre-check=0">
<meta http-equiv="Pragma" content="no-cache, no-store">
<meta http-equiv="expires" content="0">
<meta name="robots" content="follow" />
<meta name="revisit-after" content="15 days" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(imagens/background.gif);
	background-repeat: repeat-y;
	background-color: #FFFFFF;
}
-->
</style>


<script type="text/javascript" language="JavaScript1.2" src="Resource/js/stmenu.js"></script>
<script type="text/javascript" language="JavaScript1.2">
<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>

<link href="estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/estilo_sistema.css" rel="stylesheet" type="text/css">
<link href="css/css_formularios.css" rel="stylesheet" type="text/css">
<link href="css/css_links.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
<script>

		function ValidaFormulario2 () {

		if (document.formulario2.Nome_Completo.value==""){ 
		alert("Por favor, preencha o campo Nome"); 
		document.formulario2.Nome_Completo.focus(); 
		return false;
	}


		if (document.formulario2.cpf.value==""){ 
		alert("Por favor, preencha o campo CPF"); 
		document.formulario2.cpf.focus(); 
		return false;
	}


	
	
	return true;
}
// -->


</script>


<script type="text/javascript">


function formatar_mascara(src, mascara) {
	var campo = src.value.length;
	var saida = mascara.substring(0,1);
	var texto = mascara.substring(campo);
	var someros = mascara.substring(/\D/g,"");
	
	if(texto.substring(0,1) != saida) {
		src.value += texto.substring(0,1);
	}
}
</script>





<script> // tag JavaScript   -   ### OBS ### - Todas essas explicações que estão escritas após ( // ) não são necessárias para o funcionamento do códigom, são apenas para explicação do código.

	// // Função de validação do formulário
		function ValidaFormulario () {

	// Função de validação do formulário - Nome
		if (document.formulario.cpf.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Informe seu CPF"); // Mensagem que será exibida quando o campo não for preenchido 
		document.formulario.cpf.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
	return false;
	}
  
   // Função de validação do formulário - Assunto
		if (document.formulario.senha.value==""){ // O nome formulario se refere ao nome de seu formulario, caso queira alterar, basta mudar o nome de seu formulário e mudar todas as palavras desta tag com este nome.
		alert("Digite sua Senha"); // Mensagem que será exibida quando o campo não for preenchido
		document.formulario.senha.focus(); // O nome Nome se refere ao nome do campo do seu formulário, caso queira alterar, basta mudar o nome do respectivo campo as palavras desta tag correspondentes ao nome do campo.
		return false;
	}

	
	
	return true;
}
// -->

</script>




<script type="text/JavaScript">
<!--

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<?php include '../includes/css.inc.php' ; ?>
</head>

<body>
<div class = "container">

<?php include '../includes/cabecalho.inc.php' ; ?>

<div class = "row">
<div class = "span3">
		<?php
						if ($nivel == 'adm')
				{
				
				include "../includes/menu_lateral.php";
				}
				else
				{
				//direciona para a página inicial dos usuários cadastrados
				
				include "menu_lateral_secretaria.php";
				}
		
?>
</div>
<div class = span13"">

              <h2><span class="titulo_principal">Alunos Agendados  </span></h2>
<table>

<thead>
	<th>Nome</th>
	<th>Tipo Ensino</th>
	<th>Materia</th>
	<th>Data Agendamento</th>
	<th>Ações</th>
<thead>
				<?php foreach ($alunoAgendamentos as $chave => $valor ): ?>
					
					<?php foreach ( $valor as $v) : ?>	
				<tr>
				<td>	<?php echo $v['nome']; ?>  </td>
				<td>	<?php echo $v['tipo_ensino']; ?>  </td>
				<td>	<?php echo $v['materia']; ?>  </td>
				<td>	
				<?php

				$v['data_agendamento']= explode ("-", $v['data_agendamento']);
				$v['data_agendamento'] = $v['data_agendamento'][2]."/".$v['data_agendamento'][1]."/".$v['data_agendamento'][0];
				echo $v['data_agendamento']; 
					?>  
				</td>

				<td>
					<a href="agendamento_provas_listar_alunos_agendados_Deletar_data.php?id=<?php echo $v['id_agendamento']; ?>&funcao=nao " target="_self" >
						<img src="imagens/ico_excluir.gif" width="17" height="17" border="0" />
		    				</a>
				</td>

		  		<td>
			<a target="_blank"href="ata_aluno.php?id_aluno=<?php echo "$v[id_aluno]"; ?>"> Ata</a>
				</td>
				</tr>
					<?php endforeach; ?>

				<?php endforeach;?>
</table>
</table>
</body>
</html>
