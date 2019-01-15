<?php
class Controller_appliquerTest extends Controller {

  public function action_default(){
      $this -> action_afficherTest();
  }

  public function action_afficherTest(){
    if(isset($_SESSION['listTestSelectionnes']) && !empty($_SESSION['listTestSelectionnes'])){
    $m = Model::get_model();
    $n=sizeof($_SESSION['listTestSelectionnes']);
    for($i=0;$i<$n;$i++){
      $rep[$i]=$m->get_questions($_SESSION['listTestSelectionnes'][$i]['catgeorie']);
    //  $description[$i]=$m->get_descriptionTest($_SESSION['listTestSelectionnes'][$i]['catgeorie']); // On ne met pas de description
    }

    $data = [
            /*"listeTest" => $m->get_question($_SESSION['listTestSelectionnes']),*/
            "questions" => $rep,
          //  "description"=>$description,
            "nbtest"=>$n
        ];
    }
    if(isset($data))
      $this->render("appliquerTest",$data);
    else
    header('Location: http://localhost/LUDEMA/MVC/?controller=listeTest&action=choixTest');
  }
}
?>
