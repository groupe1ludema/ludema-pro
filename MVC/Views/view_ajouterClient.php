<?php require("view_begin.php");
 			redirection();?>

<?php //var_dump($data);?>
<?php //var_dump($_SESSION);?>

	<form class=" offset-lg-3 col-lg-6 formultest" action='?controller=mesClients&action=ajouterClient' method='post'> <!-- Client = pratiquant -->
				<h1 class="titretest "> Ajouter un pratiquant </h1>

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

<?php require("view_end.php"); ?>
