<?php require("view_begin.php"); ?>
<?php var_dump($questions)?>
<?php foreach($questions as $testAndQ ) :?>
	<p> <?= $testAndQ['Intitule'];?> </p>
		<?php if($testAndQ['Inputtype']=="Text") :?>
		<p>
	    	<input type="text" name=<?= $testAndQ['Intitule'];?> />
		</p>
	<?php elseif($testAndQ['Inputtype']=="Radio") :?>
				<input type="radio" id="contactChoice2" name=<?= $testAndQ['Intitule'];?>>
	<?php endif?>
<?php endforeach?>
		</form>
		</body>
		</html>
