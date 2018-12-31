<?php
require('fpdf.php');

    //A4 width :219mm
    //default margin: 10mm
    //writable horizontal: 219-(10*2)=189mm



    //var_dump($_POST);
    class myPDF extends FPDF{
        function header(){

            $this->SetFont('Arial','B',18);
            $this->SetTextColor(3,61,134);
            $this->Cell(95,5,utf8_decode('Bilan de condition physique'),0,0);
            $this->SetFont('Arial','',12);
            $this->SetDrawColor(241, 196, 15);
            $this->SetLineWidth(1);
            $this->MultiCell(94,5,utf8_decode('Date de l\'évaluation : 23/10/2019    Professionnel : VERGNAULT Mathieu           Salle : Petit Dojo                                        Contact : centre.ludema@gmail.com'),1,'L',false);
            $this->Ln(5);
            $this->Image('Utils/HTML2pdf/muscle.png',15,18,-150);

            //Espace margin
            $this->Cell(95,5,'',0,0);

            $this->SetFont('Arial','',12);
            $this->SetDrawColor(214, 0, 126  );
            $this->SetLineWidth(1);
            $this->MultiCell(94,5,utf8_decode('NOM : ESTSOUPLE                                      Prénom : Walid                                              Date de naissance : 10/12/1957'),1,'L',false);
            $this->Ln(10);


        }

        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','',8);
            $this->Cell(276,5,'Page'.$this->PageNo().'/{nb}',0,0,'C');
        }

        function content($data){






            //var_dump($data['categorie']);
            //var_dump($data['questions'][0][O][]);
            //var_dump($data['questions'][0][0]);
            // var_dump($_POST);
            for($i=0;$i<$data['nbtest'];$i++){
                $this->SetDrawColor(255,255,255);
                $this->SetTextColor(255, 255, 255);
                $this->SetFillColor(6, 225, 214  );
                $this->SetFont('Arial','B',16);

              
                //titre
                $this->MultiCell(189,6,utf8_decode($data['categorie'][$i][0]['categorie']),1,'C',true);
                //$this->MultiCell(189,6,utf8_decode($data['questions'][$i][0]['Test']),1,'C',true);
                //Cell (width, height,text,border,endline,[align])
                $this->SetDrawColor(0,0,0);
                $this->SetTextColor(3,61,134);
                $this->Cell(39,6,'',0,0);//espace
                $this->SetFont('Arial','B',14);
                $this->Cell(150,6,utf8_decode('Résultats du test: '.$data['questions'][$i][0]['Test'] .'.'),0,1);
                $this->Ln();

                for($j=0;$j<sizeof($data['questions'][$i]);$j++){
                    $this->SetFont('Arial','B',14);
                    $this->Cell(140,5,utf8_decode($data['questions'][$i][$j]['Intitule'].':'),0,0);



                    $name=str_replace(' ','',$data['questions'][$i][$j]['Intitule']);
                    if(isset($_POST[$name])){
                        $this->SetFont('Arial','B',12);
                        $this->MultiCell(49,6,utf8_decode($_POST[$name]),0,'L',false);
                    }

                    $this->Ln();
                   /* if(isset($_POST[$data['questions'][$i][$j]['Intitule']]))
                        echo $_POST[$data['questions'][$i][$j]['Intitule']];
                    else
                        echo "pas complété";





                            }*/
                 }



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
    }


?>
