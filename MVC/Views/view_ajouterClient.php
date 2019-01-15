<?php require("view_begin.php");
 			redirection();?>

<?php //var_dump($data);?>
<?php //var_dump($_SESSION);?>

<div class="container-fluid  album bg-light">
  <div class="row">
    <h2 class="title col-lg-12"> Ajouter un pratiquant</h2>
  </div>
  <div class="row col-lg-12 offset-md-3 col-md-6 ">
    <p class="col-lg-6 text-center"> Ici, vous pouvez ajouter un nouveau pratiquant à votre compte. </p>
    </div>
  </div>
	<form class=" offset-lg-3 col-lg-6 formultest" action='?controller=mesClients&action=ajouterClient' method='post'> <!-- Client = pratiquant -->

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
