<?php require("view_begin.php"); ?>
<?php //var_dump($questions)?>

	<h1> <?=$questions[0]['Test']?></h1> <!-- Ici on affiche le nom du test. -->

	<?php foreach($questions as $testAndQ ) :?>
		<p class="intitulequestion"> <?= $testAndQ['Intitule'];?> </p> <!-- Ici sera affiché l'intitulé de la question -->

		<?php if($testAndQ['Inputtype']=="int") :?>
			<p class="intitulequestion">
	    	<input type="text" name=<?= $testAndQ['Intitule'];?> /> <!-- on affiche une petite zone de texte et un chiffre est attendu -->
			</p>

		<?php elseif($testAndQ['Inputtype']=="string") :?>
			<p class="intitulequestion">
				<input type="text" name=<?= $testAndQ['Intitule'];?> /> <!-- on affiche une petite zone de texte et un String est attendu -->
			</p>

			<?php // COMMENT FAIRE POUR SAUVEGARDER TOUTES LES DONNEES RENTREES PAR LUTILISATEUR DANS LA BDD ? ON SAUVEGARDE UNIQUEMENT LE PDF TELECHARGEABLE NON ?
						// JE PENSE QUE OUI SINON CEST GALERE, GENRE CHAQUE PROFESSIONNEL POURRA CONSULTER LES PDF DES TESTS EFFECTUES PAR SES PATIENTS.
						//  IL FAUT AUSSI MODIFIER LE name=".." PAR QQCH DE PLUS SIMPLE PCQ LINTITULE DE LA QUESTION CEST TROP LONG ! ?>

		<?php elseif($testAndQ['Inputtype']=="commentaire") :?>  <!-- on affiche une grande zone de texte -->
			<p class="intitulequestion">
				<textarea name=<?= $testAndQ['Intitule'];?> rows="4" cols="28">
				</textarea>
			</p>

		<?php elseif($testAndQ['Inputtype']=="echelle") :?> <!-- Ici on affiche une échelle graduée de 0 à 10 -->
			<form>
				<input type="range" class="slider" name=<?= $testAndQ['Intitule'];?> min="0" max="10" step="1" value="0" oninput="res.value=parseInt(<?= $testAndQ['Intitule'];?>.value)"/>
					<output name="res">0</output>
			</form>


			<?php endif?>
		<?php endforeach?>


		</body>
		</html>
