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
        ];
    $this->render("nouveauTest",$data);
  }

  public function categorie_selectionne($true = []){
      $m = Model::get_model();
    $tab = $m->choix_test_ajouté();
    echo "<ul class='accordion-menu'>";
    generer_arbre_testchoisis($tab);
  }

  public function action_choixtest(){ //Permet de selectionner les tests séléctionnés par le profesionnel
    $m = Model::get_model();
    $true=$m->ajout_choix_test($_GET["categorie"]);
    $this->action_listeTest();
    $tab = $m->choix_test_ajouté();
    $this->categorie_selectionne($true);
}
  public function action_supprimer_test(){ //Permet de supprimer les tests séléctionnés par le profesionnel
    $m = Model::get_model();
    $true = $m->supprimer_test($_GET["categorie"]);
    $this->action_listeTest();
    $this->categorie_selectionne($true);
  }
}
?>
