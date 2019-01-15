<?php require("view_begin.php");
redirection();?>

<?php ?>
<?php //var_dump($_SESSION);?>

<div class="container-fluid  album bg-light">
  <div class="row">
    <h2 class="title col-lg-12"> Mes pratiquants</h2>
  </div>
  <div class="row col-lg-12 offset-md-3 col-md-6 ">
    <p class="col-lg-6 text-center"> Ici, vous pouvez consulter la liste de vos pratiquants. </br>
      Vous avez aussi la possibilité de les suprimmer ou de modifier leurs informations.</p>
    </div>
  </div>
  <form class=" offset-lg-3 col-lg-6 formultest" action='?controller=mesClients&action=donneeClient' method='post'>
    <!-- tableau de pratiquants-->
    <div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Age</th>
            <th scope="col">Particularité</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($listeClients as $client) : ?>
            <tr>
              <td><?= e($client['nom'])?></a></td>
              <td><?= e($client['prenom'])?></td>
              <td><?= e($client['age'])?></td>
              <td><?= e($client['note'])?></td>
              <td><a href="?controller=mesClients&action=donneeClient&id=<?= e($client['idClient']) ?>">Consulter/Modifier</a></td>
              <td><a href="?controller=mesClients&action=suppClient&id=<?= e($client['idClient']) ?>"><img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10 /></a></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>
  </form>

  <?php if(issEt($clientChoisi)) : ?>
    <form class=" offset-lg-3 col-lg-6 formultest" action="?controller=mesClients&action=modifierClient&id=<?= $_GET['id']?>" method='post'> <!-- Client = pratiquant -->
      <h1 class="titretest "> <?= $clientChoisi["prenom"]?> <?= $clientChoisi["nom"]?> </h1>
      <div>
        <label >Nom :</label> <input type="text" class="form-control " name="nom" value=<?= $clientChoisi["nom"]?> />
      </div>

      <div>
        <label>Prenom :</label>
        <input type="text" class="form-control" name="prenom" value=<?= $clientChoisi["prenom"]?> />
      </div>

      <div>
        <label>Age :</label>
        <input type="number" class="form-control  col-lg-1 col-md-1 col-sm-2 " name="age" value=<?= $clientChoisi["age"]?> />
      </div>

      <div>
        <label>Particularité :</label>
        <textarea class="form-control"name="note" rows="4" cols="28"><?=$clientChoisi["note"]?> </textarea>
      </div>

      <div>
        <label>Sexe :</label>
        <SELECT name="sexe">
          <OPTION><?= $clientChoisi["sexe"]?>
            <?php if( $clientChoisi["sexe"]="Homme") : ?>
              <OPTION>Femme
              <?php else : ?>
                <OPTION>Homme
                <?php endif?>
              </SELECT>
            </div>

            <div>
              <input type="submit" class="btn  btn-primary btnpdf" role="button" value='Sauvegarder les modifications'>
            </div>
          </form>
        <?php endif?>


        <?php require("view_end.php"); ?>
