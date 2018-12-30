<?php
class Controller_connexion extends Controller {

  public function action_default(){
      $this -> action_connexion();
  }

  public function action_connexion(){
    $this->render("connexion");
  }

/*  public function action_ouverture_connexion(){
    $m = Model::get_model();




    session_start();
  }*/

  public function action_inscription_insert(){
    $m = Model::get_model();
    if(isset($_POST["nom"]) || isset($_POST["prenom"]) and isset($_POST["email"]) and isset($_POST["login"]) and isset($_POST["mdp"]) and isset($_POST["mdp"])){
      $tab = $m->existe_login_user($_POST["login"]);
      $tab2 = $m->existe_login_email($_POST["email"]);
        if($tab["login_exist"]!=0){
        $data = ["msg" => "Le login saisie existe déjà !","mdp"=>"","msg2"=>""];
        $this->render("inscription",$data);
      }
      else if ($tab2["email_exist"]!=0){
        $data = ["msg" => "L'email saisie existe déjà !","mdp"=>"","msg2"=>""];
        $this->render("inscription",$data);
      }

      else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $data = ["msg" => "L'email n'est pas au bon format !","mdp"=>"","msg2"=>""];
        $this->render("inscription",$data);
      }

      else if($_POST["mdp"] != $_POST["mdp2"]){
        $data = ["mdp" => "Les mots de ne sont pas les memes","msg" => "","msg2"=>""];
        $this->render("inscription",$data);
      }
      else if(strlen($_POST["mdp"]) < 8){
        $data = ["mdp" => "Le mot de passe doit contenir plus de 8 caractères !","msg" => "","msg2"=>""];
        $this->render("inscription",$data);
      }
      else if(!(preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#',$_POST["mdp"]))){
        $data = ["mdp" => "Utiliser des majuscules, des chiffres et des symboles !","msg" => "","msg2"=>  ""];
        $this->render("inscription",$data);
      }
      else{
        $data = array('login'=>$_POST["login"],'email'=>$_POST["email"], 'mdp'=>$_POST["mdp"], 'prenom'=>$_POST["prenom"], 'nom'=>$_POST["nom"]);
        $true = $m->insert_inscription($data);
        if($true){
          $this->render("bienvenu");
        }
      }
    }
    else{
      $data = array("msg"=>"","mdp"=>"","msg2"=>"Veuillez remplir tous les champs");
      $this->render("inscription",$data);
    }
}
}
?>
