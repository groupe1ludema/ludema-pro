<?php
class Controller_connexion extends Controller {

  public function action_default(){
      $this -> action_connexion();
  }

  public function action_connexion(){
    $m = Model::get_model();
    $this->render2("connexion");
  }
}
?>
