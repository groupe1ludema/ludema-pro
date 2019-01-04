<?php require("view_begin.php"); ?>


    <div class="login-page">
    <div class="formm">
    <form class="register-form">
    </form>

    <form class="login-form" method = "post" action = "?controller=connexion&action=ouverture_connexion">
      <?php if(isset($_POST["login"])) : ?>
        <p><?= $msg ?><p>
      <?php endif ?>
      <?php if(isset($_POST["login"]) && isset($_POST["mdp"])) : ?>
        <p><?= $msg2 ?><p>
      <?php endif ?>
      <input type="text" placeholder="Nom d'utilisateur" name="login"/>
      <?php if(isset($_POST["mdp"])) :  ?>
        <p><?= $mdp ?>  <p>
      <?php endif ?>
      <input type="password" placeholder="Mot de passe" name="mdp"/>
      <button>CONNEXION</button>
      <p class="message">Pas enregistré ? <a href="?controller=home&action=inscription">Créer un compte</a></p>
    </form>
    </div>
    </div>
<?php require("view_end.php"); ?>
