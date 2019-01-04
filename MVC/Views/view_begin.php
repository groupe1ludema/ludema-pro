<!doctype html>
<html lang="en">
<?php  //var_dump($_SESSION);?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equip="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet"
  	href="htpps://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script
  	src="https://ajax.googleapis.com/ajax/libs/3.2.1/jquery.min.js">
  	</script>
  	<script
  	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	  </script>
      <link rel="icon" href="Content/image/logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Content/css/bootstrap.min.css" >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="Content/css/ludema.css">
    </head>
    <body>


        <!-- Barre en Haut -->
         <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="?controller=home&action=home"><img class="logo img-responsive " src="Content/image/logo.png" alt="Logo Ludema"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="?controller=home&action=default">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://centreludema.fr/">Centre Ludema</a>
            </li>
            <?php if(isset($_SESSION["connecte"]) and $_SESSION["connecte"] and isset($_SESSION["login"]) ) :?>
            <li class="nav-item">
              <a class="nav-link" href="?controller=home&action=homeConnect">Mon Compte</a>
            </li>
          </ul>
          <ul class="navbar-nav my-1 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="?controller=connexion&action=deconnexion">Déconnexion</a>
            </li>
            <?php else :?>
              </ul>
              <ul class="navbar-nav my-1 my-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="?controller=connexion">Connexion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?controller=connexion&action=inscription_insert">Inscription</a>
                </li>
              </ul>
            <?php endif ?>
      </nav>


                          <?php //CETTE BALISE EST A SUPPRIMé UNE fois que le systeMe de connexion est fonctionel

                              //SIMULER CONNECTION
                              //$_SESSION["connecte"]=true;
                              //$_SESSION["login"]="Walid"

                              //SIMULER DECONNECTION
                              //session_destroy();
                          ?>


    </header>
