
<?php require("view_begin.php");
 			redirection();?>
<?php //var_dump($questions) ?>
<?php //var_dump($description)?>

	<form class=" offset-lg-3 col-lg-6 formultest" action='?controller=genererpdf' method='post'>
		<?php for($i=0;$i<$nbtest;$i++) : ?>
				<h1 class="titretest "> <?=$questions[$i][0]['Test']?></h1> <!-- Ici on affiche le nom du test. -->
		<?php foreach($questions[$i] as $testAndQ ) :?>
				<label for="text"><?= $testAndQ['Intitule'];?></label> <!-- Ici sera affiché l'intitulé de la question -->

				<?php $name=str_replace(' ','',$testAndQ['Intitule'].'DE'.$testAndQ['Test']);
				echo e($name); ?> <!-- Test à retirer quand tout marche -->

		<?php if($testAndQ['Inputtype']=="int") :?>
				<div class="form-group ">
	    	<input type="text" class="form-control  col-lg-1 col-md-1 col-sm-2 " name=<?= e($name);?> /> <!-- on affiche une petite zone de texte et un chiffre est attendu -->
				</div>
		<?php elseif($testAndQ['Inputtype']=="string") :?>
				<div class="form-group">
				<input type="text" class="form-control" name=<?=  e($name);?> /> <!-- on affiche une petite zone de texte et un String est attendu -->
				</div>
		<?php elseif($testAndQ['Inputtype']=="commentaire") :?>  <!-- on affiche une grande zone de texte -->
				<div class="form-group">
				<textarea class="form-control"name=<?= e($name);?> rows="4" cols="28"></textarea>
				</div>
		<?php elseif($testAndQ['Inputtype']=="axe010") :?> <!-- Ici on affiche un axe graduée de 0 à 10 -->
				<div class="form-group">
				<input type="range" class="slider form-control" name=<?= e($name);?> min="0" max="10" step="1" value="0" oninput="<?=e($name).'res'?>.value=parseInt(<?= e($name);?>.value)"/>
					<output name=<?= e($name)."res"?>>0</output>
				</div>
			<?php elseif($testAndQ['Inputtype']=="axe620") :?> <!-- Ici on affiche un axe graduée de 6 à 20 -->
					<div class="form-group">
					<input type="range" class="slider form-control" name=<?= e($name);?> min="6" max="20" step="1" value="0" oninput="<?=e($name).'res'?>.value=parseInt(<?= e($name);?>.value)"/>
						<output name=<?= e($name)."res"?>>6</output>
					</div>
		<?php endif?>
	<?php endforeach?>
<?php endfor?>
<p> Commentaire globale </p>
 <div class="form-group">
   <textarea class="form-control"name="bilan_globale" rows="4" cols="28"></textarea>
 </div>
 <p><input type="submit" class="btn btn-primary btnpdf" role="button" value='Sauvegarder en PDF'></p>

</form>
	

	 	<?php require("view_end.php"); ?>
