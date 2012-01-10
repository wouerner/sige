<?php

include "../conexao_bd.php";
$cod_boleto  = $HTTP_GET_VARS['cod_boleto'];
$id_cob  = $HTTP_GET_VARS['id_cob'];


$resultado2 = mysql_query("SELECT * FROM tb_boletos_itau WHERE cod_boleto = '$cod_boleto'");
$linhas = mysql_num_rows ($resultado2);

for($i=0; $i<$linhas; $i++)
{
$id_boleto = mysql_result ($resultado2, $i, "id_boleto");
$sacado = mysql_result ($resultado2, $i, "sacado");
$email = mysql_result ($resultado2, $i, "email");
$lagradouro = mysql_result ($resultado2, $i, "lagradouro");
$numero_casa = mysql_result ($resultado2, $i, "numero_casa");
$bairro = mysql_result ($resultado2, $i, "bairro");
$cidade = mysql_result ($resultado2, $i, "cidade");
$estado  = mysql_result ($resultado2, $i, "estado_uf");
$cep = mysql_result ($resultado2, $i, "cep");

$cpf_cnpj = mysql_result ($resultado2, $i, "cpf");
$valor = mysql_result ($resultado2, $i, "Valor");
$vencimento2 = mysql_result ($resultado2, $i, "data_vencimento");

$data_quebrada = explode('-', $vencimento2);
$vencimento = $data_quebrada[2].'/'.$data_quebrada[1].'/'.$data_quebrada[0];



$data = mysql_result ($resultado2, $i, "data_emissao");
$nossonumero = mysql_result ($resultado2, $i, "nosso_mumero");
}




//resgata dados da Histórico Financeiro itaú
$resultado4 = mysql_query("SELECT * FROM tb_historico_financeiro WHERE id_boleto = '$id_boleto'");
$linhas4 = mysql_num_rows ($resultado4);
$categoria = mysql_result ($resultado4, $i4, "categoria");
$numero_parcelas = mysql_result ($resultado4, $i4, "numero_parcelas");
$parcela_numero = mysql_result ($resultado4, $i4, "parcela_numero");
$observacao = mysql_result ($resultado4, $i4, "observacao");



			  

// INÍCIO DA ÁREA DE CONFIGURAÇÃO

    $codigobanco = '341'; // O Itau sempre será este número
    $agencia = '3164'; // 4 posições
    $conta = '37306';  // 5 posições sem dígito
    $carteira = '158'; // A sem registro é 175 para o Itaú
    $moeda = '9'; // Sempre será 9 pois deve ser em Real
    
	
	
    
	
		
	


// NOS CAMPOS ABAIXO, PREENCHER EM MAIÚSCULAS E DESPREZAR ACENTUAÇÃO, CEDILHAS E
// CARACTERES ESPECIAIS (REGRAS DO BANCO)

     $cedente = 'CENTRO EDUCACIONAL BANDEIRANTES - CEBAN';

 
	$instrucoes1 = 'ENTRAR EM CONTATO APÓS O PAGAMENTO';
	$instrucoes2 = 'cursos@supletivoceban.com.br';
	$instrucoes3 = "Referente a $categoria $parcela_numero/$numero_parcelas";
	$instrucoes4 = "$observacao";
	$instrucoes5 = '';












    function Modulo11($valor) {

            $multiplicador = '4329876543298765432987654329876543298765432';

            for ($i = 0; $i<=42; $i++ ) {

                 $parcial = $valor[$i] * $multiplicador[$i];

                         $total += $parcial;

            }

            $resultado = 11-($total%11);

            if (($resultado >= 10)||($resultado == 0)) {

                 $resultado = 1;

            }



            return $resultado;

    }





    function calculaDAC ($CalculaDAC) {

            $tamanho = strlen($CalculaDAC);

//            $total = 0;

            for ($i = $tamanho-1; $i>=0; $i--) {

                if ($multiplicador !== 2) {

                    $multiplicador = 2;

                }

                else {

                    $multiplicador = 1;

                }

                $parcial = strval($CalculaDAC[$i] * $multiplicador);



                if ($parcial >= 10) {

                    $parcial = $parcial[0] + $parcial[1];

                }

                $total += $parcial;

            }

            $total = 10-($total%10);

            if ($total >= 10) {

                    $total = 0;

            }

            return $total;

    }



    function calculaValor ($valor) {

            $valor = str_replace('.','',$valor);

            return str_repeat('0',(10-strlen($valor))).$valor;

    }



    function calculaNossoNumero ($valor) {

            return str_repeat('0',(8-strlen($valor))).$valor;

    }



    function calculaFatorVencimento ($dia,$mes,$ano) {

             $vencimento = mktime(0,0,0,$mes,$dia,$ano)-mktime(0,0,0,7,3,2000);

             return ceil(($vencimento/86400)+1000);
    }

