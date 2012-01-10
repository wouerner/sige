<?php include "validacao_pagina_adm.php"; ?>
<?
/*****************************************************************/
/*  Script desenvolvido por Rafael G. Martins
/*
/*  Data: 11/08/2007
/*
/*  Versão: 1.0
/*
/*  Funçao: Recebe uma variavel "file" de um formulario, confere
/*          se o arquivo está no formato JPEG e salva uma
/*          miniatura no local indicado
/*
/*  Caso hajam erros envie email para: rafael@rafaelmartins.com
/*****************************************************************/

/*
  Função uploadJPEG
  
  Entrada: $file: Variavel de formulario
                  (Ex: $_FILES[nome_do_campo_file])
           $path: Path para salvar a miniatura.
                  (Ex: "imagens/foto.jpg")
                  Obs: De CHMOD 777 na pasta que receberá os arquivos
           $maxdim: Dimensão Maxima em pixels, relativa à altura
                     ou largura, o que for maior
                     200 por default
           $maxsize: Tamanho máximo do arquivo original em bytes
                     3072000 por default
  Retorno: formato INT:
           Valores:
             1: se upload bem sucedido.
             2: se o arquivo não foi recebido
             3: se o arquivo nao for do tipo JPEG
             4: se o tamanho do arquivo é maior que o tamanho permitido
             5: se ocorrer algum erro durante o redimensionamento
*/

function uploadJPEG($file,$path,$maxdim=354,$maxsize=3072000){
  if(is_uploaded_file($file[tmp_name])){
    $mime = $file[type];
    if(($mime == "image/jpeg")||($mime == "image/pjpeg")){
      if($file[size] < $maxsize){
        list($larg_orig, $alt_orig) = @getimagesize($file[tmp_name]);
        $razao_orig = $larg_orig/$alt_orig;
        if($razao_orig < 1){
          $larg = $maxdim*$razao_orig;
          $alt = $maxdim;
        }
        else{
          $alt = $maxdim/$razao_orig;
          $larg = $maxdim;
        }
        $imagem_nova = imagecreatetruecolor($larg, $alt);
        $imagem = @imagecreatefromjpeg($file[tmp_name]);
        @imagecopyresampled($imagem_nova, $imagem, 0, 0, 0, 0, $larg, $alt, $larg_orig, $alt_orig);
	    return (@imagejpeg($imagem_nova, $path)) ? 1 : 5;
      }
      return 4;
    }
    return 3;
  }
  return 2;
}
?>
