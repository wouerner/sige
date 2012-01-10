<?php
include "../includes/validacao_pagina_adm.php";
include "../includes/conexao_bd.php";
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
<link href="css/boletim.css" rel="stylesheet" type="text/css">
<link href="css/css_formularios.css" rel="stylesheet" type="text/css">
<link href="css/css_links.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>
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

<div class = "container" >

	<?php include '../includes/cabecalho.inc.php' ; ?>
	<div class = "row">
		<div class = "span3">
        <td width="149" valign="top">
		
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
	<div class = "span13" >

</td>
        <td width="839" align="center" valign="top"><!-- InstanceBeginEditable name="corpo_programacao_sistema" -->
          <table width="739" border="0" cellspacing="3" cellpadding="4">
            <tr>
              <td align="center"><span class="titulo_principal">Notas Cadastradas </span></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="imagens/px_pontilhado.gif">
                  <tr>
                    <td><p><img src="imagens/px_pontilhado.gif" width="2" height="1"></p></td>
                  </tr>
              </table></td>
            </tr>
          </table>


	  <?php  
		$query_aluno = "SELECT * FROM tb_boletim WHERE id_aluno = $id_aluno";
		$resultado = mysql_query($query_aluno);
		$num = mysql_num_rows($resultado);
		$bol= mysql_fetch_assoc($resultado);

		if ($num == 0 ){ 
	?>

<!-- Registrar aluno se não tiver boletim ainda, apenas para usuario ADM  -->

			
	<?php if($nivel == "adm") { ?> 
		<form action = "registrar_boletim.php" method = "post">
			<input type = "hidden" name ="id_aluno" value = '<?php echo $id_aluno; ?>'/>
			<input type = "submit"  value = "Registrar boletim" />
		</form>
	<?php } else { ?>
		<p>Somente o usuario adm, pode registrar boletim</p>
	<?php }?>	
<!--  Fim -->

	<?php }else{ ?>
		

<!-- Inserir materias , somente o usuario adm-->
	

	<?php if($nivel == "adm") { ?> 
		<form action = "boletim_inserir_materias.php" method = "post">
			<input type = "hidden" name ="id_aluno" value = '<?php echo $id_aluno; ?>'/>
			<input type = "hidden" name ="boletim" value = '<?php echo $bol['id']; ?>'/>
			<input type = "submit"  value = "Adicionar Materias" class = "btn primary"/>
		</form>
	<?php }?>	
<!-- fim  -->

<?php

			$materias ="SELECT m.id AS materia_id, tp_m.nome AS nome_materia, tp_en.nome AS tipo_ensino , m.aproveitamento AS aproveitamento
				FROM tb_materia AS m, tb_tipo_materias AS tp_m, tb_tipo_ensino AS tp_en
				WHERE m.materia = tp_m.id
				AND m.tipo_ensino = tp_en.id
				AND m.boletim= ".$bol['id'];


			$materias = mysql_query($materias) or die ("não foi possivel ver materias");
?>


			<table>
			
	<?php if($nivel == "adm") { ?> 

			<?php	while($valor = mysql_fetch_assoc($materias) ){  ?>

			<tr>
			<td> 	<?php	echo $valor['nome_materia'];?></td>
			<td>	<?php	echo $valor['tipo_ensino'];?></td>
			<td>

				<?php  if  ( $valor['aproveitamento'] == false) :  ?>
		
					<a class = "btn success" href ="boletim_ver_adcionar_notas_Adicionar_Nota.php?materia=
						<?php echo $valor['materia_id'];?>&id_aluno=<?php echo $id_aluno ;?>"> Adicionar nota</a>	
				
				
				<?php endif ; ?>

				<a class = "btn danger" href ="materia_confirma_deletar.php?materia=<?php echo $valor['materia_id'];?>
									&nome_materia=<?php echo $valor['nome_materia']; ?>
									&tipo_ensino=<?php echo $valor['tipo_ensino']; ?>
									&id_aluno=<?php echo $id_aluno; ?> "> Deletar	</a>	
			</td>
			</tr>



			<?php	}?>
			<?php	}?>

<?php }?>
			</table>


	  <table width="800" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="532" border="0" align="center">
        <tr>
          <td height="50" align="center" class="style7"><a href="pagina_principal.php" target="_self">
<?php
//busca nome completo para configurar o botão voltar.
$query_nome_aluno = "SELECT nome_completo FROM tb_alunos WHERE id_aluno = $id_aluno";

$nome_completo = mysql_query($query_nome_aluno)or die("não foi possivel!");

$nome_completo = mysql_fetch_assoc($nome_completo);
?>

<!--botão volta!-->

<form action="clientes_busca_alunos.php" method = "post" > 
<input type="hidden" name = "palavra" value="<?php echo $nome_completo['nome_completo'] ; ?>"/>
<input type="hidden" name = "tipo_aluno" value="s"/>

<input type="submit" value="Voltar" class = "btn"/>

</form>

            </a></td>
        </tr>
        <tr>
          <td height="112" align="center" valign="top"><span class="fonte_001"> </span>
              <?php


