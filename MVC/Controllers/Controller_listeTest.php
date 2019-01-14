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
            "tab" => $m->choix_test_ajouté(),
            "nomCompo"=> $m->get_nomComposition()
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

  public function action_choixtestCompo(){ //Permet de selectionner les tests séléctionnés par le profesionnel
    $m = Model::get_model();
    $res=$m->get_detailComposition($_GET['nomComposition'], $_SESSION['login']);
    $tab=explode("#",$res['detailComposition']);
    foreach($tab as $val){
      $m->ajout_choix_test($val);
    }
    $this->action_listeTest();
  }

  public function action_sauvegarderComposition(){ //Permet de sauvegarder une composition de test
    $m = Model::get_model();
    $tab = $m->choix_test_ajouté();
    $listeCompo="";
    foreach($tab as $val){
      foreach($val as $val2){
        $listeCompo= $listeCompo . $val2 . "#";
      }
    }
    $listeCompo=substr($listeCompo, 0, -1);
    $tab = $m->existe_Composition($_POST['nomCompo'],$_SESSION['login']);
    if($tab["nomCompo"]==0){
      if($m->ajout_composition($_POST['nomCompo'],$listeCompo,$_SESSION['login']))
      $this->action_listeTest();
    }
    else
      echo "Composition existe déjà !";
  }

  public function action_supprimerComposition(){ //Permet de supprimer les tests séléctionnés par le profesionnel
    $m = Model::get_model();
    $true = $m->supprimer_composition($_GET["nomComposition"],$_SESSION['login']);
    $this->action_listeTest();

  }
}
?>