// CALCULO DO CODIGO DE BARRAS (SEM O DAC VERIFICADOR)

    $codigo_barras = $codigobanco.$moeda.calculaFatorVencimento(substr($vencimento,0,2),substr($vencimento,3,2),substr($vencimento,6,4));

 //     print $codigo_barras;
 // exit;

    $codigo_barras .= calculaValor($valor).$carteira.calculaNossoNumero($nossonumero).calculaDAC($agencia.$conta.$carteira.calculaNossoNumero($nossonumero)).$agencia.$conta.calculaDAC($agencia.$conta).'000';







// CALCULO DA LINHA DIGITÁVEL

    $parte1 = $codigobanco.$moeda.substr($carteira,0,1).substr($carteira,1,2).substr(calculaNossoNumero($nossonumero),0,2);

    $parte1 = substr($parte1,0,5).'.'.substr($parte1,5,4).calculaDAC($parte1);



    $parte2 = substr(calculaNossoNumero($nossonumero),2,5).substr(calculaNossoNumero($nossonumero),7,1).calculaDAC($agencia.$conta.$carteira.calculaNossoNumero($nossonumero)).substr($agencia,0,3);

    $parte2 = substr($parte2,0,5).'.'.substr($parte2,5,5).calculaDAC($parte2);



    $parte3 = substr($agencia,3,1).$conta.calculaDAC($agencia.$conta).'000';

    $parte3 = substr($parte3,0,5).'.'.substr($parte3,5,8).calculaDAC($parte3);



    $parte5 = calculaFatorVencimento(substr($vencimento,0,2),substr($vencimento,3,2),substr($vencimento,6,4)).calculaValor($valor);



    $numero_boleto = $parte1.' '.$parte2.' '.$parte3.' '.Modulo11($codigo_barras).' '.$parte5;



// INSERÇÃO DO DAC NO CODIGO DE BARRAS



   $codigo_barras = substr($codigo_barras,0,4).Modulo11($codigo_barras).substr($codigo_barras,4,43);

//   print Modulo11($codigo_barras);

//   exit;



// IMPRESSÃO DOS RESULTADOS OBTIDOS



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Boleto Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style3 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style7 {font-size: 9px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}
-->
</style>
</head>

<body>


