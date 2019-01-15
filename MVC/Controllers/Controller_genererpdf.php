<?php
class Controller_genererpdf extends Controller {

  public function action_default(){
      $this -> action_genererpdf();
  }

  public function action_genererpdf(){
    $m = Model::get_model();
    $n=sizeof($_SESSION['listTestSelectionnes']);
    for($i=0;$i<$n;$i++){
      $question[$i]=$m->get_questions($_SESSION['listTestSelectionnes'][$i]['catgeorie']);
      $description[$i]=$m->get_descriptionTest($_SESSION['listTestSelectionnes'][$i]['catgeorie']);
      $categorie[$i]=$m->get_categorie($_SESSION['listTestSelectionnes'][$i]['catgeorie']);
    }


    $data = [
      /*"listeTest"  => $m->get_question($_SESSION['listTestSelectionnes']),*/
      "questions" => $question,
      "description"=>$description,
      "categorie"=>$categorie,
      "nbtest"=>$n
  ];
  //var_dump($data);
  include("Utils/HTML2pdf/generepdf.php");

  $pdf = new myPDF();
  $pdf->AliasNbPages();
  $pdf->AddPage('P','A4',0);
  $pdf->content($data);
  $pdf->Output();
  unset($_SESSION['clientChoisi']);
  $_SESSION['pdfcree'] = true;
  



  }
}
?>
