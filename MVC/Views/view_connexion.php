<?php require("view_begin.php"); ?>


    <div class="login-page">
    <div class="formm">
    <form class="register-form">
    </form>

    <form class="login-form" method = "post" action = "?controller=home&action=home">
      <input type="text" placeholder="Nom d'utilisateur" name="login"/>
      <input type="password" placeholder="Mot de passe" name="mdp"/>
      <button>CONNEXION</button>
      <p class="message">Pas enregistré ? <a href="?controller=home&action=inscription">Créer un compte</a></p>
    </form>
    </div>
    </div>

  </body>
</html>
