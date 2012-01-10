

<?php
include "validacao_pagina_adm.php";
include "conexao_bd.php";


$id_aluno_parceiro = $_GET['id_aluno_parceiro'];


$resultado2= mysql_query ("SELECT * FROM tb_socios_alunos WHERE id_aluno_parceiro = '$id_aluno_parceiro'");
$linhas2 = mysql_num_rows ($resultado2);
for($i2=0; $i2<$linhas2; $i2++)
{

$id_aluno_parceiro = mysql_result ($resultado2, $i2, "id_aluno_parceiro");
$nome_completo2 = mysql_result ($resultado2, $i2, "nome_completo");
$id_parceiro = mysql_result ($resultado2, $i2, "id_parceiro");
$cpf = mysql_result ($resultado2, $i2, "cpf");
$data_nasc = mysql_result ($resultado2, $i2, "data_nasc");

				  $data_quebrada1 = explode('-', $data_nasc);
				  $data_nascimento = $data_quebrada1[2].'/'.$data_quebrada1[1].'/'.$data_quebrada1[0];

$tipo_curso = mysql_result ($resultado2, $i2, "tipo_curso");
$data_cadastro = mysql_result ($resultado2, $i2, "data_cadastro");

				  $data_quebrada2 = explode('-', $data_nasc);
				  $data_cadastro2 = $data_quebrada2[2].'/'.$data_quebrada2[1].'/'.$data_quebrada2[0];

$registro_ativo = mysql_result ($resultado2, $i2, "registro_ativo");
$documentos = mysql_result ($resultado2, $i2, "documentos");
$pagamentos = mysql_result ($resultado2, $i2, "pagamentos");
$historico = mysql_result ($resultado2, $i2, "historico");
$publicacao = mysql_result ($resultado2, $i2, "publicacao");
$certificado = mysql_result ($resultado2, $i2, "certificado");
$escola = mysql_result ($resultado2, $i2, "escola");
$observacao = mysql_result ($resultado2, $i2, "observacao");

}

$resultado= mysql_query ("SELECT * FROM tb_socios WHERE id_parceiro = '$id_parceiro'");
$linhas = mysql_num_rows ($resultado);
for($i=0; $i<$linhas; $i++)
{
$nome_completo = mysql_result ($resultado, $i, "nome_completo");
}

?>

   

<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #011496;
}


.fonte_00001 {
color: #011496;
font-size:10px


}



-->
</style>
<link href="css_principal.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style4 {color: #000099}
.style3 {color: #000099; font-weight: bold; }
-->
</style>





<link href="financeiro/estilo_sistema.css" rel="stylesheet" type="text/css">
  <style type="text/css">
<!--
a:link {
	color: #009900;
	text-decoration: none;
}
a:visited {
	color: #009900;
	text-decoration: none;
}
a:active {
	color: #009900;
	text-decoration: none;
}
a:hover {
	color: #990000;
	text-decoration: underline;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	background-color: #FFFFFF;
}
.style1 {color: #000099}
.style3 {color: #000099; font-weight: bold; }
.style5 {color: #FFFFFF}
-->


  </style>

                <tr>
                  <td height="116" align="center"><table width="688" height="19" border="0" cellpadding="0" cellspacing="2" bgcolor="#00CC00" onMouseOver="this.className='fundo';" onMouseOut="this.className='NULL';">
                    <tr>
                      <td align="center" class="style5 fonte03"><strong>DETALHAMENTO DO ALUNO <br>
                      Este aluno pertence a <?PHP echo "$nome_completo" ?> </strong></td>
                </tr>
                    </table>
            <table width="685" height="305" border="0" cellpadding="0" cellspacing="4">
              <tr>
                <td width="148" align="right" bgcolor="#F0FFF0" class="fonte_00001">Nome Completo: </td>
                <td width="525" bgcolor="#F0FFF0" class="login001"><? echo "$nome_completo2" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#E6FFE6" class="fonte_00001">CPF:</td>
                <td bgcolor="#E6FFE6" class="login001"><? echo "$cpf" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#F0FFF0" class="fonte_00001">Data de Nascimento: </td>
                <td bgcolor="#F0FFF0" class="login001"><? echo "$data_nascimento" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#E6FFE6" class="fonte_00001">Curso:</td>
                <td bgcolor="#E6FFE6" class="login001"><? echo "$tipo_curso" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#F0FFF0" class="fonte_00001">Data de Cadastro: </td>
                <td bgcolor="#F0FFF0" class="login001"><? echo "$data_cadastro2" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#E6FFE6" class="fonte_00001">Documentos:</td>
                <td bgcolor="#E6FFE6" class="login001"><? echo "$documentos" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#F0FFF0" class="fonte_00001">Pagamento:</td>
                <td bgcolor="#F0FFF0" class="login001"><? echo "$pagamentos" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#E6FFE6" class="fonte_00001">Hist&oacute;rico:</td>
                <td bgcolor="#E6FFE6" class="login001"><? echo "$historico" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#F0FFF0" class="fonte_00001">Publica&ccedil;&atilde;o:</td>
                <td bgcolor="#F0FFF0" class="login001"><? echo "$publicacao" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#E6FFE6" class="fonte_00001">Certificado:</td>
                <td bgcolor="#E6FFE6" class="login001"><? echo "$certificado" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#F0FFF0" class="fonte_00001">Escola:</td>
                <td bgcolor="#F0FFF0" class="login001"><? echo "$escola" ?></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#E6FFE6" class="fonte_00001">Obsrva&ccedil;&atilde;o:</td>
                <td bgcolor="#E6FFE6" class="login001"><? echo "$observacao" ?></td>
              </tr>
              </table>          
            <p>&nbsp;</p>            </td>
        </tr>
                <tr>
                  <td align="center">&nbsp;</td>
        </tr>
             