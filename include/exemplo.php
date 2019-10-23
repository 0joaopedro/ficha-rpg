<?php
   require("fpdf/fpdf.php");

   //================================ 
   function cabecalho(){
       global $pdf;
       $pdf->AddPage();    //adiciona uma pagina
       $pdf->SetFont('Arial','B',11);
    //    $pdf->Image("imagens/cabecalho.png",65,0,80);
       $pdf->ln(13);    
       $pdf->cell(25,5,date('d/m/Y'),'BTL');
       $pdf->cell(140,5,"TITULO DO RELATORIO",'BT',0,'C');
       $pdf->cell(20,5,$pdf->PageNo(),'BTR',1,'R');
       $pdf->SetFont('Arial','',11);
    }
   //================================ 

   $pdf = new FPDF();  //instancia o objeto
   cabecalho();
   $pdf->Cell(40,10,'Hello World!','',1);
   $pdf->SetFont('Arial','',10);
   $pdf->setFillColor(200,200,230);
   $pdf->Cell(185,5,'Hello World!','BTLR',1,'R',1);
   $pdf->MultiCell(185,5,"este Ã© um textÃ£o bem grandÃ£o que ocupa varias linhas do fpdf. O multicell Ã© um comando que pula linha automaticamente se nÃ£o couber na pagina do pdf");
   for($l=1;$l<=50;$l++){
       if($pdf->gety()>270){cabecalho();}
       $pdf->cell(35,5,"cÃ³digo",'BTRL');    
       $pdf->cell(100,5,"Nome",'BTRL');    
       $pdf->cell(25,5,"fone",'BTRL');    
       $pdf->cell(25,5,"cep",'BTRL');    
       $pdf->ln(5);
   }
   $pdf->Output();
?>