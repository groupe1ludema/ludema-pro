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
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">À propos</h4>
              <p class="text-muted">LUDEMA est une Société par Actions Simplifiées dont la présidente est Céline De Prins et le Directeur Général Mathieu Vergnault. Le siège social est situé au 49 rue de Paris, 95310 Saint Ouen l’Aumône. La SAS LUDEMA possède une activité en lien avec l’enseignement de disciplines sportives et d’activités de loisirs, code APE 8551Z.

N° SIREN : 842 256 364 ; N° SIRET : 842 256 364 00014.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Nous contacter</h4>
              <ul class="list-unstyled">
                <li><a href="https://twitter.com/centre_ludema" class="text-white"><img src="Content/image/LogoOfficielTwitter.png" class="logoRS"/></a>
                <a href="https://www.facebook.com/centre.ludema" class="text-white"><img src="Content/image/LogoOfficielFacebook.png" class="logoRS"/></a>
                <a href="https://www.instagram.com/centre_ludema/" class="text-white"><img src="Content/image/LogoOfficielInstagram.png" class="logoRS"/></a></li>

                <li><a href="https://centreludema.fr/" class="text-white">Centre Ludema</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm ">
        <div class="container-fluid d-flex">

          <a href="?controller=home&action=home" class="navbar-brand d-flex align-items-center">
          <img class="logo" src="Content/image/logo.png" alt="Logo Ludema">

<?php // STOPPPPPPPPPPPPPPPPPPPPPPPPPPP?>

    <?php if(isset($_SESSION["connecte"]) and $_SESSION["connecte"] and isset($_SESSION["login"]) ) :?>
        <!-- <h4 class="text-white">Bonjour,<?=  $_SESSION["login"]?> </h4> -->
        <a class="btn btn-primary " href="?controller=connexion&action=deconnexion" role="button">Deconnexion</a>
        <a class="btn btn-primary " href="?controller=home&action=homeConnect" role="button">Mon compte</a>
      <?php else :?>
         <a class="btn btn-primary " href="?controller=connexion" role="button">Connexion</a>
          <a class="btn btn-primary " href="?controller=connexion&action=inscription_insert" role="button">Inscription</a>
        <?php endif ?>



          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <?php //CETTE BALISE EST A SUPPRIMé UNE fois que le systeMe de connexion est fonctionel

              //SIMULER CONNECTION
              //$_SESSION["connecte"]=true;
              //$_SESSION["login"]="Walid"

              //SIMULER DECONNECTION
              //session_destroy();
          ?>

        </div>
      </div>
    </header>
