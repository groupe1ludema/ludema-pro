<?php
require('Utils/HTML2pdf/fpdf.php');

    //A4 width :219mm
    //default margin: 10mm
    //writable horizontal: 219-(10*2)=189mm


    class myPDF extends FPDF{
        function header(){
            $this->Image('Utils/HTML2pdf/logo.png',5,10,-1000);
            $this->SetFont('Arial','B',20);
            $this->Cell(190,5,utf8_decode('Résultats des tests physiques'),0,0,'C');
            $this->Ln(20);
        }
        
        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','',8);
            $this->Cell(276,5,'Page'.$this->PageNo().'/{nb}',0,0,'C');
        }   

        function content(){
            //Cell (width, height,text,border,endline,[align])
            $this->SetFont('Arial','B',16);
            $this->Cell(39,6,'',0,0);//espace
        $this->Cell(150,6,utf8_decode('Résultats du test: '/*.$questions[0][0]['Test'].'.'*/),0,1);
            $this->Ln();

            $this->SetFont('Arial','B',12);
            $this->MultiCell(189,6,utf8_decode('Ce test de Schober (distance doigts-sol) permet de mesurer la mobilité du rachis lombaire. Ce test, facilement réalisable et à faible coût, apporte beaucoup d’enseignements !'),1,'L',false);
            $this->Ln(12);
            
            $this->Cell(10,5,'',0,0);//espace
            $this->Cell(100,5,utf8_decode('NOM: Walid'),0,0);
            $this->Cell(79,5,utf8_decode('AGE: 20 ans'),0,1);

            $this->Cell(10,5,'',0,0);//espace
            $this->Cell(100,5,'FAIT LE: 29.12.18',0,0);
            $this->Cell(79,5,utf8_decode('Par Dr. Kilimonde'),0,1);
            $this->Ln();

            /*1er Test
            $this->SetFont('Arial','B',14);
            $this->Cell(140,5,utf8_decode('Distance (centimètres) : '),0,0);
            $this->SetFont('Arial','B',12);
            $this->Cell(49,5,utf8_decode('10 cm. '),0,1);
            $this->Ln();

            //2e Test
            $this->SetFont('Arial','B',14);
            $this->Cell(140,5,utf8_decode('Douleur durant le test (0-10) : '),0,0);
            $this->SetFont('Arial','B',12);
            $this->Cell(49,5,utf8_decode('7. '),0,1);
            $this->Ln();

            //3e Test
            $this->SetFont('Arial','B',14);
            $this->Cell(140,5,utf8_decode('Technique utilisée : '),0,1);
            $this->SetFont('Arial','B',12);
            $this->MultiCell(189,6,utf8_decode('Pieds joints, Walid a gentiment basculé le buste vers l\’avant en déroulant le dos, bras tendus, pour tenter de toucher le sol avec les doigts.
Ce qu\'il n\'a pas vraiment réussi. En effet, il est impératif de ne pas plier les genoux.' ),0,'L',false);
            $this->Ln();

            //4e Test
            $this->SetFont('Arial','B',14);
            $this->Cell(140,5,utf8_decode('Commentaires : '),0,1);
            $this->SetFont('Arial','B',12);
            $this->MultiCell(189,6,utf8_decode('Test réussi à moitié walid a failli toucher ses molets. Walid est souuuple. '),0,'L',false);
            $this->Ln();
            */

            
            



        }



    }
    
    $pdf = new myPDF(); 
    $pdf->AliasNbPages();
    $pdf->AddPage('P','A4',0);
    $pdf->content($questions);
    var_dump($questions);
    $pdf->Output();
?>