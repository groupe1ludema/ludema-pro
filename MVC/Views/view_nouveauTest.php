<?php require("view_begin.php");
redirection();?>

<div class="container">
  <div class="row">
    <h2> Nouveau test </h2>

  </div>
  <div class="row justify-content-center arbreETtestselection">
    <div class="col-lg-5">

      <ul class="accordion-menu"> <!-- Menu déroulant -->
        <li> <!-- PARTIE COMPOSITION DE TEST -->
          <div class="dropdownlink">Vos compositions de test</div>

          <ul class="submenuItems">

            <?php foreach ($nomCompo as $nom): ?>
              <?php foreach ($nom as $val): ?>

                <a class="aaccordeon" href="?controller=listeTest&action=choixtestCompo&nomComposition=<?= e(urlencode($val))?>"><?= e($val) ?> </a>
                  <a class="aaccordeon" href='?controller=listeTest&action=supprimerComposition&nomComposition=<?= e(urlencode($val))?>'>
                    <img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10 /></a>

                <?php endforeach ?>
              <?php endforeach ?>
            </ul>

          </li> <!-- FIN PARTIE COMPOSITION DE TEST -->

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
      <div>
        <div class="card bg-light mb-3">
          <div class="card-header"> <center> Test sélectionnés : </center></div>
          <div class="card-body">
            <?php foreach ($tab as $val) :?>
              <p> <center><?= $val['catgeorie'] ?><a href='?controller=listeTest&action=supprimer_test&categorie=<?= urlencode($val["catgeorie"])?>'>
                <img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10 /></a> </center>
              </p>
            <?php endforeach ?>

            <center><a class="btn btn-primary mb-2" href="?controller=appliquerTest&action=afficherTest">Valider</a> </center>
            <form class="login-form mb-2" method = "post" action="?controller=listeTest&action=sauvegarderComposition">
              <input type="text" placeholder="Nom composition de test" name="nomCompo"/>
              <input type="submit" name="sauvegarder" class="btn btn-primary" value="Sauvegarder"/>
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
