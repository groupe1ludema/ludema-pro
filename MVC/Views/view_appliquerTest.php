<?php require("view_begin.php"); ?>
<?php //var_dump($questions) ?>
<?php //var_dump($description) ?>
	<form class=" offset-lg-3 col-lg-6 formultest">
		<?php for($i=0;$i<$nbtest;$i++) : ?>
				<h1 class="titretest "> <?=$questions[$i][0]['Test']?></h1> <!-- Ici on affiche le nom du test. -->
				<p> <?=$description[$i][0]['description'] ?> </p>
		<?php foreach($questions[$i] as $testAndQ ) :?>

				<label for="text"><?= $testAndQ['Intitule'];?></label> <!-- Ici sera affiché l'intitulé de la question -->


		<?php if($testAndQ['Inputtype']=="int") :?>
				<div class="form-group ">
	    	<input type="text" class="form-control  col-lg-1 col-md-1 col-sm-2 " name=<?= $testAndQ['Intitule'];?> /> <!-- on affiche une petite zone de texte et un chiffre est attendu -->
			</div>


		<?php elseif($testAndQ['Inputtype']=="string") :?>
				<div class="form-group">
				<input type="text" class="form-control" name=<?= $testAndQ['Intitule'];?> /> <!-- on affiche une petite zone de texte et un String est attendu -->
				</div>

		<?php elseif($testAndQ['Inputtype']=="commentaire") :?>  <!-- on affiche une grande zone de texte -->
				<div class="form-group">
				<textarea class="form-control" name=<?= $testAndQ['Intitule'];?> rows="4" cols="28">
				</textarea>
				</div>


		<?php elseif($testAndQ['Inputtype']=="echelle") :?> <!-- Ici on affiche une échelle graduée de 0 à 10 -->
				<?php $name=str_replace(' ','',$testAndQ['Intitule']);?>
				<div class="form-group">
				<input type="range" class="slider form-control" name=<?=e($name);?> min="0" max="10" step="1" value="0" oninput="<?=e($name)."res"?>.value=parseInt(<?=e($name);?>.value)"/>
					<output name=<?= e($name)."res"?>>0</output>
				</div>

	<?php /*		<?php elseif($testAndQ['Inputtype']=="echelle6-20") :?> <!-- Ici on affiche une échelle graduée de 6 à 20 -->
					<div class="form-group">
					<input type="range" class="slider form-control" name=<?= $testAndQ['Intitule'];?> min="6" max="20" step="1" value="0" oninput="res.value=parseInt(<?= $testAndQ['Intitule'];?>.value)"/>
						<output name="res">6</output>
					</div> */ ?>
		<?php endif?>
	<?php endforeach?>
<?php endfor?>
	<button type="button" class="btn btn-primary btnpdf">Sauvegarder en PDF</button>

</form>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <!-- Pour faire fonctionner la barre du haut, ça serai bien de mettre dans le footer mais ya un pb -->
	 <script src="Content/js/bootstrap.min.js"></script>


		</body>
		</html>
