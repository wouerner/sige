<?php

/* Geração de código de barras padrão p/ boletos bancários brasileiros.

Autor: MARCOLINO, Alexandre de Jesus ( marcolino@facil.com )

Este código pode ser usado e copiado livremente desde que site e comunique o autor por email.

Testado sob o Internet Explorer 6 e o Netscape 7.

*/

montacodigodebarras($_REQUEST['valor']);

function montacodigodebarras($valor) {
  $lw = 1 ; $hi = 50;
/* Tabela de código de barras Padrão Brasileiro para boletos bancários

  Barra valor 00 =0000111100
  Barra valor 01 =0100101001
  Barra valor 02 =0001101001
  Barra valor 03 =0101101000
  Barra valor 04 =0000111001
  Barra valor 05 =0100111000
  Barra valor 06 =0001111000
  Barra valor 07 =0000101101
  Barra valor 08 =0100101100
  Barra valor 09 =0001101100
  Barra valor 10 =1000010110
  Barra valor 11 =1100000011
  Barra valor 12 =1001000011
  Barra valor 13 =1101000010
  Barra valor 14 =1000010011
  Barra valor 15 =1100010010
  Barra valor 16 =1001010010
  Barra valor 17 =1000000111
  Barra valor 18 =1100000110
  Barra valor 19 =1001000110
  Barra valor 20 =0010010110
  Barra valor 21 =0110000011
  Barra valor 22 =0011000011
  Barra valor 23 =0111000010
  Barra valor 24 =0010010011
  Barra valor 25 =0110010010
  Barra valor 26 =0011010010
  Barra valor 27 =0010000111
  Barra valor 28 =0110000110
  Barra valor 29 =0011000110
  Barra valor 30 =1010010100
  Barra valor 31 =1110000001
  Barra valor 32 =1011000001
  Barra valor 33 =1111000000
  Barra valor 34 =1010010001
  Barra valor 35 =1110010000
  Barra valor 36 =1011010000
  Barra valor 37 =1010000101
  Barra valor 38 =1110000100
  Barra valor 39 =1011000100
  Barra valor 40 =0000110110
  Barra valor 41 =0100100011
  Barra valor 42 =0001100011
  Barra valor 43 =0101100010
  Barra valor 44 =0000110011
  Barra valor 45 =0100110010
  Barra valor 46 =0001110010
  Barra valor 47 =0000100111
  Barra valor 48 =0100100110
  Barra valor 49 =0001100110
  Barra valor 50 =1000110100
  Barra valor 51 =1100100001
  Barra valor 52 =1001100001
  Barra valor 53 =1101100000
  Barra valor 54 =1000110001
  Barra valor 55 =1100110000
  Barra valor 56 =1001110000
  Barra valor 57 =1000100101
  Barra valor 58 =1100100100
  Barra valor 59 =1001100100
  Barra valor 60 =0010110100
  Barra valor 61 =0110100001
  Barra valor 62 =0011100001
  Barra valor 63 =0111100000
  Barra valor 64 =0010110001
  Barra valor 65 =0110110000
  Barra valor 66 =0011110000
  Barra valor 67 =0010100101
  Barra valor 68 =0110100100
  Barra valor 69 =0011100100
  Barra valor 70 =0000011110
  Barra valor 71 =0100001011
  Barra valor 72 =0001001011
  Barra valor 73 =0101001010
  Barra valor 74 =0000011011
  Barra valor 75 =0100011010
  Barra valor 76 =0001011010
  Barra valor 77 =0000001111
  Barra valor 78 =0100001110
  Barra valor 79 =0001001110
  Barra valor 80 =1000011100
  Barra valor 81 =1100001001
  Barra valor 82 =1001001001
  Barra valor 83 =1101001000
  Barra valor 84 =1000011001
  Barra valor 85 =1100011000
  Barra valor 86 =1001011000
  Barra valor 87 =1000001101
  Barra valor 88 =1100001100
  Barra valor 89 =1001001100
  Barra valor 90 =0010011100
  Barra valor 91 =0110001001
  Barra valor 92 =0011001001
  Barra valor 93 =0111001000
  Barra valor 94 =0010011001
  Barra valor 95 =0110011000
  Barra valor 96 =0011011000
  Barra valor 97 =0010001101
  Barra valor 98 =0110001100
  Barra valor 99 =0011001100
*/

/* A lógica abaixo aplica a tabela acima para dentro da variável tabcodbarra{} */

  $tabcodbarra[0] = "00110" ;
  $tabcodbarra[1] = "10001" ;
  $tabcodbarra[2] = "01001" ;
  $tabcodbarra[3] = "11000" ;
  $tabcodbarra[4] = "00101" ;
  $tabcodbarra[5] = "10100" ;
  $tabcodbarra[6] = "01100" ;
  $tabcodbarra[7] = "00011" ;
  $tabcodbarra[8] = "10010" ;
  $tabcodbarra[9] = "01010" ;
  for($f1=9;$f1>=0;$f1--){
    for($f2=9;$f2>=0;$f2--){
      $f = ($f1 * 10) + $f2 ;
      $texto = "" ;
      for($i=1;$i<6;$i++){
        $texto .=  substr($tabcodbarra[$f1],($i-1),1) . substr($tabcodbarra[$f2],($i-1),1);
      }
      $tabcodbarra[$f] = $texto;
   }
  }


/* Gerando a Imagen do Código de Barras */

/* Gera a base para o preenchimento do código.
$img    -> imagem do código
$branco -> cor branca
$preto  -> cor preta ( ou afrobrasileira, sem preconceito nenhum pô )
*/
//      $img = ImageCreate($lw*95+1000,$hi+30);
      $img = ImageCreate($lw*95+330,$hi+30);
      $preto  = ImageColorAllocate($img, 0, 0, 0);
      $branco = ImageColorAllocate($img, 255, 255, 255);

/* Cria o retángulo principal onde a imagem será aplicada. */

      ImageFilledRectangle($img, 0, 0, $lw*95+1000, $hi+30, $branco);

# Abertura do código de barras.
      ImageFilledRectangle($img, 1,5,1,65,$preto);
      ImageFilledRectangle($img, 2,5,2,65,$branco);
      ImageFilledRectangle($img, 3,5,3,65,$preto);
      ImageFilledRectangle($img, 4,5,4,65,$branco);

# Aqui começa a varredura no valor enviado para confecção do código de barras.

$fino = 1 ;
$largo = 2.72 ; // Para o windows funciona mas o tamanho ideal seria 3
$pos   = 5 ;
$texto = $valor ;
if((strlen($texto) % 2) <> 0){
	$texto = "0" . $texto;
}

// Draw dos dados
while (strlen($texto) > 0) {
  $i = round(esquerda($texto,2));
  $texto = direita($texto,strlen($texto)-2);

  $f = $tabcodbarra[$i];

  for($i=1;$i<11;$i+=2){
    if (substr($f,($i-1),1) == "0") {
      $f1 = $fino ;
    }else{
      $f1 = $largo ;
    }

/* Imprimindo uma barra preta */
  ImageFilledRectangle($img, $pos,5,$pos-1+$f1,65,$preto)  ;
  $pos = $pos + $f1 ;
/* Fim da impressão da barra preta */

  if (substr($f,$i,1) == "0") {
      $f2 = $fino ;
    }else{
      $f2 = $largo ;
    }

/* Imprimindo uma barra branca */
  ImageFilledRectangle($img, $pos,5,$pos-1+$f2,65,$branco)  ;
  $pos = $pos + $f2 ;
/* Fim da impressão da barra branca */

  }
}

# Fechamento do código de barras.

ImageFilledRectangle($img, $pos,5,$pos-1+$largo,65,$preto);
$pos=$pos+$largo;

ImageFilledRectangle($img, $pos,5,$pos-1+$fino,65,$branco);
$pos=$pos+$fino;


ImageFilledRectangle($img, $pos,5,$pos-1+$fino,65,$preto);
$pos=$pos+$fino;


/* MANDA A IMAGEM PRO BROWSER */
      header("Content-Type: image/png");
      ImagePNG($img);
}
//montacodigodebarras('23794225800000041933394060092001280100001020');

//$valorpassado = $_SERVER['QUERY_STRING'] ;
//montacodigodebarras('23791227400000041933394060092001280200001020');

montacodigodebarras($_SERVER['QUERY_STRING']) ;

function esquerda($entra,$comp){
	return substr($entra,0,$comp);
}

function direita($entra,$comp){
	return substr($entra,strlen($entra)-$comp,$comp);
}

?>