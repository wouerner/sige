<?php
require_once("fpdf/fpdf.php");
$pdf= new FPDF("P","pt","A4");
$pdf->AddPage();
 
$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Relatório",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(50);
 
 
 

include "conexao_bd.php";

$SQL2 = "SELECT * FROM tb_alunos"; 
$query2 = mysql_query($SQL2);  
 

 
//cabeçalho da tabela 
$pdf->SetFont('arial','B',14);
$pdf->Cell(130,20,'Nome Completo',1,0,"L");
$pdf->Cell(140,20,'Coluna 2',1,0,"L");
$pdf->Cell(130,20,'Coluna 3',1,0,"L");
$pdf->Cell(160,20,'Coluna 4',1,1,"L");
 
//linhas da tabela
$pdf->SetFont('arial','',12);




while($x2 = mysql_fetch_array($query2))  
{

    $pdf->Cell(130,20,"$x2[nome_completo]",1,0,"L");
    $pdf->Cell(140,20,"Rodrigo Soares2",1,0,"L");
    $pdf->Cell(130,20,"Rodrigo Soares3",1,0,"L");
    $pdf->Cell(160,20,"Rodrigo Soares4",1,1,"L");

}


$pdf->Output("arquivo.pdf","I");

?>