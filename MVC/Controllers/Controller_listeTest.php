<?php
class Controller_listeTest extends Controller {

  public function action_default(){
      $this -> action_listeTest();
  }

  public function action_listeTest(){
    $m = Model::get_model();
     $data = [
            "listeTest" => $m->get_all_tests(),
            "listeCategory" => $m->get_category(),
            "tab" => $m->choix_test_ajouté()

        ];
    $this->render("nouveauTest",$data);
  }

  public function action_choixtest(){ //Permet de selectionner les tests séléctionnés par le profesionnel
    $m = Model::get_model();
    if(isset($_GET['categorie']))
      $true=$m->ajout_choix_test($_GET["categorie"]);
    else
      $true=[];
    $this->action_listeTest();
}
  public function action_supprimer_test(){ //Permet de supprimer les tests séléctionnés par le profesionnel
    $m = Model::get_model();
    $true = $m->supprimer_test($_GET["categorie"]);
    $this->action_listeTest();

  }
}
?>
