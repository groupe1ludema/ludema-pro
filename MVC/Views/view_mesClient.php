<?php require("view_begin.php"); ?>

<?php //var_dump($data);?>
<?php //var_dump($_SESSION);?>

	<form class=" offset-lg-3 col-lg-6 formultest" action='?controller=mesClients&action=ajouterClient' method='post'>
				<h1 class="titretest "> Ajouter un client </h1>

        <div>
        <label >Nom :</label> <input type="text" class="form-control " name="nom" />
        </div>

        <div>
        <label>Prenom :</label>
				<input type="text" class="form-control" name="prenom" />
        </div>

        <div>
        <label>Age :</label>
        <input type="number" class="form-control  col-lg-1 col-md-1 col-sm-2 " name="age" />
        </div>

        <div>
        <label>Particularité :</label>
				<textarea class="form-control"name="note" rows="4" cols="28"></textarea>
        </div>

        <div>
        <label>Sexe :</label>
        <SELECT name="sexe">
        <OPTION>Homme
        <OPTION>Femme
        </SELECT>
        </div>

        <div>
	      <input type="submit" class="btn  btn-primary btnpdf" role="button" value='Ajouter'>
        </div>
</form>

<form class=" offset-lg-3 col-lg-6 formultest" action='?controller=mesClients&action=donneeClient' method='post'>
          	<h1 class="titretest "> Données Client </h1>
            Client :</label>
            <div>
              <SELECT name="client">
              <?php foreach($listeClients as $client) :?>
              <OPTION> <?= e($client['prenom']." ".$client['nom'])?>
              <?php endforeach?>
              </SELECT>
      	      <input type="submit" class="btn  btn-primary btnpdf" role="button" value='GO'>
            </div>
</form>

<?php require("view_end.php"); ?>