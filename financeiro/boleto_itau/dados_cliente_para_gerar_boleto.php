<?php
session_start( );
$sessao = session_id();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>



<link href="../estilo_sistema.css" rel="stylesheet" type="text/css" />
</head>

<body>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="22%" align="center"><p><br />
        <br />
    </p>    </td>
    <td width="78%" align="left"><p>
      <?php
include "../validacao_pagina_adm.php";  	
include "../conexao_bd.php";

$id_aluno = $HTTP_GET_VARS['id_aluno'];
$id_cobranca = $HTTP_GET_VARS['id_cobranca'];


$SQL = "SELECT * FROM tb_alunos WHERE id_aluno = '$id_aluno'";  
$query = mysql_query($SQL);  
while($x = mysql_fetch_array($query))  
{


$SQL2 = "SELECT * FROM tb_historico_financeiro WHERE id_cob = '$id_cobranca'";  
$query2 = mysql_query($SQL2);  
while($x2 = mysql_fetch_array($query2))  
{


//data de vencimento

$data_base = date("Y/m/d"); //data de_hoje
$data_quebrada = explode('-', $x2[dia_venc]);
$data_vencimento = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];





//data de hoje
$data_base = date("Y/m/d"); //data de_hoje
$data_quebrada = explode('/', $data_base);
$data_hoje = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];


?>
      <?
function initRand ()
{
   static $randCalled = FALSE;
   if (!$randCalled)
   {
        srand((double) microtime() * 1000000);
        $randCalled = TRUE;
    }
}
function randNum ($low, $high)
{
     initRand();
     $rNum = rand($low, $high);
     return $rNum;
}

// Exemplo de uso. 
// setando o m&iacute;nimo &eacute; o m&aacute;ximo que o n&uacute;mero aleat&oacute;rio deve chegar
$num_imagem = randNum(00000001,99999999);

$cod_link = "$sessao$num_imagem";

?> 
     
        <form id="form1" name="form1" method="post" action="cadastrar_dados_boletono_banco.php">
		
		  <p>
		    
			<input name="id_aluno" type="hidden" id="id_aluno" value="<?php echo "$id_aluno" ?>"/>
		    <input name="id_cob" type="hidden" id="id_cob" value="<?php echo "$id_cobranca" ?>"/>
			<input name="cpf" type="hidden" id="cpf" value="<?php echo "$x[cpf]" ?>"/>
		    <input type="hidden" name="cod_aluno" id="cod_aluno" value="<?php echo "$x[sessao_mais_random]" ?>"/>
			<input type="hidden" name="sacado" id="sacado" value="<?php echo "$x[nome_completo]" ?>"/>
			<input type="hidden" name="email" id="email" value="<?php echo "$x[email]" ?>"/>
			<input type="hidden" name="lagradouro" id="lagradouro" value="<?php echo "$x[lagradouro]" ?>"/>
			<input type="hidden" name="numero_casa" id="numero_casa" value="<?php echo "$x[numero_casa]" ?>"/>
			<input type="hidden" name="bairro" id="bairro" value="<?php echo "$x[bairro]" ?>"/>
			<input type="hidden" name="ddd" id="ddd" value="<?php echo "$x[ddd]" ?>"/>
			<input type="hidden" name="Telefone" id="Telefone" value="<?php echo "$x[Telefone]" ?>"/>
			<input type="hidden" name="cidade" id="cidade" value="<?php echo "$x[cidade]" ?>"/>
			<input type="hidden" name="estado_uf" id="estado_uf" value="<?php echo "$x[estado_uf]" ?>"/>
			<input type="hidden" name="cep" id="cep" value="<?php echo "$x[cep]" ?>"/>
			<input type="hidden" name="cpf" id="cpf" value="<?php echo "$x[cpf]" ?>"/>
		
			
			
		    <input type="hidden" name="categoria" value="<?php echo "$x2[categoria]" ?>"/>
	        <input type="hidden" name="sessao" id="sessao" value="<?php echo "$cod_link" ?>"/>

			<input type="hidden" name="nosso_numero" id="nosso_numero" value="<?php echo "$num_imagem" ?>"/>
			
	        <input type="hidden" name="data_hoje" value="<?php echo "$data_hoje"?>"/>
            
            <input name="fase_boleto" type="hidden" id="fase_boleto" size="15" maxlength="10"  value="Aberto" />
            
</p>
		  <p><span class="fonte01">Deseja emitir um boleto para:</span> <span class="titulo_principal"><br />
          <?php echo "$x[nome_completo]"; ?></span><br />
          <br />
          <span class="fonte01">Dia de Vencimento:</span><br />
          <input type="text" name="vencimento" id="vencimento" value="<? echo "$data_vencimento"; ?>"/>
        </p>
        <p><span class="fonte01">Valor:</span><span class="fonte02">(Aten&ccedil;&atilde;o:separar decimais com &quot;ponto&quot;)</span><br /> 
          <input type="text" name="valor" id="valor" value="<? echo "$x2[valor]"; ?>"/>
        </p>
        <p><span class="fonte01">Observa&ccedil;&atilde;o: </span>
          <br />
          <textarea name="observacao" id="observacao" cols="45" rows="6"><? echo "$x2[observacao]"; ?></textarea>
          <br />
          <br />
          <label>
          <input type="submit" name="Submit" value="    Enviar    " />
          </label>
        </p>
          
          
        <p>
        <? } ?>
        <? } ?>
		
		</form>
        <br />
    </p></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<p>

</body>
</html>