<?php
class Controller_mesClients extends Controller {

  public function action_default(){
      $this->action_mesclients();
  }

  public function action_formajouterClient(){
    $this->render2("ajouterClient");
  }

  public function action_mesclients(){
    $m = Model::get_model();
    $data = [
            "listeClients" => $m->get_my_client()
        ];
    $this->render("mesClient",$data);
  }

  public function action_ajouterClient(){
    $m = Model::get_model();
    $_POST['age']=(int)$_POST['age'];
    $m->ajouter_client();
    $this->render2("ajouterClient");
  }

  public function action_saveClient(){
    $m = Model::get_model();
    $m->ajouter_client();
    $this->render2("ajouterClient");
  }

  public function action_modifierClient(){
    $m = Model::get_model();
    $m->modifier_client($_GET['id'],$_SESSION['login'],$_POST);
    $this->action_default();
  }

  public function action_suppClient(){
    $m = Model::get_model();
    $m->supprimer_client($_GET['id'],$_SESSION['login']);
    $this->action_default();
  }

  public function action_donneeClient(){
    $m = Model::get_model();
    $data = [
            "clientChoisi" => $m->get_my_donnees($_GET["id"]),
            "listeClients" => $m->get_my_client()

        ];
    $this->render("mesClient",$data);
  }
}
?>