<table width="700"  border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" rowspan="2" valign="bottom"><img src="img/logo-itau.gif" width="124" height="43"><img src="img/codigobanco-itau.gif" width="86" height="43"></td>
        <td width="45%" valign="bottom"><div align="right"><img src="../../imagens/Logo_Cerbam.jpg" width="200" height="54"></div></td>
      </tr>
      <tr>
        <td valign="bottom"><div align="right"><span class="style1">Recibo do Sacado</span></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" height="315"  border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr bgcolor="#FFFFFF">
        <td colspan="3" valign="bottom" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="2"><img src="img/fundo-localpag.gif" width="210" height="17"></td>
            </tr>
            <tr>
              <td width="6">&nbsp;</td>
              <td width="438" class="style3">AT&Eacute; O VENCIMENTO, PREFERENCIALMENTE NO ITAU<br>
            APOS O VENCIMENTO, SOMENTE NO ITAU</td>
            </tr>
        </table></td>
        <td width="250" valign="top" bgcolor="#FFFFFF"><div align="center" class="style1">
            <div align="right">
              <table width="100%"  border="0" cellpadding="1" cellspacing="0">
                <tr>
                  <td colspan="2"><div align="left"><img src="img/fundo-vencimento.gif" width="150" height="17"></div></td>
                </tr>
                <tr>
                  <td width="96%"><div align="right"><span class="style3"><? print $vencimento; ?></span></div></td>
                  <td width="4%">&nbsp;</td>
                </tr>
              </table>
            </div>
        </div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td colspan="3" valign="bottom" class="style3"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="2"><img src="img/fundo-cedente.gif" width="210" height="17"></td>
            </tr>
            <tr>
              <td width="6">&nbsp;</td>
              <td width="438" class="style3"><? print $cedente; ?></td>
            </tr>
        </table></td>
        <td width="250" valign="bottom" class="style3"><div align="right">
            <table width="100%"  border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td colspan="2"><div align="left"><img src="img/fundo-agencia.gif" width="150" height="17"></div></td>
              </tr>
              <tr>
                <td width="96%"><div align="right" class="style3"><? print $agencia; ?>/<? print $conta; ?>-<? print calculaDAC($agencia.$conta); ?></div></td>
                <td width="4%">&nbsp;</td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="150" height="32" valign="top" class="style3"><div align="center">
            <table width="100%"  border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td><div align="left"><img src="img/fundo-data.gif" width="103" height="17"></div></td>
              </tr>
              <tr>
                <td>
                  <div align="center" class="style3"><? print $data; ?></div></td>
              </tr>
            </table>
        </div></td>
        <td width="150" valign="top" class="style3"><div align="center">
            <table width="100%"  border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td><div align="left"><img src="img/fundo-especiedoc.gif" width="103" height="17"></div></td>
              </tr>
              <tr>
                <td><div align="center" class="style3">DM</div></td>
              </tr>
            </table>
        </div></td>
        <td width="150" height="32" valign="top" class="style3"><div align="center">
            <table width="100%"  border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td><div align="left"><img src="img/fundo-aceite.gif" width="103" height="17"></div></td>
              </tr>
              <tr>
                <td><div align="center" class="style3">N</div></td>
              </tr>
            </table>
        </div></td>
        <td width="250" height="28" valign="bottom" class="style3"><div align="right">
            <table width="100%"  border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td colspan="2"><div align="left"><img src="img/fundo-nossonum.gif" width="150" height="17"></div></td>
              </tr>
              <tr>
                <td width="96%"><div align="right" class="style3"><? print $carteira; ?>/<? print calculaNossoNumero($nossonumero); ?>-<? print calculaDAC($agencia.$conta.$carteira.calculaNossoNumero($nossonumero)); ?></div></td>
                <td width="4%">&nbsp;</td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="150" height="32" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td><div align="left"><img src="img/fundo-usobanco.gif" width="103" height="17"></div></td>
            </tr>
            <tr>
              <td>
                <div align="center"></div></td>
            </tr>
        </table></td>
        <td width="150" height="32" valign="top" bgcolor="#FFFFFF" class="style3"><div align="center">
            <table width="100%"  border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td><div align="left"><img src="img/fundo-carteira.gif" width="103" height="17"></div></td>
              </tr>
              <tr>
                <td>
                  <div align="center" class="style3">158</div></td>
              </tr>
            </table>
        </div></td>
        <td width="150" height="32" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td><div align="left"><img src="img/fundo-especie.gif" width="103" height="17"></div></td>
            </tr>
            <tr>
              <td>
                <div align="center" class="style3">R$</div></td>
            </tr>
        </table></td>
        <td width="250" height="28" valign="bottom" bgcolor="#FFFFFF" class="style3"><div align="right" class="style1">
            <table width="100%"  border="0" cellpadding="1" cellspacing="0">
              <tr>
                <td colspan="2"><div align="left"><img src="img/fundo-valor.gif" width="150" height="17"></div></td>
              </tr>
              <tr>
                <td width="96%"><div align="right" class="style3"><? print str_replace('.',',',$valor); ?></div></td>
                <td width="4%">&nbsp;</td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="90" colspan="3" rowspan="3" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="2"><img src="img/fundo-instrucoes.gif" width="437" height="17"></td>
            </tr>
            <tr>
              <td width="6">&nbsp;</td>
              <td width="438"><span class="style3"><span class="style7"><? print $instrucoes1; ?><br>
                      <? print $instrucoes2; ?><br>
                      <? print $instrucoes3; ?><br>
                      <? print $instrucoes4; ?><br>
                      <? print $instrucoes5; ?></span></span></td>
            </tr>
        </table></td>
        <td width="250" height="28" valign="bottom" class="style3"><table width="100%"  border="0" cellpadding="1" cellspacing="0">
            <tr>
              <td colspan="2"><div align="left"><img src="img/fundo-desconto.gif" width="150" height="17"></div></td>
            </tr>
            <tr>
              <td width="96%"><div align="right"></div></td>
              <td width="4%">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="250" height="28" valign="bottom" class="style3"><table width="100%"  border="0" cellpadding="1" cellspacing="0">
            <tr>
              <td colspan="2"><div align="left"><img src="img/fundo-multa.gif" width="150" height="17"></div></td>
            </tr>
            <tr>
              <td width="96%"><div align="right"></div></td>
              <td width="4%">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="250" height="28" valign="bottom" class="style3"><table width="100%"  border="0" cellpadding="1" cellspacing="0">
            <tr>
              <td colspan="2"><div align="left"><img src="img/fundo-valorcobrado.gif" width="150" height="17"></div></td>
            </tr>
            <tr>
              <td width="96%"><div align="right"></div></td>
              <td width="4%">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td colspan="4" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="3"><img src="img/fundo-sacado.gif" width="104" height="17"></td>
            </tr>
            <tr>
              <td width="10">&nbsp;</td>
              <td width="434"><span class="style3"><? print $sacado; ?><br>
                    <? print $lagradouro; ?>, <? print $numero_casa; ?>, <? print $bairro; ?><br>
                <? print $cep; ?> <? print $cidade; ?>-<? print $estado; ?></span></td>
              <td width="250"><span class="style3">CPF: <? print $cpf_cnpj; ?></span></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="right"><img src="img/fundo-autenticacao.gif" width="134" height="18"></div></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" bgcolor="#FFFFFF"><img src="img/linha-corte.gif" width="700" height="1"></td>
  </tr>
