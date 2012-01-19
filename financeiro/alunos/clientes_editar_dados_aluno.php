<?php
#Evitando cache de arquivo
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last Modified: '. gmdate('D, d M Y H:i:s') .' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: 0');
include "../includes/validacao_pagina_adm.php";
?>

<html><!-- InstanceBegin template="/Templates/pagina_principal_do_sistema.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gerenciamento</title>
<!-- InstanceEndEditable -->

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
<script type="text/javascript" language="JavaScript1.2"></script>

<script type="text/javascript" src="../../js/jquery.js" language="JavaScript"></script>
<script type="text/javascript" src="../../js/jquery.maskedinput.js" language="JavaScript"></script>
<script type="text/javascript" src="../../js/matricula.js" language="JavaScript"></script>

<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>

<style type="text/css">
<!--
.style1 {color: #3C4796}
-->
</style>
<?php include '../includes/css.inc.php' ; ?>

</head>
<body>

<div class = "container" >


<?php include '../includes/cabecalho.inc.php' ; ?>

<div class = "row" >
	<div class = "span3" >
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
	<div class = "span13">



<?php include "../includes/validacao_pagina_adm.php"; 
include "../includes/conexao_bd.php";

$id_aluno = $HTTP_GET_VARS['id_aluno'];
$resultado= mysql_query ("SELECT * FROM tb_alunos WHERE id_aluno= $id_aluno");


$linhas = mysql_num_rows ($resultado);


?>

	<?php include '../includes/menu_aluno.inc.php' ;?>

       <h3> Editar dados do Aluno </h3>
	

        <?php	for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
$lagradouro = mysql_result ($resultado, $i, "lagradouro");
$numero_casa = mysql_result ($resultado, $i, "numero_casa");		
$bairro = mysql_result ($resultado, $i, "bairro");
$cidade = mysql_result ($resultado, $i, "cidade");
$estado_uf = mysql_result ($resultado, $i, "estado_uf");
$cep = mysql_result ($resultado, $i, "cep");
$data_nasc = mysql_result ($resultado, $i, "data_nasc");
$naturalidade = mysql_result ($resultado, $i, "naturalidade");
$cpf = mysql_result ($resultado, $i, "cpf");
$rg = mysql_result ($resultado, $i, "rg");
$rg_orgao = mysql_result ($resultado, $i, "rg_orgao");
$expedicao = mysql_result ($resultado, $i, "expedicao");
$email = mysql_result ($resultado, $i, "email");
$inicio_curso = mysql_result ($resultado, $i, "inicio_curso");
$termino_curso = mysql_result ($resultado, $i, "termino_curso");
$tipo_curso = mysql_result ($resultado, $i, "tipo_curso");
$situacao_aluno = mysql_result ($resultado, $i, "situacao_aluno");
$polo = mysql_result ($resultado, $i, "polo");
$descricao1 = mysql_result ($resultado, $i, "descricao1");
$telefones = mysql_result ($resultado, $i, "telefones");
$id_aluno = mysql_result ($resultado, $i, "id_aluno");
$senha = mysql_result ($resultado, $i, "senha");
$celular = mysql_result ($resultado, $i, "celular");
$ddd = mysql_result ($resultado, $i, "ddd");
$url_foto = mysql_result ($resultado, $i, "url_foto");
$registro_ativo = mysql_result ($resultado, $i, "registro_ativo");
$nome_do_pai = mysql_result ($resultado, $i, "nome_do_pai");
$nome_do_mae = mysql_result ($resultado, $i, "nome_do_mae");
$data_cadastro = mysql_result ($resultado, $i, "data_cadastro");



}

$data_cadastro = explode("-",$data_cadastro);

$data_cadastro= $data_cadastro[2]."/".$data_cadastro[1]."/".$data_cadastro[0];
?>

