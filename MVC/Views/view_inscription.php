<?php require("view_begin.php");
      redirection2();?>


    <div class="login-page">
    <div class="formm">
    <form class="register-form">
    </form>

    <form class="login-form" method = "post" action = "?controller=connexion&action=inscription_insert">
        <?php if(isset($_POST["login"]) || isset($_POST["email"])) : ?>
        <p><?= $msg ?><p>
        <?php endif ?>
        <?php if(isset($_POST["nom"])&&isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["mdp"]) && isset($_POST["mdp"])) :?>
          <p><?=$msg2?><p>
          <?php endif ?>
      <input type= "text" placeholder="Nom" name="nom"/>
      <input type= "text" placeholder="Prenom" name="prenom"/>

      <input type= "text" placeholder="Email" name="email">

      <input type="text" placeholder="Nom d'utilisateur" name="login"/>
      <?php if(isset($_POST["mdp"])) :  ?>
        <p><?= $mdp ?>  <p>
      <?php endif ?>
      <input type="password" placeholder="Mot de passe" name="mdp"/>
      <input type="password" placeholder="Confirmer mot de passe" name="mdp2"/>
      <button>S'INSCRIRE</button>
      <p class="message">Pas enregistré ? <a href="?controller=home&action=inscription">Créer un compte</a></p>
    </form>
    </div>
    </div>


<?php require("view_end.php"); ?>
