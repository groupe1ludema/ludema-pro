<?php
class Controller_appliquerTest extends Controller {

  public function action_default(){
      $this -> action_afficherTest();
  }

  public function action_afficherTest(){
    $m = Model::get_model();
    $n=sizeof($_SESSION['listTestSelectionnes']);
    for($i=0;$i<$n;$i++){
      $rep[$i]=$m->get_questions($_SESSION['listTestSelectionnes'][$i]['catgeorie']);
      $description[$i]=$m->get_descriptionTest($_SESSION['listTestSelectionnes'][$i]['catgeorie']);
    }
    $data = [
            /*"listeTest" => $m->get_question($_SESSION['listTestSelectionnes']),*/
            "questions" => $rep,
            "description"=>$description,
            "nbtest"=>$n
        ];
    $this->render("appliquerTest",$data);
  }
}
?>