</table>
<table width="700"  border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td colspan="2" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2" rowspan="2"><img src="img/logo-itau.gif" width="124" height="43"><img src="img/codigobanco-itau.gif" width="86" height="43"></td>
          <td width="72%" valign="bottom"><div align="right"></div></td>
        </tr>
        <tr>
          <td valign="bottom"><div align="right"><span class="style1"><? print $numero_boleto; ?></span></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF"><table width="100%"  border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td valign="top" bgcolor="#FFFFFF">          <table width="100%" height="315"  border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr bgcolor="#FFFFFF">
            <td colspan="3" valign="bottom" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td colspan="2"><img src="img/fundo-localpag.gif" width="210" height="17"></td>
                </tr>
                <tr>
                  <td width="6">&nbsp;</td>
                  <td width="438" class="style3">AT&Eacute; O VENCIMENTO, PREFERENCIALMENTE NO ITAU<br>
            APOS O VENCIMENTO, SOMENTE NO ITAU</td>
                </tr>
            </table></td>
            <td width="250" valign="top" bgcolor="#FFFFFF"><div align="center" class="style1">
                <div align="right">
                  <table width="100%"  border="0" cellpadding="1" cellspacing="0">
                    <tr>
                      <td colspan="2"><div align="left"><img src="img/fundo-vencimento.gif" width="150" height="17"></div></td>
                    </tr>
                    <tr>
                      <td width="96%"><div align="right"><span class="style3"><? print $vencimento; ?></span></div></td>
                      <td width="4%">&nbsp;</td>
                    </tr>
                  </table>
                </div>
            </div></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td colspan="3" valign="bottom" class="style3"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td colspan="2"><img src="img/fundo-cedente.gif" width="210" height="17"></td>
                </tr>
                <tr>
                  <td width="6">&nbsp;</td>
                  <td width="438" class="style3"><? print $cedente; ?></td>
                </tr>
            </table></td>
            <td width="250" valign="bottom" class="style3"><div align="right">
                <table width="100%"  border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td colspan="2"><div align="left"><img src="img/fundo-agencia.gif" width="150" height="17"></div></td>
                  </tr>
                  <tr>
                    <td width="96%"><div align="right" class="style3"><? print $agencia; ?>/<? print $conta; ?>-<? print calculaDAC($agencia.$conta); ?></div></td>
                    <td width="4%">&nbsp;</td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="150" height="32" valign="top" class="style3"><div align="center">
                <table width="100%"  border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td><div align="left"><img src="img/fundo-data.gif" width="103" height="17"></div></td>
                  </tr>
                  <tr>
                    <td>
                      <div align="center" class="style3"><? print $data; ?></div></td>
                  </tr>
                </table>
            </div></td>
            <td width="150" valign="top" class="style3"><div align="center">
                <table width="100%"  border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td><div align="left"><img src="img/fundo-especiedoc.gif" width="103" height="17"></div></td>
                  </tr>
                  <tr>
                    <td><div align="center" class="style3">DM</div></td>
                  </tr>
                </table>
            </div></td>
            <td width="150" height="32" valign="top" class="style3"><div align="center">
                <table width="100%"  border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td><div align="left"><img src="img/fundo-aceite.gif" width="103" height="17"></div></td>
                  </tr>
                  <tr>
                    <td><div align="center" class="style3">N</div></td>
                  </tr>
                </table>
            </div></td>
            <td width="250" height="28" valign="bottom" class="style3"><div align="right">
                <table width="100%"  border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td colspan="2"><div align="left"><img src="img/fundo-nossonum.gif" width="150" height="17"></div></td>
                  </tr>
                  <tr>
                    <td width="96%"><div align="right" class="style3"><? print $carteira; ?>/<? print calculaNossoNumero($nossonumero); ?>-<? print calculaDAC($agencia.$conta.$carteira.calculaNossoNumero($nossonumero)); ?></div></td>
                    <td width="4%">&nbsp;</td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="150" height="32" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td><div align="left"><img src="img/fundo-usobanco.gif" width="103" height="17"></div></td>
                </tr>
                <tr>
                  <td>
                    <div align="center"></div></td>
                </tr>
            </table></td>
            <td width="150" height="32" valign="top" bgcolor="#FFFFFF" class="style3"><div align="center">
                <table width="100%"  border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td><div align="left"><img src="img/fundo-carteira.gif" width="103" height="17"></div></td>
                  </tr>
                  <tr>
                    <td>
                      <div align="center" class="style3">158</div></td>
                  </tr>
                </table>
            </div></td>
            <td width="150" height="32" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td><div align="left"><img src="img/fundo-especie.gif" width="103" height="17"></div></td>
                </tr>
                <tr>
                  <td>
                    <div align="center" class="style3">R$</div></td>
                </tr>
            </table></td>
            <td width="250" height="28" valign="bottom" bgcolor="#FFFFFF" class="style3"><div align="right" class="style1">
                <table width="100%"  border="0" cellpadding="1" cellspacing="0">
                  <tr>
                    <td colspan="2"><div align="left"><img src="img/fundo-valor.gif" width="150" height="17"></div></td>
                  </tr>
                  <tr>
                    <td width="96%"><div align="right" class="style3"><? print str_replace('.',',',$valor); ?></div></td>
                    <td width="4%">&nbsp;</td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="90" colspan="3" rowspan="3" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td colspan="2"><img src="img/fundo-instrucoes.gif" width="437" height="17"></td>
                </tr>
                <tr>
                  <td width="6">&nbsp;</td>
                  <td width="438"><span class="style3"><span class="style7"><? print $instrucoes1; ?><br>
                          <? print $instrucoes2; ?><br>
                          <? print $instrucoes3; ?><br>
                          <? print $instrucoes4; ?><br>
                          <? print $instrucoes5; ?></span></span></td>
                </tr>
            </table></td>
            <td width="250" height="28" valign="bottom" class="style3"><table width="100%"  border="0" cellpadding="1" cellspacing="0">
                <tr>
                  <td colspan="2"><div align="left"><img src="img/fundo-desconto.gif" width="150" height="17"></div></td>
                </tr>
                <tr>
                  <td width="96%"><div align="right"></div></td>
                  <td width="4%">&nbsp;</td>
                </tr>
            </table></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="250" height="28" valign="bottom" class="style3"><table width="100%"  border="0" cellpadding="1" cellspacing="0">
                <tr>
                  <td colspan="2"><div align="left"><img src="img/fundo-multa.gif" width="150" height="17"></div></td>
                </tr>
                <tr>
                  <td width="96%"><div align="right"></div></td>
                  <td width="4%">&nbsp;</td>
                </tr>
            </table></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="250" height="28" valign="bottom" class="style3"><table width="100%"  border="0" cellpadding="1" cellspacing="0">
                <tr>
                  <td colspan="2"><div align="left"><img src="img/fundo-valorcobrado.gif" width="150" height="17"></div></td>
                </tr>
                <tr>
                  <td width="96%"><div align="right"></div></td>
                  <td width="4%">&nbsp;</td>
                </tr>
            </table></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td colspan="4" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td colspan="3"><img src="img/fundo-sacado.gif" width="104" height="17"></td>
                </tr>
                <tr>
                  <td width="10">&nbsp;</td>
                  <td width="428"><span class="style3"><? print $sacado; ?><br>
                      <? print $lagradouro; ?>, <? print $numero_casa; ?>, <? print $bairro; ?><br>
                      <? print $cep; ?> <? print $cidade; ?>-<? print $estado; ?></span></td>
                  <td width="250"><span class="style3">CPF: <? print $cpf_cnpj; ?></span></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="425" bgcolor="#FFFFFF"><img src="codigodebarra.php?valor=<? print $codigo_barras; ?>"></td>
    <td width="315" valign="top" bgcolor="#FFFFFF"><div align="right"><img src="img/fundo-autenticacao2.gif" width="274" height="17"></div></td>
  </tr>
</table>
<table width="698" height="70" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="214" align="right"><p><a target="_self" href="javaScript:window.print()"><img src="../../imagens/ico_impressora.gif" width="23" height="23" border="0" style='border: 0px; padding: 1px'></a></p></td>
    <td width="214" align="left" class="style3"><a target="_self" href="javaScript:window.print()">Imprimir</a></td>
    <td width="77" align="right" class="style3"><img src="../imagens/enviar.jpg" width="48" height="48"></td>
    <td width="193" align="left" class="style3"><a href="Enviar_boleto_email.php?cod_boleto=<?php echo $cod_boleto ?>&id_aluno=<?php echo $id_aluno ?>&id_cob=<?php echo $id_cob ?>">Enviar por e-mail</a></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>