$SQL = "SELECT * FROM tb_boletim WHERE id_aluno = '$id_aluno'";  
$query = mysql_query($SQL);  

$boletim = mysql_fetch_assoc($query);

$id_aluno   = $_GET['id_aluno'];


?>


  <a class = "btn" href="boletim_completo.php?id_aluno=<?php echo $id_aluno ; ?>&nome_completo=<?php echo $nome_completo['nome_completo']?>"> Boletim completo</a>


<?php

				  //descobre o id das materias
				  $query_materias = "SELECT *
					  FROM tb_materia
					  WHERE boletim =".$bol['id'];
				$materias_aluno = mysql_query($query_materias);

				  while ($m = mysql_fetch_assoc($materias_aluno)){
				  	 $m['id'];	
				  
				  }

?>


	<?
				  // teste de boletim
			



				  $query_b = "SELECT DISTINCT 
					  tb_materia.id AS id_m 
					   FROM
					   tb_materia, 
					   tb_tipo_materias, tb_tipo_ensino
					   WHERE
					   tb_materia.materia = tb_tipo_materias.id
					   and
					   tb_materia.tipo_ensino = tb_tipo_ensino.id
					   and
					   tb_materia.boletim =".$boletim['id'];

			  $resultado = mysql_query($query_b);

					$i = 0;
				  $materias = array();
				  while ($valor = mysql_fetch_assoc($resultado)){

					  $materias[$i] = $valor['id_m'];  
					 $i = $i+1;
				  }
				

  
?>


<table id = "boletim">
<caption><h3>Boletim<h3></caption>
	<thead> <tr><td>Curso</td> <td>Disciplina</td> <td>Prova</td> <td> Trabalho</td> <td>Simulado</td> <td> Media Final</td> </tr></thead>

	<tbody>
<?php				  $cont = count($materias);

				for ($y=0 ; $y<$cont; $y++ ){

				  $query_notas =
					  "SELECT DISTINCT 
				tb_tipo_ensino.nome AS curso, tb_tipo_materias.nome AS disciplina, tb_materia.aproveitamento AS aproveitamento, 
					  (select nota from tb_avaliacao where tb_avaliacao.materia = $materias[$y] and tipo_avaliacao = 'Prova'  ORDER by id desc  LIMIT 1 ) as nota_prova ,
					  (select nota from tb_avaliacao where tb_avaliacao.materia = $materias[$y]  and tipo_avaliacao = 'Simulado' limit 1 ) as nota_simulado ,
					 
					  (select nota from tb_avaliacao where tb_avaliacao.materia = $materias[$y]  and tipo_avaliacao = 'Trabalho' limit 1 ) as nota_trabalho
					 
					  FROM
					 
					  tb_materia, 
					 
					  tb_tipo_materias, tb_tipo_ensino
					 
					  WHERE
					 
					  tb_materia.materia = tb_tipo_materias.id
					 
					  and
					 
					  tb_materia.tipo_ensino = tb_tipo_ensino.id
					 
					  and
					 
					  tb_materia.id = $materias[$y] 
					  ";	  
				  $res = mysql_query($query_notas) or die('nn');

				  while ($valor = mysql_fetch_assoc($res)){
?>
				<tr>  
					<td><?php echo $valor['curso']; ?> </td>  
					<td><?php echo $valor['disciplina']; ?> </td>  
					<td><?php echo ltrim( $valor['nota_prova']   , "0" ); ?> </td>  
					<td><?php echo ltrim( $valor['nota_trabalho'], "0" ); ?> </td>  
					<td><?php echo ltrim( $valor['nota_simulado'], "0" ); ?> </td>  
					<td> 
					

<?php
					 //notas  
					  $nota = null;

					  if (!$valor['nota_trabalho'] && !$valor['nota_simulado']){ // se nÃo existir trabalho e simulado, a nota sera a mesma da prova.

						  $nota = $valor['nota_prova'] ;
					  
					  }else 
						  if (!$valor['nota_simulado']){  //sem o simulado a nota sera o trabalho + nota da prova dividido por 2 

						  	$nota = ($valor['nota_prova']+$valor['nota_trabalho'])/2;

						   }else 
							  if (!$valor['nota_trabalho']){  
								$nota = $valor['nota_prova'] + $valor['nota_simulado'];

								}else{ // caso o aluno faÃa todas as avaliaÃÃµe nota = (prova + trabalho)/2 + simulado

					  		$nota =  ($valor['nota_prova']+$valor['nota_trabalho'])/2+($valor['nota_simulado']) ; 
						  
								}
					if($valor['disciplina']=='Educação Física' && !$valor['nota_prova'] && !$valor['nota_simulado'] ){
					  	$nota = $valor['nota_trabalho'];
					  }






						if($nota<50){ $situacao = "vermelha" ;} else {$situacao = "azul"; }		

					?>

					<p class ="<?php echo $situacao ; ?>">  <?php echo ($valor['aproveitamento']==true)? "AE": ltrim($nota,"0") ?> </p>
					</td>  


				</tr>
<?php	
				  }
			}
?>
</tbody>
</table>


  <tr>
    </a></td>
  </tr>
</table>

    </table></td>
  </tr>
</table>

</body>
</html>
