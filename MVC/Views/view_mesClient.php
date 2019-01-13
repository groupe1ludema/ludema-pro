<?php require("view_begin.php");
 			redirection();?>

<?php ?>
<?php //var_dump($_SESSION);?>

<form class=" offset-lg-3 col-lg-6 formultest" action='?controller=mesClients&action=donneeClient' method='post'>
          	<h1 class="titretest "> Choix du pratiquant </h1>
            <div>
              <SELECT name="client">
              <?php foreach($listeClients as $client) :?>
              <OPTION> <?= e($client['prenom']." ".$client['nom'])?>
              <?php endforeach?>
              </SELECT>
      	      <input type="submit" class="btn  btn-primary btnpdf" role="button" value='GO'>
            </div>
</form>
        <?php if(issEt($_POST["client"])) : ?>
          <form class=" offset-lg-3 col-lg-6 formultest" action='?controller=mesClients&action=saveClient' method='post'> <!-- Client = pratiquant -->
        				<h1 class="titretest ">  <?= $_POST["client"];?>  </h1>

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
        	      <input type="submit" class="btn  btn-primary btnpdf" role="button" value='Sauvergarder les modifications'>
                </div>
        </form>
        <?php endif?>


<?php require("view_end.php"); ?>
