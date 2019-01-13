
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
            $this->SetLineWidth(0.5);


            
            // case jaune
            $date=date("d-m-Y");//date actuelle

            $this->MultiCell(94,5,utf8_decode('Date de l\'évaluation : '.$date."\nProfessionnel : VERGNAULT Mathieu \nSalle : Petit Dojo \nContact : centre.ludema@gmail.com"),1,'L',false);
            $this->Ln(5);
            $this->Image('Utils/HTML2pdf/muscle.png',15,18,-150);

            //Espace margin
            $this->Cell(95,5,'',0,0);
            //case mauve
            $this->SetFont('Arial','',12);
            $this->SetDrawColor(214, 0, 126  );
            $this->SetLineWidth(0.5);
            $this->MultiCell(94,5,utf8_decode("NOM : ESTSOUPLE \nPrénom : Walid \nDate de naissance : 10/12/1957"),1,'L',false);
            $this->Ln(10);


        }


        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','',8);
            $this->Cell(276,5,'Page'.$this->PageNo().'/{nb}',0,0,'C');
        }

        function content($data){


            //var_dump($data['questions']);
            //var_dump($data['questions'][0][O][]);
            //var_dump($data['questions']);
            // var_dump($_POST);
            //var_dump($data['questions']);
            $this->SetDrawColor(255,255,255);
            $this->SetTextColor(255, 255, 255);     //couleur barre de titre
            $this->SetFillColor(113, 194, 174);
            $this->SetFont('Arial','B',16);

            // CATEGORIE DU TEST 1

            $this->MultiCell(189,6,utf8_decode($data['categorie'][0][0]['categorie']),1,'C',true);
            //Cell (width, height,text,border,endline,[align])
            $this->SetDrawColor(0,0,0);
            $this->SetTextColor(69,161,138);

            //1er Titre et Test
            $this->SetTextColor(69,161,138);
            $this->SetFont('Arial','B',14);
            $this->Cell(150,6,utf8_decode($data['questions'][0][0]['Test']),0,1);
            $this->Ln(0.5);
            $this->SetTextColor(3,61,134);
            for($j=0;$j<sizeof($data['questions'][0]);$j++){

                $name=str_replace(' ','',$data['questions'][0][$j]['Intitule'].'DE'.$data['questions'][0][$j]['Test']);


               // var_dump($_POST[$name]);
                
                //var_dump($name.'/'.$data['questions'][$i][$j]['Test']);
                if(isset($_POST[$name])){
                    if($_POST[$name] != ''){
                    
                        if($data['questions'][0][$j]['Inputtype'] == 'commentaire' || $data['questions'][0][$j]['Inputtype'] == 'string' ){
                            //Question mis au début de la ligne
                            $this->SetFont('Arial','B',10);
                            $this->Cell(140,5,utf8_decode($data['questions'][0][$j]['Intitule'].':'),0,1);
                            //Résultat de la question
                            $this->SetFont('Arial','',10);
                            $this->MultiCell(189,6,utf8_decode($_POST[$name]),0,'L',false);


                        }else{

                            $this->SetFont('Arial','B',10);
                            $this->Cell(140,5,utf8_decode($data['questions'][0][$j]['Intitule'].':'),0,0);
                            $this->SetFont('Arial','',10);
                            $this->MultiCell(49,6,utf8_decode($_POST[$name]),0,'L',false);
                        }
                    }
                }

                $this->Ln(0.5);

             }
            for($i=1;$i<$data['nbtest'];$i++){

                
                //var_dump($data['questions']);
                //titre
                if($data['categorie'][$i][0]['categorie'] == $data['categorie'][$i-1][0]['categorie']){


                    //Font TITRE DU TEST
                    $this->SetTextColor(69,161,138);
                    $this->SetFont('Arial','B',14);
                    $this->Cell(150,6,utf8_decode($data['questions'][$i][0]['Test']),0,1);
                    $this->Ln(0.5);
                    $this->SetTextColor(3,61,134);
                } else{


                    $this->SetDrawColor(255,255,255);
                    $this->SetTextColor(255, 255, 255);     //couleur barre de titre
                    $this->SetFillColor(113, 194, 174);
                    $this->SetFont('Arial','B',16);
                    $this->MultiCell(189,6,utf8_decode($data['categorie'][$i][0]['categorie']),1,'C',true);
                    //Cell (width, height,text,border,endline,[align])
                    $this->SetDrawColor(0,0,0);
                    $this->SetTextColor(69,161,138);
                    $this->SetTextColor(69,161,138);
                    $this->SetFont('Arial','B',14);
                    $this->Cell(150,6,utf8_decode($data['questions'][$i][0]['Test']),0,1);
                    $this->Ln(0.5);
                    $this->SetTextColor(3,61,134);


                }
                // var_dump($data['questions']);
                
                for($j=0;$j<sizeof($data['questions'][$i]);$j++){

                    $name=str_replace(' ','',$data['questions'][$i][$j]['Intitule'].'DE'.$data['questions'][$i][$j]['Test']);
                    

                    
                    //var_dump($name.'/'.$data['questions'][$i][$j]['Test']);
                    if(isset($_POST[$name])){
                        if($_POST[$name] != ''){
                           
                            if($data['questions'][$i][$j]['Inputtype'] == 'commentaire' || $data['questions'][$i][$j]['Inputtype'] == 'string' ){
                                //Question mis au début de la ligne
                                
                            
                                $this->SetFont('Arial','B',10);
                                $this->Cell(140,5,utf8_decode($data['questions'][$i][$j]['Intitule'].':'),0,1);
                                //Résultat de la question
                                $this->SetFont('Arial','',10);
                                $this->MultiCell(189,6,utf8_decode($_POST[$name]),0,'L',false);
                                

                            }else{

                                $this->SetFont('Arial','B',10);
                                $this->Cell(140,5,utf8_decode($data['questions'][$i][$j]['Intitule'].':'),0,0);
                                $this->SetFont('Arial','',10);
                                $this->MultiCell(49,6,utf8_decode($_POST[$name]),0,'L',false);
                            }
                        }
                    }

                    $this->Ln(0.5);

                 }
                 $this->Ln();



            }
        }
    }



?>
