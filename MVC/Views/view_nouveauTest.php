<?php require("view_begin.php");
redirection();?>

<div class="container-fluid  album bg-light">
  <div class="row">
    <h2 class="title col-lg-12"> Sélection de tests </h2>
  </div>
  <div class="row col-lg-12 offset-md-3 col-md-6 ">
    <p class="col-lg-6 text-center"> Sélectionnez les tests que vous souhaitez effectuer ainsi que le pratiquant concerné. </br>
    Vous avez aussi la possibilité de sauvegarder une composition de test afin d'avoir un raccourci pour vos tests les plus utilisés.</p>
  </div>
</div>
        <!-- tableau de pratiquants-->
      <div  class=" offset-lg-3 col-lg-6 formultest">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Age</th>
            </tr>
          </thead>
          <body>
            <?php foreach($listeClients as $client) : ?>

              <?php  if(isset($_SESSION['clientChoisi'])and $client['idClient']==$_SESSION['clientChoisi']['idClient']) : ?>
                <tr style="background-color:#F5F5DC;">
                  <td><?= e($client['nom'])?></a></td>
                  <td><?= e($client['prenom'])?></td>
                  <td><?= e($client['age'])?></td>
                  <td><a href="?controller=listeTest&action=clientChoisi&nom=<?= e($client['nom']) ?>&prenom=<?=  e($client['prenom']) ?>&age=<?=  e($client['age']) ?>&idClient=<?= e($client['idClient']) ?>">Choisir</a></td>
                </tr>
              <?php else : ?>
                <tr>
                  <td><?= e($client['nom'])?></a></td>
                  <td><?= e($client['prenom'])?></td>
                  <td><?= e($client['age'])?></td>
                  <td><a href="?controller=listeTest&action=clientChoisi&nom=<?= e($client['nom']) ?>&prenom=<?=  e($client['prenom']) ?>&age=<?=  e($client['age']) ?>&idClient=<?= e($client['idClient']) ?>">Choisir</a></td>
                </tr>
              <?php endif ?>
              <?php endforeach ?>
            </tbody>
          </table>

      </div>

<div class="container">
  <div class="row justify-content-center arbreETtestselection">
    <div class="col-lg-4 col-md-5 col-sm-8 col-xs-8 col-11">
        <div class="card bg-light mb-3">    <!-- PARTIE COMPOSITION DE TEST -->
          <div class="card-header">  Vos compositions de test </div>
              <div class="card-body">
                <?php foreach ($nomCompo as $nom): ?>
                  <?php foreach ($nom as $val): ?>
                  <p> <center>
                    <a href="?controller=listeTest&action=choixtestCompo&nomComposition=<?= e(urlencode($val))?>"><?= e($val) ?> </a>
                    <a href='?controller=listeTest&action=supprimerComposition&nomComposition=<?= e(urlencode($val))?>'>
                    <img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10 /></a>
                  </center> </p>
                  <?php endforeach ?>
                <?php endforeach ?>
            </div>
          </div>
        </div> <!-- FIN PARTIE COMPOSITION DE TEST -->

        <div class="col-lg-4 col-md-6 col-sm-8 col-11">
          <ul class="accordion-menu">    <!-- Menu déroulant -->
          <?php foreach ($listeCategory as $category): ?>
            <li>
              <div class="dropdownlink"><?= e($category) ?></div>
              <ul class="submenuItems">
                <?php foreach ($listeTest as $test): ?>
                  <?php if($test['Categorie']==e($category)): ?>
                    <li><a href="?controller=listeTest&action=choixtest&categorie=<?= e(urlencode($test['Nom']))?>"><?= e($test['Nom']) ?> </a></li>
                  <?php endif ?>
                <?php endforeach ?>
              </ul>
            </li>
          <?php endforeach ?>
        </ul>
      </div>

      <div class="col-lg-4 col-md-5 col-sm-8 col-11">
        <div class="card bg-light mb-3">
          <div class="card-header"> <center> Test sélectionnés : </center></div>
          <div class="card-body">
            <?php foreach ($tab as $val) :?>
              <p> <center><?= $val['catgeorie'] ?><a href='?controller=listeTest&action=supprimer_test&categorie=<?= urlencode($val["catgeorie"])?>'>
                <img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10 /></a> </center>
              </p>
            <?php endforeach ?>
            <center><a class="btn btn-primary mb-2" href="?controller=appliquerTest&action=afficherTest">Valider</a>  <a class="bleu" href="?controller=listeTest&action=supprimer_tout_test"><img class='icone' src='Content/image/bin.png' alt='supprimer' height=30 width = 30 /></a> </center>
            <?php if(isset($_SESSION["nomCompo"]) && $_SESSION["nomCompo"] == 1) : ?>
              <center><p> Le nom de la composition existe déjà ! </p></center>
              <?php $_SESSION["nomCompo"] = 0; ?>
            <?php endif ?>
            <?php if(isset($_SESSION["CompoVide"]) && $_SESSION["CompoVide"] == 1) : ?>
              <center> <p> Veuillez entrer un nom de composition ! </p> </center>
              <?php $_SESSION["CompoVide"] = 0?>
            <?php endif ?>
            <?php if(isset($_SESSION["testVide"]) && $_SESSION["testVide"] == 1) : ?>
              <center> <p> Veuillez sélectionner des tests ! </p> </center>
              <?php $_SESSION["testVide"] = 0?>
            <?php endif ?>
            <form class="login-form mb-2" method = "post" action="?controller=listeTest&action=sauvegarderComposition">
              <input type="text" placeholder="Nom composition de test" name="nomCompo" maxlength="30"/>
              <input type="submit" name="sauvegarder" class="btn btn-primary sauv" value="Sauvegarder"/>
            </form>

          </div>
        </div>
      </div>

      <?php $_SESSION['listTestSelectionnes']=$tab;?>
    </div>
  </div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="Content/js/menuderoulant.js"></script>
  <?php  require("view_end.php"); ?>
