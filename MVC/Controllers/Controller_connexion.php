<?php
class Controller_connexion extends Controller {

  public function action_default(){
      $this -> action_connexion();
  }

  public function action_connexion(){
    $this->render("connexion");
  }

  public function action_ouverture_connexion(){
    $m = Model::get_model();
    if(!empty($_POST["login"]) || !empty($_POST["mdp"])){
      $tab = $m->existe_login_user($_POST["login"]);
      if($tab["login_exist"]!=0){
        $pass = $m->verification_login_mdp($_POST["login"])[0];
        if(password_verify($_POST["mdp"], $pass)){
          $_SESSION['login']=$_POST["login"];
          $_SESSION["connecte"]=true;
          $this->render("accueil");
        }
        else{
          $data=array("mdp"=>"Le mot de passe saisi n'est pas valide","msg2"=>"","msg"=>"");
          $this->render("connexion",$data);
        }
      }
      else{
        $data=array("msg"=>"Le login saisi n'existe pas !","msg2"=>"","mdp"=>"");
        $this->render("connexion",$data);
      }
    }

    else{
      $data=array("msg2"=>"Veuillez saisir un mdp et un identifiant ","msg"=>"","mdp"=>"");
      $this->render("connexion",$data);
    }

  }

  public function action_deconnexion(){
    session_unset();session_destroy();
    $this->render2("accueil");
  }

  public function action_inscription_insert(){
    $m = Model::get_model();
    if(!empty($_POST["nom"]) || !empty($_POST["prenom"]) || !empty($_POST["email"]) || !empty($_POST["login"]) || !empty($_POST["mdp"]) || !empty($_POST["mdp"])){
      $tab = $m->existe_login_user($_POST["login"]);
      $tab2 = $m->existe_login_email($_POST["email"]);
        if($tab["login_exist"]!=0){
        $data = ["msg" => "Le login saisi existe déjà !","mdp"=>"","msg2"=>""];
        $this->render("inscription",$data);
      }
      else if ($tab2["email_exist"]!=0){
        $data = ["msg" => "L'email saisi existe déjà !","mdp"=>"","msg2"=>""];
        $this->render("inscription",$data);
      }

      else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $data = ["msg" => "L'email n'est pas au bon format !","mdp"=>"","msg2"=>""];
        $this->render("inscription",$data);
      }

      else if($_POST["mdp"] != $_POST["mdp2"]){
        $data = ["mdp" => "Les mots de passe ne sont pas les memes","msg" => "","msg2"=>""];
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
        $mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
        $data = array('login'=>$_POST["login"],'email'=>$_POST["email"], 'mdp'=>$mdp, 'prenom'=>$_POST["prenom"], 'nom'=>$_POST["nom"]);
        $true = $m->insert_inscription($data);
        if($true){
          header('Location:?controller=connexion');
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