<form method="post" action="clientes_update_dados_aluno.php" class = "form-stacked">

      <label>Nome do Aluno: </label>
	<input type="hidden" name="id_aluno" value="<?php echo "$id_aluno" ?>"/>  

	<input name="nome_completo" type="text" class="css_form_02 span9" id="nome_completo"  value="<?php echo "$nome_completo"; ?>" size="70" maxlength="90"/> 
      <label>Rua/Av.</label>

      <input name="lagradouro" type="text" class="css_form_02 span9" id="lagradouro"  value="<?php echo "$lagradouro" ?>" size="70" maxlength="254"/>
	<label>      N&uacute;mero casa: </label>

	<input name="numero_casa" type="text" class="css_form_02" id="numero_casa"  value="<?php echo "$numero_casa" ?>" size="10" maxlength="15"/>
      <label>Bairro:</label>

      <input name="bairro" type="text" class="css_form_02" id="bairro"  value="<?php echo "$bairro" ?>" size="70" maxlength="90"/>
      <label>Cidade:</label>
      <input name="cidade" type="text" class="css_form_02" id="cidade"  value="<?php echo "$cidade" ?>" size="70" maxlength="90"/>

      <label>Estado:</label>
        <select name="estado_uf" class="css_form_02" id="estado_uf">
          <option value="<?php echo "$estado_uf" ?>"><?php echo "$estado_uf" ?></option>
          <option value="AC">AC</option>
          <option value="AL">AL</option>
          <option value="AM">AM</option>
          <option value="AP">AP</option>
          <option value="BA">BA</option>
          <option value="CE">CE</option>
          <option value="DF">DF</option>
          <option value="ES">ES</option>
          <option value="GO">GO</option>
          <option value="MA">MA</option>
          <option value="MG">MG</option>
          <option value="MT">MT</option>
          <option value="MS">MS</option>
          <option value="PA">PA</option>
          <option value="PB">PB</option>
          <option value="PE">PE</option>
          <option value="PI">PI</option>
          <option value="PR">PR</option>
          <option value="RJ">RJ</option>
          <option value="RN">RN</option>
          <option value="RO">RO</option>
          <option value="RR">RR</option>
          <option value="RS">RS</option>
          <option value="SC">SC</option>
          <option value="SE">SE</option>
          <option value="SP">SP</option>
          <option value="TO">TO</option>
	</select>

      <label>Cep:</label>
      <input name="cep"type="text" class="css_form_02" id="cep"  value="<?php echo "$cep" ?> " size="10" maxlength="9"/>
      <label>DDD:</label>
      <input name="ddd" type="text" class="css_form_02" id="ddd"  value="<?php echo "$ddd" ?>" size="10" maxlength="2"/>
     
    
      <label>Telefone</label>
      <input name="telefones" type="text" class="css_form_02" id="telefones"  value="<?php echo "$telefones" ?>" size="70" maxlength="10"/>
    
    
      <label>Celular </label>
      <input name="celular" type="text" class="css_form_02" id="celular"  value="<?php echo "$celular" ?>" size="70" maxlength="10"/>
    
    
      <label>E-mail:</label>
      <input name="email" class="css_form_02" id="email"  value="<?php echo "$email" ?>" type="text" size="70" maxlength="254"text/>
    
    
      <label>CPF:</label>
      <input name="cpf" type="text" class="css_form_02" id="cpf"  value="<?php echo "$cpf" ?>" size="70" maxlength="16"/>
    
    
      <label>RG:</label>
      <input name="rg" type="text" class="css_form_02" id="rg"  value="<?php echo "$rg"?>" size="70" maxlength="16"/>
    
    
      <label>RG Orgão:</label>
      <input name="rg_orgao" type="text" class="css_form_02" id="rg"  value="<?php echo "$rg_orgao"?>" size="70" maxlength="16"/>
    
    
      <label>Data Nascimento:</label>
      <input name="data_nasc" type="text" class="css_form_02" id="data_nasc"  value="<?php echo "$data_nasc" ?>" size="70" maxlength="16"/>
    
    
      <label>Naturalidade:</label>
      <input name="naturalidade" type="text" class="css_form_02" id="naturalidade"  value="<?php echo "$naturalidade" ?>" size="70" maxlength="16"/>
    
    
      <label>Expedi&ccedil;&atilde;o:        </label>
      <input name="expedicao" type="text" class="css_form_02" id="expedicao"  value="<?php echo "$expedicao" ?>" size="70" maxlength="15"/>
    
    
      <label>None do Pai: </label>
      <input name="nome_do_pai" type="text" class="css_form_02" id="nome_do_pai"  value="<?php echo "$nome_do_pai" ?>" size="70" maxlength="160"/>
    
    
      <label>Nome da M&atilde;e </label>
      <input name="nome_do_mae" type="text" class="css_form_02" id="nome_do_mae"  value="<?php echo "$nome_do_mae" ?>" size="70" maxlength="160"/>
    
    
      <label>In&iacute;cio do Curso: </label>
      <input name="inicio_curso" type="text" class="css_form_02" id="inicio_curso"  value="<?php echo "$inicio_curso" ?>" size="70" maxlength="254"/>
    
    
      <label>Pagamento</label>
      <input name="situacao_aluno" type="text" class="css_form_02" id="situacao_aluno"  value="<?php echo "$situacao_aluno" ?>" size="70" maxlength="254"/>
    
    
      <label>P&oacute;lo:</label>
      <input name="polo" type="text" class="css_form_02" id="polo"  value="<?php echo "$polo" ?>" size="70" maxlength="254"/>
    
    
      <label>T&eacute;rmino do Curso: </label>
      <input name="termino_curso" type="text" class="css_form_02" id="termino_curso"  value="<?php echo "$termino_curso" ?>" size="70" maxlength="10"/>
    
    
      <label>Senha de Login: </label>
      <input name="senha" type="text" class="css_form_02" id="senha"  value="<?php echo "$senha" ?>" size="70" maxlength="254"/>

    
    
	<label>Tipo de Cruso*</label>
		
            	<select name="tipo_curso" class="css_form_01"id="tipo_curso" >
		<option value="<?php echo $tipo_curso ;?>" selected="selected"><?php echo $tipo_curso; ?></option>
        		<option value="Ensino Medio">Ensino Medio</option>
        	        <option value="Fundamental">Fundamental</option>
        	        <option value="Fundamental e Medio">Fundamental e Medio</option>
        	       	<option value="2&ordm; e 3 º Ano">2&ordm; e 3 º Ano</option>
             		<option value="3&ordm; Ano">3&ordm; Ano</option>
             		<option value="Materias">Materias</option>
             		<option value="Dependencia">Dependencia</option>

		</select>

	

   


    
      <label>Data Cadastro: </label>
      <input name="data_cadastro" type="text" class="css_form_02" id="data_cadastro"  value="<?php echo "$data_cadastro" ?>" size="70" maxlength="254"/>
    
    
      <label>Observa&ccedil;&atilde;o:</label>
      <textarea name="descricao1" cols="35" rows="4" class="css_form_02 span12" value="<?php echo "$descricao1" ?>"><?php echo "$descricao1" ?></textarea>
    
    
	      <input name="submit" type="submit" class="em_cima" value="          ATUALIZAR          " />
	    


	      </form>
		  
		  
		  
		     

	  
	  
	    
		
		
	
<?
mysql_close($link);
?>

</div>
</div>
</body>
</html>
