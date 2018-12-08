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
}
?>
