<?php
class Controller_home extends Controller {

  public function action_default(){
      $this -> action_home();
  }

  public function action_home(){
    $m = Model::get_model();
    $this->render2("accueil");
    unset($_SESSION['pdfcree']);
  }

  public function action_inscription(){
    $this->render2("inscription");
  }

  public function action_homeConnect(){
    $m = Model::get_model();
    $this->render2("moncompte");
  }
}
?>
